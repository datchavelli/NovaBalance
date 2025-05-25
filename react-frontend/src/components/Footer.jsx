import React from "react";
import logo from "../assets/Logo.webp";

function Footer() {
  return (
    <footer className="w-full text-black">
      <div className="mx-auto px-4 sm:px-6 lg:px-8 bg-[#debdda] px-24 py-10 lg:py-10">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div className="flex flex-col items-start">
            <img src={logo} alt="logo" className="w-56 h-auto mb-4" />
            <div className="flex gap-4">
              <a href="">
              <img
                src="https://www.svgrepo.com/show/521725/linkedin.svg"
                alt="LinkedIn"
                className="w-8 h-8"
              />
              </a>
              <a href="">
              <img
                src="https://www.svgrepo.com/show/521654/facebook.svg"
                alt="Facebook"
                className="w-8 h-8"
              />
              </a>
              <a href="">
              <img
                src="https://www.svgrepo.com/show/521711/instagram.svg"
                alt="Instagram"
                className="w-8 h-8"
              />
              </a>
              <a href="">
              <img
                src="https://cdn-icons-png.flaticon.com/128/87/87409.png"
                alt="Spotify"
                className="w-8 h-8"
              />
              </a>
              <a href="">
              <img
                src="https://cdn-icons-png.flaticon.com/128/3669/3669688.png"
                alt="YouTube"
                className="w-8 h-8"
              />
              </a>
            </div>
          </div>

          <div>
            <h3 className="text-lg font-semibold mb-2">Brzi Linkovi</h3>
            <ul className="space-y-1 text-black">
              <li>
                <a href="#" className="hover:text-white transition">
                  Benefiti
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-white transition">
                  O nama
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-white transition">
                  Funkcionalnosti
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-white transition">
                  Usluge
                </a>
              </li>
              <li>
                <a href="#" className="hover:text-white transition">
                  Kontakt
                </a>
              </li>
            </ul>
          </div>

          <div>
            <h3 className="text-2xl font-semibold mb-2">
              Prijavite se na newsletter
            </h3>
            <p className="text-black mb-6">
              Budite u toku sa najnovijim vestima, ponudama i unapređenjima
              našeg softvera.
            </p>
            <form className="flex flex-col sm:flex-row sm:items-center gap-4">
              <input
                type="email"
                placeholder="Unesite vaš email"
                className="w-full sm:w-auto flex-1 px-4 py-2 rounded-xl text-black focus:outline-none focus:ring-2 focus:ring-hover-dark-pink"
              />
              <button
                type="submit"
                className="px-6 py-2 text-white bg-hover-pink hover:bg-logo-color rounded-xl transition"
              >
                Prijavi se
              </button>
            </form>
          </div>
        </div>
      </div>
      <div className="w-full px-4 py-3 sm:px-6 lg:px-8 bg-black">
        <div className="flex flex-col sm:flex-row justify-between items-center gap-6">
          <div className="text-center sm:text-left">
            <h2 className="text-xl font-semibold text-white">NovaForma</h2>
            <p className="text-sm text-gray-400">
              © {new Date().getFullYear()} NovaBalance. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
