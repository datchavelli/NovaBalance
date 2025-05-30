import React, { useState } from "react";
import logo from "../assets/Logo.webp";
import { Link, useLocation } from "react-router-dom";
import Button from "./Button";

function Header() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  const location = useLocation();
  const isOnServicesPage = location.pathname === "/usluge";

  const scrollToSection = (id) => {
    const el = document.getElementById(id);
    if (el) {
      el.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
      setIsMenuOpen(false);
    }
  };

  return (
    <header className="top-0 left-0 w-full z-50 bg-white border-b border-gray-400 shadow-sm">
      <div className="flex flex-wrap items-center justify-between gap-6 px-4 custom:px-10 ">
        {/* Logo */}
        <Link to="/" className="shrink-0">
          <img src={logo} alt="logo" className="w-36 md:w-44" />
        </Link>

        {/* Desktop Navigation */}
        {!isOnServicesPage && (
          <div className="hidden custom:flex items-center justify-between flex-1 border-l border-gray-400 pl-4">
            <ul className="flex gap-6 lg:gap-12 justify-center items-center w-full">
              <li>
                <button
                  onClick={() => scrollToSection("general")}
                  className="hover:text-hover-pink transition font-bold tracking-[1px]"
                >
                  Benefiti
                </button>
              </li>
              <li>
                <button
                  onClick={() => scrollToSection("about")}
                  className="hover:text-hover-pink transition font-bold tracking-[1px]"
                >
                  O nama
                </button>
              </li>
              <li>
                <button
                  onClick={() => scrollToSection("functionality")}
                  className="hover:text-hover-pink transition font-bold tracking-[1px]"
                >
                  Funkcionalnosti
                </button>
              </li>
              <li>
                <Link
                  to="/usluge"
                  className="hover:text-hover-pink transition font-bold tracking-[1px]"
                >
                  Usluge
                </Link>
              </li>
              <li>
                <button
                  onClick={() => scrollToSection("podcast")}
                  className="hover:text-hover-pink transition font-bold tracking-[1px]"
                >
                  Podcast
                </button>
              </li>
            </ul>
          </div>
        )}

        {/* CTA Button (Desktop only) */}
        {!isOnServicesPage && (
          <div className="hidden custom:block">
            <Button
              name="Kontakt"
              color="hover-pink"
              onClick={() => scrollToSection("contact")}
            />
          </div>
        )}

        {!isOnServicesPage && (
          <>
            {/* Mobile Menu Button */}
            <div className="custom:hidden ml-auto">
              <button
                onClick={toggleMenu}
                className="text-gray-800 focus:outline-none"
                aria-label="Open menu"
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
                  {[
                    { label: "Benefiti", section: "general" },
                    { label: "O nama", section: "about" },
                    { label: "Funkcionalnosti", section: "functionality" },
                    { label: "Podcast", section: "podcast" },
                  ].map(({ label, section }) => (
                    <li key={section}>
                      <button
                        onClick={() => scrollToSection(section)}
                        className="hover:text-hover-pink transition font-bold"
                      >
                        {label}
                      </button>
                    </li>
                  ))}
                  <li>
                    <Link
                      to="/usluge"
                      className="hover:text-hover-pink transition font-bold"
                      onClick={() => setIsMenuOpen(false)}
                    >
                      Usluge
                    </Link>
                  </li>
                </ul>
              </div>
            )}
          </>
        )}
      </div>
    </header>
  );
}

export default Header;
