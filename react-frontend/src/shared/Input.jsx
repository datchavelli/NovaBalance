const Input = ({ id, name, type, placeholder, required, value, onChange }) => {
  return (
    <input
      id={id}
      name={name}
      type={type}
      value={value}
      required={required}
      placeholder={placeholder}
      className="w-full sm:w-auto min-w-[300px] border flex-1 px-4 py-2 rounded-xl text-black focus:outline-none focus:ring-2 focus:ring-hover-dark-pink"
      onChange={onChange}
    />
  );
};

export default Input;
