/* 
CONFIGURACIONES PREVIAS
*/
let c = console.log,
    cd = console.dir,
    ct = console.table;
let id = document.getElementById.bind(document);
let q = document.querySelector.bind(document);
let all = document.querySelectorAll.bind(document);


/* 
LOGIN
*/

let ingresar = id('ingresar');
let closeLogin = id('closeLogin');

ingresar.addEventListener('click',(event)=> {
    event.preventDefault();
    showLogin();
});

closeLogin.addEventListener('click', ()=> {
    showLogin();
});

function showLogin(){
    let containerLogin = id('containerLogin');
    let containerLoginModal = id('containerLoginModal');
    containerLogin.classList.toggle('show-login');
    containerLoginModal.classList.toggle('animate');
}

