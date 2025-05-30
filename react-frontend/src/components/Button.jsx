import React from "react";

const Button = ({ name, color, onClick }) => {
  return (
    <button
      className={`px-5 py-2 rounded-xl transition bg-${color} hover:bg-hover-dark-pink text-white cursor-pointer w-[135px]`}
      onClick={onClick}
    >
      {name}
    </button>
  );
};


export default Button;
