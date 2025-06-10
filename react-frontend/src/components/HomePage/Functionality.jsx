import React from "react";

function Functionality() {
  return (
    <div id="functionality" className="px-6 md:px-12 lg:px-20 xl:px-40 lg:pt-6">
      <div className="w-full flex flex-col justify-center gap-8 py-10 rounded-xl text-black min-h-[600px] bg-gradient-to-b from-[#debdda] to-[#ffe6ff]">
        <h2 className="text-2xl md:text-3xl text-center">
          Šta Vam Nova
          <span className="text-hover-dark-pink font-bold">Forma</span> nudi?
        </h2>
        <p className="text-center font-merriweather font-bold text-sm md:text-base mx-6">
          Više vremena za poslovanje, a manje za papire.
        </p>
        <p className="text-center font-merriweather text-sm md:text-base px-4 md:px-16 max-w-7xl mx-auto">
          Otkrijte kako automatizacija i pametna rešenja pojednostavljuju vaše
          računovodstvo. Automatizacija u NovaForma softveru znači da više ne
          morate provoditi sate ručno unoseći podatke ili proveravajući da li su
          sve stavke tačne. Naš sistem automatski prepoznaje i obrađuje
          dokumente, generiše izveštaje i omogućava vam da se posvetite važnijim
          aspektima poslovanja. Upoznajte se sa svim pametnim funkcijama koje
          vam olakšavaju rad.
        </p>

        <div className="flex flex-col md:flex-row justify-center items-center gap-6 px-4">
          <div className="p-6 rounded-xl text-white text-center w-full md:w-1/3 min-h-[200px] flex flex-col items-center justify-center bg-gradient-to-t from-[#912585] to-[#b266a9] ">
            <h3 className="text-lg md:text-xl font-bold">
              Automatizovani obračuni
            </h3>
            <p className="text-sm md:text-base">
              Plata, fakturisanje i izveštaji dostupni u samo nekoliko klikova.
            </p>
          </div>

          <div className="p-6 rounded-xl text-white text-center w-full md:w-1/3 min-h-[200px] flex flex-col items-center justify-center bg-gradient-to-t from-[#912585] to-[#b266a9]">
            <h3 className="text-lg md:text-xl font-bold">
              Integracija sa DoCloop
            </h3>
            <p className="text-sm md:text-base">
              Elektronske fakture i upravljanje dokumentima bez napora.
            </p>
          </div>

          <div className="p-6 rounded-xl text-white text-center w-full md:w-1/3 min-h-[200px] flex flex-col items-center justify-center bg-gradient-to-t from-[#912585] to-[#b266a9]">
            <h3 className="text-lg md:text-xl font-bold">
              Automatsko učitavanje
            </h3>
            <p className="text-sm md:text-base">
              Prepoznavanje i obrada PDF dokumenata i faktura u realnom vremenu.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Functionality;
