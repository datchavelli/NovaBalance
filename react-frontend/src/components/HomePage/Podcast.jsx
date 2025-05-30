import React from "react";
import podcast from "../../assets/Podcast.png";

function Podcast() {
  return (
    <div id="podcast" className="flex flex-col md:flex-row gap-12 px-6 md:px-12 lg:px-20 xl:px-40 py-24 items-center justify-between">
      <div className="w-full md:w-1/2 flex justify-center">
        <img
          src={podcast}
          alt="Accounting Image"
          className="w-full max-w-[400px] md:max-w-[630px] rounded-xl"
        />
      </div>
      <div className="flex flex-col items-start gap-4 w-full md:w-1/2">
        <span className="bg-[#fbe2fb] rounded-xl px-3 py-1 text-sm">
          Da li želite da saznate više?
        </span>
        <h2 className="text-2xl md:text-3xl">
          Instant Znanje: Digitalna revolucija u računovodstvu: Računovodstvo
          2.0
        </h2>
        <p className="font-merriweather text-sm md:text-base">
          Saznajte kako digitalni alati menjaju način na koji poslujete.
          Automatizacija, efikasnost i priče iz prakse - sve na jednom mestu.
        </p>
        <button className="bg-[#a0258c] text-white px-6 py-2 rounded-xl hover:bg-hover-dark-pink transition">
          Slušajte sada
        </button>
      </div>
    </div>
  );
}

export default Podcast;
