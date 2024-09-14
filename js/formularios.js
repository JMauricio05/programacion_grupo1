/** Definición de variables */
// const contactosForm = document.getElementById("contactoFormulario");
const contactosForm = document.forms["contactoForm"];
const nombreErrorMsg = document.getElementById("nombreErrorMsg");
const nombreInp = contactosForm["nombreInp"];
const listaContactos = document.getElementById('listaContactos');

/** Definción de métodos */

const validarNombre = (nombre) => {
  nombreErrorMsg.textContent = "";
  if (nombre.length > 10) {
    nombreErrorMsg.textContent = "El nombre tener maximo 10 caracteres";
    return false;
  }
  return true;
};

const cargarContacto = (contacto)=>{
    const row = document.createElement('tr');

    const nombreCeld = document.createElement('td');
    nombreCeld.textContent = contacto.nombre;
    
    const emailCeld = document.createElement('td');
    emailCeld.textContent = contacto.email;

    const telCeld = document.createElement('td');
    telCeld.textContent = contacto.telefono;

    const btnCeld = document.createElement('td');
    const eleminiarBtn = document.createElement('button');
    eleminiarBtn.textContent = 'Borrar';
    eleminiarBtn.addEventListener('click',()=>{
        //row.innerHTML ='';
        row.remove();
    });
    btnCeld.appendChild(eleminiarBtn);


    row.appendChild(nombreCeld);
    row.appendChild(emailCeld);
    row.appendChild(telCeld);
    row.appendChild(btnCeld);

    const tbody = listaContactos.getElementsByTagName('tbody')[0];
    tbody.appendChild(row);
}

/** Definción de eventos */
contactosForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const nombre = nombreInp.value;
  if (validarNombre(nombre)) {
    const contacto = {
        nombre: nombreInp.value,
        email: contactosForm['emailInp'].value,
        telefono: contactosForm['telefonoInp'].value,
    };
    cargarContacto(contacto);
    contactosForm.reset();
  }
});

nombreInp.addEventListener("keyup", () => validarNombre(nombreInp.value));
