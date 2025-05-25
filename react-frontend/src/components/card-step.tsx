

const AllSecureCardStep = () => {
  const { locale } = useLanguage();
  const { state, setState } = useAllSecure();
  const isMobile = useIsMobilePageClient();
  const { format } = useFormattedCurrency();
  const { user } = useUser();
  const configuration = useConfiguration();

  const [scriptStatus, setScriptStatus] = useState<ScriptStatus>(
    ScriptStatus.LOADING,
  );

  const [cardNumberFocused, setCardNumberFocused] = useState<boolean>(false);
  const [cvvFocused, setCvvFocused] = useState<boolean>(false);

  const [cardNumberInvalid, setCardNumberInvalid] = useState<{
    message: string;
    invalid: boolean;
    // OVO JE PROMENA INVALID TRUE UMESTO FALSE
  }>({ message: "", invalid: true });
  const [cvvInvalid, setCvvInvalid] = useState<{
    message: string;
    invalid: boolean;
    // OVO JE PROMENA INVALID TRUE UMESTO FALSE
  }>({ message: "", invalid: true });

  const formattedAmount = format(state?.initialDepositState?.amount);
  const formattedFee = format(state?.initialDepositState?.fee);
  const formattedTotal = format(
    (state?.initialDepositState?.amount || 0) +
      (state?.initialDepositState?.fee || 0),
  );

  const currency = configuration?.currencies?.list?.find(
    (currency) => currency.id === user?.PreferredCurrencyID,
  )?.code;

  const form = useForm({
    resolver: zodResolver(allSecureCardFormSchema),
    mode: "onChange",
    reValidateMode: "onChange",
  });
  const { control } = form;
  const { errors } = useFormState({ control });

  const { paymentInitialized, paymentInstance } = useInitializeAllSecurePayment(
    {
      scriptStatus,
      integrationKey: configuration?.payments?.allsecure?.integrationKey!,
      onCardFocusChange: setCardNumberFocused,
      onCvvFocusChange: setCvvFocused,
      onCardNumberInput: () =>
        setCardNumberInvalid({ message: "", invalid: false }),
      onCvvInput: () => {
        setCvvInvalid({ message: "", invalid: false });
      },
    },
  );

  // OVAJ CEO BLOK DO HANDLEINVALIDSUBMIT
  const name = useWatch({ control, name: "card_holder" });
  const month = useWatch({ control, name: "month" });
  const year = useWatch({ control, name: "year" });

  const touchedRef = useRef({ name: false, month: false, year: false });

  useEffect(() => {
    if (name && !touchedRef.current.name) {
      form.trigger("card_holder");
    }

    if (
      (month && !touchedRef.current.month) ||
      (year && !touchedRef.current.year)
    ) {
      form.trigger("month");
      form.trigger("year");
    }
  }, [name, month, year]);

  const [submitted, setSubmitted] = useState(false);

  const handleInvalidSubmit = () => {
    // UBACICIT SETSUBMITED TRUE
    setSubmitted(true);
    paymentInstance?.tokenize(
      { card_holder: "John Doe", month: 1, year: 1970 },
      () => {},
      (error) => {
        const numberError = error.find((e) => e.attribute === "number");
        const cvvError = error.find((e) => e.attribute === "cvv");
        if (numberError)
          setCardNumberInvalid({ message: numberError.message, invalid: true });
        if (cvvError)
          setCvvInvalid({ message: cvvError.message, invalid: true });
      },
    );
  };

  const handleSubmit = async (
    data: z.infer<typeof allSecureCardFormSchema>,
  ) => {
    // UBACICIT SETSUBMITED TRUE
    setSubmitted(true);
    if (paymentInstance) {
      try {
        paymentInstance.tokenize(
          {
            card_holder: data.card_holder,
            month: Number(data.month),
            year: Number(data.year),
          },
          (token, cardData) => {
            const currency = configuration?.currencies?.list?.find(
              (currency) => currency.id === user?.PreferredCurrencyID,
            )?.code;
            fetchApiGW({
              path: "api/transaction/deposit",
              input: {
                language: locale,
                currency: currency!,
                amount: Number(`${state?.initialDepositState?.amount}00`),
                service_id: 1338,
                service_name: "allsecure",
                session: state?.initialDepositState?.session!,
                channel: isMobile
                  ? InitDepositChannel.MOBILE
                  : InitDepositChannel.DESKTOP,
                card_token: token,
                card_mask: `${cardData.first_six_digits}******${cardData.last_four_digits}`,
              },
            })
              .then((res) => {
                if (!res.ok || res.data.code !== 10) {
                  setState?.({ step: AllSecureSteps.STATUS });
                }

                if (res.ok) {
                  if (res?.data?.data?.redirect_url) {
                    setState?.({
                      step: AllSecureSteps.SECURITY,
                      depositState: {
                        transaction_id: res.data.data.transaction_id!,
                        redirect_url: res.data.data.redirect_url,
                      },
                    });
                  } else {
                    setState?.({
                      step: AllSecureSteps.STATUS,
                      depositState: {
                        transaction_id: res.data.data!.transaction_id!,
                      },
                    });
                  }
                }
              })
              .catch((e) => {
                setState?.({ step: AllSecureSteps.STATUS });
              });
          },
          (error) => {
            const numberError = error.find((e) => e.attribute === "number");
            const cvvError = error.find((e) => e.attribute === "cvv");
            if (numberError)
              setCardNumberInvalid({
                message: numberError.message,
                invalid: true,
              });
            if (cvvError)
              setCvvInvalid({ message: cvvError.message, invalid: true });
          },
        );
      } catch (err) {
        setState?.({ step: AllSecureSteps.STATUS });
      }
    } else {
      setState?.({ step: AllSecureSteps.STATUS });
    }
  };

  return (
    <>
      {(scriptStatus === ScriptStatus.LOADING || !paymentInitialized) && (
        <div className="flex h-full w-full items-center justify-center">
          <div className="flex w-full flex-col items-center gap-3">
            <Loader className="size-8 animate-spin" />
            <p className="font-bold">Loading...</p>
            <p className="text-grey-200 text-sm">Please wait...</p>
          </div>
        </div>
      )}

      {scriptStatus === ScriptStatus.LOADED && (
        <div className="flex h-full w-full flex-col items-center justify-center">
          <AllSecureBackButton />
          <Form {...form}>
            <form
              id="payment_form"
              className="flex h-full w-full items-center justify-center"
              style={{ visibility: paymentInitialized ? "visible" : "hidden" }}
              onSubmit={form.handleSubmit(handleSubmit, handleInvalidSubmit)}
            >
              <div className="flex h-auto w-[337px] flex-col gap-1">
                <div className="border-grey-400 flex h-auto w-full flex-row flex-wrap gap-y-1 rounded-t-xl border px-5 py-3">
                  <div className="flex h-auto w-[50%] flex-col">
                    <p className="text-grey-200 text-xs">Amount</p>
                    <p className="text-base text-white">
                      {formattedAmount} {currency}
                    </p>
                  </div>
                  <div className="flex h-auto w-[50%] flex-col">
                    <p className="text-grey-200 text-xs">Fee</p>
                    <p className="text-base text-white">
                      {formattedFee} {currency}
                    </p>
                  </div>
                  <div className="flex h-auto w-[50%] flex-col">
                    <p className="text-grey-200 text-xs">Total</p>
                    <p className="text-base text-white">
                      {formattedTotal} {currency}
                    </p>
                  </div>
                </div>

                <div className="border-grey-400 flex h-auto w-full flex-row flex-wrap gap-y-1 rounded-b-xl border px-5 py-3">
                  <div className="flex h-auto w-full flex-col">
                    <p className="mb-4 text-base text-white">Card Data</p>
                    <input
                      type="hidden"
                      name="transaction_token"
                      id="transaction_token"
                    />
                    <div className="flex h-auto w-full flex-row flex-wrap gap-y-2">
                      <FormField
                        control={control}
                        name="card_holder"
                        render={({ field }) => (
                          <FormItem className="w-full">
                            <FormControl>
                              <Input
                                placeholder="Cardholder Name"
                                {...field}
                                className={cn(
                                  "border-grey-400 border",
                                  errors.card_holder && "border-danger-300",
                                )}
                              />
                            </FormControl>
                            <FormMessage />
                          </FormItem>
                        )}
                      />

                      <div
                        className={cn(
                          "border-grey-400 bg-grey-500 relative flex h-[48px] w-full flex-col rounded-xl border",
                          {/* OVAJ DIV UBACITI */}
                          submitted &&
                            cardNumberInvalid.invalid &&
                            "border-danger-300",
                        )}
                      >
                        <div
                          className="relative z-10 h-[48px] w-full"
                          id="allsecure-number"
                        />
                        <p
                          className={cn(
                            "text-grey-200 absolute left-3 top-[13px] text-sm transition-all duration-300",
                            cardNumberFocused && "top-0.5 text-xs",
                          )}
                        >
                          Card Number
                        </p>
                      </div>
                      {cardNumberInvalid.invalid && (
                        <p className="text-danger-300 text-xs">
                          {cardNumberInvalid.message}
                        </p>
                      )}

                      <div className="flex w-full gap-x-2">
                        <div className="flex h-auto w-[50%] flex-col">
                          <ExpiryDateInput nameMonth="month" nameYear="year" />
                        </div>

                        <div className="flex h-auto w-[50%] flex-col">
                            {/* OVAJ DIV UBACITI */}
                          <div
                            className={cn(
                              "border-grey-400 bg-grey-500 relative flex h-[48px] w-full flex-col rounded-xl border",
                              submitted &&
                                cvvInvalid.invalid &&
                                "border-danger-300",
                            )}
                          >
                            <div
                              className="relative z-10 h-[48px] w-full"
                              id="allsecure-cvv"
                            />
                            <p
                              className={cn(
                                "text-grey-200 absolute left-3 top-[13px] text-sm transition-all duration-300",
                                cvvFocused && "top-0.5 text-xs",
                              )}
                            >
                              CVV
                            </p>
                          </div>
                          {cvvInvalid.invalid && (
                            <p className="text-danger-300 text-xs">
                              {cvvInvalid.message}
                            </p>
                          )}
                        </div>
                      </div>

                      <FormField
                        control={control}
                        name="is_recurring"
                        render={({ field }) => (
                          <FormItem className="mb-2 mt-2 w-full">
                            <FormControl>
                              <Checkbox
                                label="Save the card for future payments."
                                checked={field.value}
                                onCheckedChange={field.onChange}
                              />
                            </FormControl>
                            <FormMessage />
                          </FormItem>
                        )}
                      />

                      <Button
                        type="submit"
                        className="w-full"
                        // UBACITI DISABLED
                        disabled={
                          !form.formState.isValid ||
                          cvvInvalid.invalid ||
                          cardNumberInvalid.invalid
                        }
                      >
                        DEPOSIT ({formattedTotal} EUR)
                      </Button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </Form>
        </div>
      )}

      <Script
        src={configuration?.payments?.allsecure?.libraryEndpoint}
        data-main="payment-js"
        onLoad={() => setScriptStatus(ScriptStatus.LOADED)}
        onReady={() => setScriptStatus(ScriptStatus.LOADED)}
        onError={() => setScriptStatus(ScriptStatus.ERROR)}
      />
    </>
  );
};

export default AllSecureCardStep;
