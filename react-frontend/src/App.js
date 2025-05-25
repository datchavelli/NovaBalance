import "./App.css";
import Header from "./components/Header.jsx";
import React from "react";
import Hero from "./components/Hero";
import General from "./components/General";
import Functionality from "./components/Functionality";
import About from "./components/About";
import Footer from "./components/Footer";
import Podcast from "./components/Podcast.jsx";
import Newsletter from "./components/Newsletter.jsx";
import Usluge from "./components/Usluge.jsx";
import ModalWithForm from "./components/KontaktModal.jsx";

function App() {
  return (
    <>
      <div
        id="homepage"
        className="min-h-screen flex flex-col font-lato overflow-x-hidden"
      >
        <Header />
        <ModalWithForm />
        <Hero />
        <General />
        <About />
        <Functionality />
        <Podcast />
        <Newsletter />
        <Footer />
        <Usluge />
      </div>
    </>
  );
}

export default App;
