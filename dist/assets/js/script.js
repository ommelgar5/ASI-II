"use strict";

/* 
CONFIGURACIONES PREVIAS
*/
var c = console.log,
    cd = console.dir,
    ct = console.table;
var id = document.getElementById.bind(document);
var q = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);
/* 
LOGIN
*/

var ingresar = id('ingresar');
var closeLogin = id('closeLogin');
var ingresarSubmenu = id('ingresarSubmenu');

if (ingresar) {
  ingresar.addEventListener('click', function (event) {
    event.preventDefault();
    showLogin();
  });
}

if (closeLogin) {
  closeLogin.addEventListener('click', function () {
    showLogin();
  });
}

if (ingresarSubmenu) {
  ingresarSubmenu.addEventListener('click', function (event) {
    c(event.target);
    event.preventDefault();
    showSubmenuHeader();
    showLogin();
  });
}

function showLogin() {
  var containerLogin = id('containerLogin');
  var containerLoginModal = id('containerLoginModal');
  containerLogin.classList.toggle('show-login');
  containerLoginModal.classList.toggle('animate');
}
/* 
MENU PARA VISTA DE TELEFONO - EFECTO DE CATEGORIAS
*/


var submenu = id('submenu');

if (submenu) {
  submenu.addEventListener('click', function (event) {
    var element = event.target;

    if (element.id === 'categorias') {
      element.classList.toggle('active');
      showSubmenu(element.nextElementSibling);
    }
  });
}

function showSubmenu(element) {
  cd(element);

  if (element.style.maxHeight) {
    element.style.maxHeight = null;
  } else {
    element.style.maxHeight = "".concat(element.scrollHeight, "px");
  }
}
/* 
SUBMENU LATERAL COMPLETO
*/


var submenuHeader = id('submenuHeader');
var closeSubmenu = id('closeSubmenu');

if (submenuHeader) {
  submenuHeader.addEventListener('click', function () {
    showSubmenuHeader();
  });
}

if (closeSubmenu) {
  closeSubmenu.addEventListener('click', function () {
    showSubmenuHeader();
  });
}

function showSubmenuHeader() {
  var submenu = id('containerOpciones');

  if (submenu.style.marginLeft === '0px') {
    submenu.style.marginLeft = '100vw';
  } else {
    submenu.style.marginLeft = '0';
  }
}