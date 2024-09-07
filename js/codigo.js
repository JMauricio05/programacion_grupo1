function saludar(nombre, apellido) {
  console.log(`Hola ${nombre} ${apellido}`);
}
saludar("Juan", "Perez");

function saludo(nombre, apellido) {
  return `hola ${nombre} ${apellido}`;
}
console.log(saludo("Ana", "Gomez"));

const saludarDos = function (nombre) {
  console.log(`hola ${nombre}`);
};
saludarDos("Pepe");

const saludoDos = function (nombre) {
  return `hola ${nombre}`;
};
console.log(saludoDos("Mateo"));

const saludarTres = (nombre) => console.log(`hola ${nombre}`);
saludarTres("Pepe");

const saludoTres = (nombre) => {
  return `hola ${nombre}`;
};
console.log(saludoTres("Mateo"));

class Persona {
  nombre = "";
  apellido = "";
  edad = 0;
  email = "";

  setNombre(value) {
    this.nombre = value;
  }

  getNombre() {
    return this.nombre;
  }
}

let persona = new Persona();
persona.setNombre("Pepe");
persona.edad = 26;
persona.apellido = "Torres";

const personaDos = {
  nombre: "Juan",
  apellido: "Pepe",
  edad: 30,
  jobs: ["Musica", "Peliculas", "Deportes"],
};

personaDos.nombre = "Pedro";
console.log(personaDos.apellido);
console.log(personaDos["edad"]);

const contactos = [
  { nombre: "Ana", edad: 20, telefono: 123445, email: "ejemplo1@test.com" },
  { nombre: "Pepe", edad: 28, telefono: 5555, email: "ejemplo2@test.com" },
  { nombre: "María", edad: 25, telefono: 4444, email: "ejemplo3@test.com" },
  { nombre: "Carlos", edad: 30, telefono: 33333, email: "ejemplo4@test.com" },
];

console.log(contactos[2].telefono);

console.log(contactos.length);
contactos.push({
  nombre: "Angela",
  edad: 32,
  telefono: 666667,
  email: "ejemplo5@test.com",
});
console.log(contactos);
contactos.unshift({
  nombre: "Pedro",
  edad: 36,
  telefono: 888,
  email: "ejemplo6@test.com",
});
console.log(contactos);
contactos[0] = {
  nombre: "Pedro",
  edad: 36,
  telefono: 88879,
  email: "ejemplo6@test.com",
};
console.log(contactos);
const contactosDos = [
  { nombre: "Mario", edad: 25, telefono: 9999, email: "ejemplo8@test.com" },
  { nombre: "Paola", edad: 27, telefono: 10000, email: "ejemplo9@test.com" },
];
const contactosTres = contactos.concat(contactosDos);
console.log(contactosTres);
const order = [...contactosTres].sort((a, b) => b.edad - a.edad);
console.log(order);
const contacto = contactosTres.find(
  (item) => item.email == "ejemplo5@test.com"
);
console.log(contacto);
const filtro = contactosTres.filter((item) => item.edad >= 26);
console.log(filtro);
const lista = [...contactosTres].map((item)=>{
    return {
        nombre: item.nombre,
        email: item.email
    }
});
console.log(lista);
// const paresImpares = [...contactosTres].map((item)=>{
//     if((item.edad%2)==0){
//         return 'Par';
//     }else{
//         return 'Impar';
//     }
// });
const paresImpares = [...contactosTres].map((item)=>(item.edad%2)==0?'Par':'Impar');
console.log(paresImpares);
