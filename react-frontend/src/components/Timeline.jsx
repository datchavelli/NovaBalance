import React from "react";

import Projektovanje1 from "../assets/Projektovanje 01.png"
import Projektovanje2 from "../assets/Projektovanje 02.png"
import SoftwareImage from "../assets/NovaFormaSoftware.png"
import Consult from "../assets/Consult.jpg"
import Course from "../assets/Course.jpg"

const steps = [
  {
    id: 1,
    text: "This is the first step description.",
    image: {Projektovanje1},
    reverse: false,
  },
  {
    id: 2,
    text: "This is the second step description.",
    image: "https://via.placeholder.com/300x200",
    reverse: true,
  },
  {
    id: 3,
    text: "This is the third step description.",
    image: {Consult},
    reverse: false,
  },
  {
    id: 4,
    text: "This is the fourth step description.",
    image: {Course},
    reverse: true,
  },
];

const Timeline = () => {
  return (
    <div className="flex flex-col items-center space-y-12 relative px-4 py-16">
      {/* Vertical line */}
      {/* <div className="absolute top-[64px] bottom-[64px] w-px bg-gray-300 left-1/2 transform -translate-x-1/2 z-0" /> */}

      {steps.map(({ id, text, image, reverse }, index) => (
        <div
          key={id}
          className={`flex flex-col md:flex-row items-center md:justify-between w-full max-w-5xl z-10 ${
            reverse ? "md:flex-row-reverse" : ""
          }`}
        >
          {/* Text Box */}
          <div className="w-full md:w-2/5 bg-blue-100 text-gray-800 p-6 rounded-lg shadow-md text-center md:text-left">
            <h2 className="text-xl sm:text-2xl md:text-3xl font-semibold">
              Nova<span className="text-hover-dark-pink font-bold">Forma</span>{" "}
              – Računovodstveni softver
            </h2>
            <p className="font-merriweather mt-4 text-sm sm:text-base">
              Savremeno rešenje za lako upravljanje finansijama, izveštajima i
              poreskim obavezama. Pojednostavite računovodstvo i osigurajte
              preciznost svojih finansijskih podataka.
            </p>
            <ul className="list-disc pl-4 sm:pl-5 text-sm sm:text-base mt-4 font-merriweather space-y-2">
              <li>Optimizacija računovodstvenih procesa</li>
              <li>Brzo i jednostavno upravljanje finansijama</li>
              <li>Poreska usklađenost bez stresa</li>
            </ul>
          </div>

          {/* Connector */}
          <div className="flex flex-col items-center mx-4 relative z-10">
            {/* Number */}
            <div className="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold z-10">
              {id}
            </div>
          </div>

          {/* Image */}
          <img
            src={Consult}
            alt={`Step ${id}`}
            className="w-full md:w-2/5 h-auto rounded-lg shadow-md mt-6 md:mt-0"
          />
        </div>
      ))}
    </div>
  );
};

export default Timeline;
