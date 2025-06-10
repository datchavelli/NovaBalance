import React, { useState } from "react";

import ContactModal from "../Modal";
import ScrollToTopButton from "../ScrollToTopButton";
import ServiceHero from "./ServiceHero";
import ServiceSection from "./ServiceSection";

function Services() {
  const [isModalOpen, setIsModalOpen] = useState(false);

  return (
    <>
      <ServiceHero />
      <ServiceSection />
      <div className="p-6 bg-white shadow-lg flex justify-center rounded-xl justify-center pt-10 lg:py-24 bg-gradient-to-b from-white to-[#debdda]">
        <div className="flex flex-col gap-4 justify-center items-center w-full lg:w-1/2 p-6 bg-white shadow-[0_8px_30px_rgba(0,0,0,0.12)] border border-gray-200 rounded-xl ">
          <h2 className="text-2xl md:text-3xl font-semibold">
            Zašto odabrati naše obuke?
          </h2>
          <ul className="pl-5 text-base space-y-2">
            <li className="relative pl-6 before:content-['✔'] before:absolute before:left-0 before:text-hover-dark-pink">
              Stručnost i relevantnost – znanje zasnovano na realnim primerima i
              aktuelnim propisima
            </li>
            <li className="relative pl-6 before:content-['✔'] before:absolute before:left-0 before:text-hover-dark-pink">
              Fleksibilna realizacija – online, uživo u vašim prostorijama ili
              na našoj lokaciji
            </li>
            <li className="relative pl-6 before:content-['✔'] before:absolute before:left-0 before:text-hover-dark-pink">
              Prilagođen sadržaj – od osnovnih do naprednih nivoa, skrojenih
              prema vašem sektoru
            </li>
            <li className="relative pl-6 before:content-['✔'] before:absolute before:left-0 before:text-hover-dark-pink">
              Praktična primena – odmah primenljive veštine koje poboljšavaju
              poslovne procese
            </li>
          </ul>

          <button
            onClick={() => setIsModalOpen(true)}
            className="px-5 py-2 rounded-xl transition bg-hover-pink hover:bg-hover-dark-pink text-white tracking-[1px]"
          >
            Zatražite ponudu
          </button>
        </div>
      </div>
      <ContactModal
        isOpen={isModalOpen}
        onClose={() => setIsModalOpen(false)}
      />
      {!isModalOpen && <ScrollToTopButton />}
    </>
  );
}

export default Services;
