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
ingresar.addEventListener('click', function (event) {
  event.preventDefault();
  showLogin();
});
closeLogin.addEventListener('click', function () {
  showLogin();
});

function showLogin() {
  var containerLogin = id('containerLogin');
  var containerLoginModal = id('containerLoginModal');
  containerLogin.classList.toggle('show-login');
  containerLoginModal.classList.toggle('animate');
}