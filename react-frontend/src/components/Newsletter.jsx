import React from "react";
import konto from "../assets/kontokosta_logo.png";

function Newsletter() {
  return (
    <div className="flex flex-col md:flex-row gap-12 px-6 md:px-12 lg:px-40 pb-24 items-center justify-between">
      <div className="flex flex-col items-start gap-4 w-full md:w-1/2">
        <span className="bg-[#fbe2fb] rounded-xl px-3 py-1 text-sm">
          Kontaktirajte nas
        </span>
        <h2 className="text-2xl md:text-3xl">Tu smo za sva Vaša pitanja!</h2>
        <p className="font-merriweather text-sm md:text-base">
          Ukoliko imate pitanje, predlog, komentar ili upit, pošaljite nam
          poruku – odgovaramo brzo!
        </p>
      </div>
      <div className="w-full md:w-1/2 flex flex-col justify-center gap-6">
        <h2 className="text-2xl md:text-3xl font-semibold">
          Kontaktirajte nas
        </h2>
        <form
          action="/home/contact"
          method="post"
          className="flex flex-col gap-4"
        >
          <input
            type="text"
            placeholder="Ime/Naziv Firme"
            name="cntc_name"
            className="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          />
          <input
            type="text"
            placeholder="Adresa"
            name="cntc_address"
            className="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          />
          <input
            type="text"
            placeholder="Telefon"
            name="cntc_phone"
            className="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          />
          <input
            type="mail"
            placeholder="Email"
            name="cntc_email"
            className="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          />
          <input
            type="text"
            placeholder="PIB"
            name="cntc_pib"
            className="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          />
          <textarea
            placeholder="Vaša poruka"
            rows="4"
            name="cntc_message"
            className="px-4 py-2 border rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-[#a0258c]"
          ></textarea>
          <button
            type="submit"
            className="bg-hover-pink text-white px-6 py-2 rounded-xl hover:bg-hover-dark-pink transition"
          >
            Pošalji poruku
          </button>
        </form>
      </div>
    </div>
  );
}

export default Newsletter;
