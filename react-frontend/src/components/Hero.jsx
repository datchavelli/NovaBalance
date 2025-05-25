import React from "react";

import SoftwareImage from "../assets/NovaFormaSoftware.png";

function Hero() {
  return (
    <div className="flex flex-col gap-4 lg:gap-10 lg:flex-row h-auto lg:h-[calc(100vh-100px)] px-6 md:px-12 lg:px-40 items-center justify-between bg-gradient-to-b from-[#debdda] to-[#ffe6ff]">
      {/* Text Content */}
      <div className="w-full lg:w-1/2 flex flex-col gap-6 md:gap-10 py-8 md:py-12">
        <div className="flex flex-col gap-3 md:gap-4">
          <h1 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-snug">
            <span className="font-bold">Nova</span>{" "}
            <span className="text-hover-dark-pink font-bold">Forma </span>
            računovodstva
          </h1>
          <p className="font-merriweather text-sm sm:text-base md:text-base">
            NovaBalance je web aplikacija koja omogućava pristup vašem
            računovodstvu bilo kada i bilo gde. Sve što vam treba je internet
            pretraživač - bez instalacija i komplikacija.
          </p>
        </div>

        <div className="flex flex-col gap-3 md:gap-4">
          <p className="font-merriweather text-sm sm:text-base md:text-base">
            <span className="font-bold">Prijavite se na Newsletter</span> i
            saznajte šta sve NovaBalance može da uradi za vas.
          </p>
          <div className="flex flex-col sm:flex-row gap-2 font-merriweather">
            <form action="/home/subscirbe" method="post">
              <input
                name="email"
                placeholder="Unesite svoj e-mail"
                className="px-3 py-2 rounded-xl w-full sm:w-1/2 focus:outline-none focus:ring-2 focus:ring-hover-dark-pink"
              />
              <button className="px-5 py-2 rounded-xl max-w-[124px] transition bg-black hover:bg-hover-dark-pink text-white">
                Prijavite se
              </button>
            </form>
          </div>
        </div>
      </div>

      {/* Image */}
      <div className="lg:mt-0 w-full lg:w-1/2 max-w-[600px]">
        <img
          src={SoftwareImage}
          alt="Accounting Image"
          className="w-full rounded-xl"
        />
      </div>
    </div>
  );
}

export default Hero;
