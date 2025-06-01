import React from "react";
import Software from "../../assets/NovaFormaSoftware.png";

const ServiceHero = () => {
  return (
    <div className="flex flex-col gap-6 lg:flex-row items-center justify-between px-6 md:px-12 lg:px-12 xl:px-40  py-10 lg:py-20 bg-gradient-to-b from-[#debdda] to-[#ffe6ff]">
      
      {/* Text Content */}
      <div className="w-full lg:w-1/2 flex flex-col gap-6">
        <h1 className="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold leading-snug">
          Nova{" "}
          <span className="text-hover-dark-pink">Balance</span> – Vaš partner za optimizaciju poslovanja i digitalizaciju
        </h1>
        <p className="font-merriweather text-base sm:text-md text-gray-800">
          Modernizujte svoje poslovanje uz sveobuhvatna rešenja NovaBalance softvera. 
          Od efikasnog računovodstva do automatizacije poslovnih procesa – sve na jednom mestu.
        </p>
      </div>

      {/* Image */}
      <div className="w-full lg:w-1/2 mt-10 lg:mt-0 max-w-xl mx-auto lg:mx-0">
        <img
          src={Software}
          alt="Accounting Software"
          className="w-full h-auto rounded-xl shadow-lg object-contain"
        />
      </div>
    </div>
  );
};

export default ServiceHero;
