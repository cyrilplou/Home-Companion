let FormEdit = document.getElementById('formEdit');
let logoEdit = document.getElementById('logoEdit');
let listname = document.getElementById('listname');
let btncreatList = document.getElementById('btncreatList');
let formNewList = document.getElementById('formnewList');
let btnsubmitreset= document.getElementById('submit_reset');
let revealReset = document.getElementById('reset');
let btnNote = document.getElementById("btns_note")

btnsubmitreset.style.display='none';
listname.style.display='none';
FormEdit.style.display='none';

logoEdit.addEventListener("click", ()=>{
    FormEdit.style.display='';
    listname.style.display='none';
    btnNote.style.display='none'
})

revealReset.addEventListener("click", () =>{
    btnsubmitreset.style.display='';
})


