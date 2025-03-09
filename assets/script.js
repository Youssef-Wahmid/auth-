let register = document.querySelector('.register');
let login = document.querySelector('.login');

register.style.display = 'none';

let showRegister = document.querySelector('#showRegister');
showRegister.addEventListener('click', function (e) {
  e.preventDefault();
  login.style.display = 'none';
  register.style.display = 'block';
});

let showLogin = document.querySelector('#showLogin');
showLogin.addEventListener('click', function (e) {
  e.preventDefault();
  login.style.display = 'block';
  register.style.display = 'none';
});


const errorElement = document.querySelector('#error');
errorElement.addEventListener('click', (e) => {
  e.target.style.cursor = 'pointer';
  e.target.style.display = 'none';
});
