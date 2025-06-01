import "./App.css";
import Header from "./components/Header.jsx";
import React from "react";
import Hero from "./components/Hero";
import General from "./components/General";
import Functionality from "./components/Functionality";
import About from "./components/About";
import Footer from "./components/Footer";
import { Route, Routes } from "react-router-dom";
import Home from "./components/Pages/Home.jsx";
import ContactModal from "./components/Modal.jsx";
import ServicesPage from "./components/Pages/Services.jsx";

function App() {
  return (
    <>
      <div
        id="homepage"
        className="min-h-screen flex flex-col font-lato overflow-x-hidden"
      >
        <Header />
        <ContactModal />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/usluge" element={<ServicesPage />} />
        </Routes>
        <Footer />
      </div>
    </>
  );
}

export default App;
