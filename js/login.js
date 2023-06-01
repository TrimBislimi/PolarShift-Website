const wrapperLogin = document.querySelector('.wrapperLogin');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()=> {
	wrapperLogin.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
	wrapperLogin.classList.remove('active');
});