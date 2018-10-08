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
let ingresarSubmenu = id('ingresarSubmenu');

if(ingresar){
  ingresar.addEventListener('click',(event)=> {
      event.preventDefault();
      showLogin();
  });
}

if(closeLogin){
  closeLogin.addEventListener('click', ()=> {
      showLogin();
  });
}

if(ingresarSubmenu){
  ingresarSubmenu.addEventListener('click', (event)=> {
    event.preventDefault();
    showSubmenuHeader();
    showLogin();
  });
}

function showLogin(){
    let containerLogin = id('containerLogin');
    let containerLoginModal = id('containerLoginModal');
    containerLogin.classList.toggle('show-login');
    containerLoginModal.classList.toggle('animate');
}


/* 
MENU PARA VISTA DE TELEFONO - EFECTO DE CATEGORIAS
*/

let submenu = id('submenu');

if(submenu){
  submenu.addEventListener('click', (event)=> {
    let element = event.target;
    if(element.id === 'categorias'){
      element.classList.toggle('active');
      showSubmenu(element.nextElementSibling);
    }
  });
}

function showSubmenu(element){
  if(element.style.maxHeight){
    element.style.maxHeight = null;
  }else{
    element.style.maxHeight = `${element.scrollHeight}px`;
  }
}

/* 
SUBMENU LATERAL COMPLETO
*/

let submenuHeader = id('submenuHeader');
let closeSubmenu = id('closeSubmenu');

if(submenuHeader){
  submenuHeader.addEventListener('click', ()=> {
    showSubmenuHeader();
  });
}

if(closeSubmenu){
  closeSubmenu.addEventListener('click', ()=> {
    showSubmenuHeader();
  });
}

function showSubmenuHeader(){
  let submenu = id('containerOpciones');
  if(submenu.style.marginLeft === '0px'){
    submenu.style.marginLeft =  '100vw';
    
  }else{
    submenu.style.marginLeft = '0';
  }

}


