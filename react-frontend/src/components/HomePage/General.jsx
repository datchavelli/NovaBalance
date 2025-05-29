import React, { useState } from "react";
import Carousel1 from "../../assets/Carousel1.jpg";
import Carousel2 from "../../assets/Carousel2.jpg";
import Carousel4 from "../../assets/Carousel4.jpg";

const images = [Carousel1, Carousel2, Carousel4];

function General() {
  const [activeIndex, setActiveIndex] = useState(0);

  return (
    <div
      id="general"
      className="scroll-mt-52 flex flex-col gap-6 px-6 md:px-12 lg:px-20 xl:px-40 pb-16 pt-12 lg:pt-4 bg-gradient-to-t from-[#debdda] to-[#ffe6ff]"
    >
      {" "}
      <h2 className="text-2xl md:text-3xl font-semibold">
        Kako Vam Nova
        <span className="text-hover-dark-pink font-bold">Balance</span> softver
        može pomoći?
      </h2>
      <p className="font-merriweather text-sm md:text-base">
        Znate li razliku između knjigovodstva i računovodstva? Knjigovodstvo
        evidentira, a računovodstvo analizira i planira. NovaForma softver ne
        samo da beleži sve vaše transakcije, već automatski analizira i generiše
        finansijske izveštaje. Bez ručnog unosa, bez grešaka, bez kašnjenja.{" "}
        <br />
        <br />
        Automatizujte učitavanje dokumenata, obradu podataka i kreiranje
        izveštaja uz naš softver. Poreske prijave, finansijski izveštaji i
        obaveze prema Republici Srbiji nikada nisu bili lakši. Sve što vam treba
        je na par klikova.
      </p>
      {/* Desktop layout */}
      <div className="hidden lg:flex flex-row items-center justify-center gap-6 mt-12">
        <img
          src={images[0]}
          alt="software"
          className="w-[220px] h-auto rounded-lg shadow-md"
        />
        <div className="w-14 h-0.5 bg-gray-400"></div>
        <img
          src={images[1]}
          alt="software"
          className="w-72 h-auto rounded-xl shadow-lg border-4 border-gray-300"
        />
        <div className="w-14 h-0.5 bg-gray-400"></div>
        <img
          src={images[2]}
          alt="software"
          className="w-[220px] h-auto rounded-lg shadow-md"
        />
      </div>
      {/* Mobile Carousel */}
      <div className="lg:hidden flex flex-col items-center mt-12">
        <img
          src={images[activeIndex]}
          alt={`carousel-${activeIndex}`}
          className="w-full lg:w-72 h-72 object-cover rounded-xl shadow-md transition-all duration-300"
        />
        <div className="flex mt-4 gap-2">
          {images.map((_, i) => (
            <button
              key={i}
              onClick={() => setActiveIndex(i)}
              className={`w-3 h-3 rounded-full ${
                activeIndex === i ? "bg-[#a0258c]" : "bg-gray-300"
              }`}
            ></button>
          ))}
        </div>
      </div>
    </div>
  );
}

export default General;
