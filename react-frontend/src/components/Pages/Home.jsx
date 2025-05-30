import React from "react";
import Hero from "../HomePage/Hero";
import General from "../HomePage/General";
import About from "../HomePage/About";
import Functionality from "../HomePage/Functionality";
import Podcast from "../HomePage/Podcast";
import Newsletter from "../HomePage/Newsletter";
import ScrollToTopButton from "../ScrollToTopButton";

function Home() {
  return (
    <>
      <Hero />
      <General />
      <About />
      <Functionality />
      <Podcast />
      <Newsletter />
      <ScrollToTopButton />
    </>
  );
}

export default Home;
