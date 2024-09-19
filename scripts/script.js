// Getting elements from index and Homepage. //

let divConnexion = document.getElementById("connexion")
let btnconnection = document.getElementById("btn-connexion")
let btnhome = document.getElementById("btn-home");
let form = document.getElementById("form");
//Connexion Event //
form.style.display='none';
btnhome.addEventListener("click", ()=>{
    btnhome.style.margin='20%'
    form.style.display='';
})