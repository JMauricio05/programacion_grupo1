const modalContacto = document.getElementById("modalEliminarContacto");
const closeBtnModalContacto =
  modalContacto.getElementsByClassName("closeBtn")[0];
const notBtnModalContacto = modalContacto.getElementsByClassName("notBtn")[0];

const contactoForm = document.forms["contactoForm"];

const onDeleteContacto = (id) => {
  const codInput = contactoForm["cod"];
  codInput.value = id;
  modalContacto.classList.remove("ocultarModal");
};

const closeModalContacto = () => {
  modalContacto.classList.add("ocultarModal");
};

closeBtnModalContacto.addEventListener("click", () => closeModalContacto());
notBtnModalContacto.addEventListener("click", () => closeModalContacto());
