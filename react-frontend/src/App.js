import "./App.css";
import Header from "./components/Header.jsx";
import React from "react";
import Footer from "./components/Footer";
import { Route, Routes } from "react-router-dom";
import Home from "./components/Pages/Home.jsx";
import ContactModal from "./components/Modal.jsx";
import Usluge from './components/Services/Usluge.jsx'

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
          <Route path="/usluge" element={<Usluge />} />
        </Routes>
        <Footer />
      </div>
    </>
  );
}

export default App;
