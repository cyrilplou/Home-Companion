// Getting elements from index and Homepage. //

let divConnexion = document.getElementById("connexion");
let btnconnection = document.getElementById("btn-connexion");
let btnhome = document.getElementById("btn-home");
let form = document.getElementById("form");
let logo = document.getElementById("imglogo");

function bgchanger(){
    logo.classList.add("imglogostate3");
};

logo?.addEventListener('click',()=>{
    logo.classList.add('imglogostate2');
    setTimeout(bgchanger,1000);
});
//Connexion Event //
form.style.display='none';

btnhome.addEventListener('click',()=>{
    btnhome.style.margin='20%';
    form.style.display='';
})

