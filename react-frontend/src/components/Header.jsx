import React, { useState } from "react";
import logo from "../assets/Logo.webp";
import { Link, useLocation } from "react-router-dom";
import Button from "../shared/Button";

function Header() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  return (
    <header className="border-b border-gray-400">
      <div className="flex flex-wrap items-center justify-between gap-6 px-4 custom:px-10 ">
        {/* Logo */}
        <a href="/" className="shrink-0">
          <img src={logo} alt="logo" className="w-36 md:w-44" />
        </a>

        {/* Desktop Navigation */}
        <div className="hidden custom:flex items-center justify-between flex-1 border-l border-gray-400 pl-4">
          <ul className="flex gap-6 lg:gap-12 justify-center items-center w-full">
            <li>
              <a
                href="/#about"
                className="hover:text-hover-pink transition font-bold tracking-[1px]"
              >
                Benefiti
              </a>
            </li>
            <li>
              <a
                href="/#about"
                className="hover:text-hover-pink transition font-bold tracking-[1px]"
              >
                O nama
              </a>
            </li>
            <li>
              <a
                href="/#functions"
                className="hover:text-hover-pink transition font-bold tracking-[1px]"
              >
                Funkcionalnosti
              </a>
            </li>
            <li>
              <a
                href="/#services"
                className="hover:text-hover-pink transition font-bold tracking-[1px]"
              >
                Usluge
              </a>
            </li>
            {/* <li>
              <a
                href="/#contact"
                className="hover:text-hover-pink transition font-bold"
              >
                Kontakt
              </a>
            </li> */}
          </ul>
        </div>

        {/* CTA Button (Desktop only) */}
        <div className="hidden custom:block">
          <a href="/#contact">
            <button className="px-5 py-2 rounded-xl transition bg-hover-pink hover:bg-hover-dark-pink text-white tracking-[1px]">
              Kontakt
            </button>
          </a>
        </div>

        {/* Mobile Menu Button */}
        <div className="custom:hidden ml-auto">
          <button
            onClick={toggleMenu}
            className="text-gray-800 focus:outline-none"
          >
            <svg
              className="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth={2}
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="w-full mt-4 custom:hidden">
            <ul className="flex flex-col items-start gap-4">
              <li>
                <a
                  href="/#about"
                  className="hover:text-hover-pink transition font-bold"
                >
                  Benefiti
                </a>
              </li>
              <li>
                <a
                  href="/#about"
                  className="hover:text-hover-pink transition font-bold"
                >
                  O nama
                </a>
              </li>
              <li>
                <a
                  href="/NovaBalnce/#functions"
                  className="hover:text-hover-pink transition font-bold"
                >
                  Funkcionalnosti
                </a>
              </li>
              <li>
                <a
                  href="/#services"
                  className="hover:text-hover-pink transition font-bold"
                >
                  Usluge
                </a>
              </li>
              <li>
                <a href="/#contact">
                  <button className="w-full mt-2 mb-4 px-5 py-2 rounded-xl transition bg-hover-pink hover:bg-hover-dark-pink text-white">
                    Newsletter
                  </button>
                </a>
              </li>
            </ul>
          </div>
        )}
      </div>
    </header>
  );
}

export default Header;
