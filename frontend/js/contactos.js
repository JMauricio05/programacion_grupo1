const URL_ENDPOINT = "http://127.0.0.1:8000/api/app";
let contactos = [];
//fetch(`${URL_ENDPOINT}/contactos`)
fetch(URL_ENDPOINT + "/contactos")
.then(response=>{
    console.log(response)
    return response.json();
})
.then(body=>{
    console.log(body);
    contactos= body.data;
    console.log(contactos);
});

