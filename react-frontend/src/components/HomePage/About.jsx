import React from "react";
import Hero from "../../assets/superheroN.webp";

function About() {
  return (
    <div
      id="about"
      className="scroll-mt-52 flex flex-col lg:flex-row-reverse gap-10 px-6 md:px-12 lg:px-20 xl:px-40 py-24 items-center bg-white"
    >
      {/* Text Section */}
      <div className="w-full lg:w-1/2 flex flex-col gap-4">
        <h2 className="text-2xl md:text-3xl font-semibold">
          Nova<span className="text-hover-dark-pink font-bold">Balance</span>{" "}
          tim: Vaš partner u digitalnoj revoluciji računovodstva
        </h2>
        <p className="font-merriweather text-sm md:text-base">
          Više od 20 godina iskustva u rešavanju računovodstvenih problema
          pomoću softverskih alata učinilo nas je pouzdanim partnerom mnogim
          kompanijama.
          <br />
          <br />
          Naša misija je jasna - automatizacija računovodstvenih procesa i
          upravljanje dokumentima, njihovo elektronsko arhiviranje uz pomoć
          integracije sa DoCloop DMS sistemom, kako biste imali više vremena za
          ono što je zaista važno. Vaše poslovanje raste uz naše inovativne
          alate.
          <br />
          <br />
          Iza NovaForma softvera stoji tim sa vizijom da računovodstvo učini
          dostupnim, jednostavnim i bez stresa. Upoznajte nas bolje i saznajte
          šta nas pokreće.
        </p>
      </div>

      {/* Image Section */}
      <div className="w-full lg:w-1/2">
        <img
          src={Hero}
          alt="Accounting Image"
          className="w-full max-w-[500px] mx-auto rounded-xl"
        />
      </div>
    </div>
  );
}

export default About;
