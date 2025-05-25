import React, { useState, useRef, useEffect } from 'react';

const ModalWithForm = () => {
  const [isOpen, setIsOpen] = useState(false);
  const modalRef = useRef(null);

  const [formData, setFormData] = useState({
    ime: '',
    prezime: '',
    email: '',
    organizacija: '',
    telefon: '',
    postanskiBroj: '',
    grad: '',
    drzava: '',
    adresa: '',
    pib: '',
    maticniBroj: ''
  });

  const openModal = () => setIsOpen(true);
  const closeModal = () => setIsOpen(false);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Form submitted:', formData);
    closeModal();
  };

  const Field = ({ label, name, type = "text", required = false }) => (
    <div className="flex flex-col">
      <label htmlFor={name} className="mb-1 text-sm font-medium text-gray-700">
        {label}
        {required && <span className="text-red-500 ml-1">*</span>}
      </label>
      <input
        id={name}
        name={name}
        type={type}
        value={formData[name]}
        onChange={handleChange}
        required={required}
        className="border border-gray-300 px-3 py-2 rounded-xl focus:outline-none focus:ring-2 focus:ring-hover-dark-pink"
      />
    </div>
  );

  // ⛔ Close modal when clicking outside
  useEffect(() => {
    const handleClickOutside = (event) => {
      if (modalRef.current && !modalRef.current.contains(event.target)) {
        closeModal();
      }
    };

    if (isOpen) {
      document.addEventListener("mousedown", handleClickOutside);
    } else {
      document.removeEventListener("mousedown", handleClickOutside);
    }

    return () => {
      document.removeEventListener("mousedown", handleClickOutside);
    };
  }, [isOpen]);

  return (
    <div>
      <button
        onClick={openModal}
        className="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
      >
        Otvori Formu
      </button>

      {isOpen && (
        <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 px-4">
          <div
            ref={modalRef}
            className="bg-white rounded-xl p-4 sm:p-6 w-full max-w-2xl shadow-lg overflow-y-auto max-h-[90vh]"
          >
            <h2 className="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6 text-gray-800 text-center">Kontakt</h2>
            <form onSubmit={handleSubmit} className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <Field label="Ime" name="ime" required />
              <Field label="Prezime" name="prezime" required />
              <Field label="Email" name="email" type="email" required />
              <Field label="Organizacija" name="organizacija" required />
              <Field label="Telefon" name="telefon" required />
              <Field label="Poštanski broj" name="postanskiBroj" required />
              <Field label="Grad" name="grad" required />
              <Field label="Država" name="drzava" required />
              <Field label="Adresa" name="adresa" required />
              <Field label="PIB" name="pib" required />
              <Field label="Matični broj" name="maticniBroj" />

              <div className="col-span-full flex flex-col sm:flex-row justify-end mt-2 sm:mt-4 gap-2">
                <button
                  type="button"
                  onClick={closeModal}
                  className="w-full sm:w-auto px-5 py-2 rounded-xl transition bg-black hover:bg-hover-dark-pink text-white"
                >
                  Otkaži
                </button>
                <button
                  type="submit"
                  className="w-full sm:w-auto bg-[#a0258c] text-white px-6 py-2 rounded-xl hover:bg-hover-dark-pink transition"
                >
                  Pošalji
                </button>
              </div>
            </form>
          </div>
        </div>
      )}
    </div>
  );
};

export default ModalWithForm;
