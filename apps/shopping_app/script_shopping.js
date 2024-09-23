let FormEdit = document.getElementById('formEdit');
let logoEdit = document.getElementById('logoEdit');
let listname = document.getElementById('listname');
let btncreatList = document.getElementById('btncreatList');
let formNewList = document.getElementById('formnewList');
let btnsubmitreset= document.getElementById('submit_reset');
let revealReset = document.getElementById('reset');


btnsubmitreset.style.display='none';
listname.style.display='none';
FormEdit.style.display='none';

logoEdit.addEventListener("click", ()=>{
    FormEdit.style.display=''

})

revealReset.addEventListener("click", () =>{
    btnsubmitreset.style.display='';
})
