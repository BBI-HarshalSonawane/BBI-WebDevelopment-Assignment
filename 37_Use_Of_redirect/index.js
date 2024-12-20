const toggleLink = document.getElementById('toggle-link');
const formTypeText = document.getElementById('form-type-text');
const nameField = document.getElementById('name-field');
const termsField = document.getElementById('terms-field');
const submitButton = document.getElementById('submit-button');

let isRegister = false;

toggleLink.addEventListener('click', () => {
isRegister = !isRegister;
formTypeText.textContent = isRegister ? 'register' : 'login';
toggleLink.textContent = isRegister
    ? 'Already have an account? Login'
    : "Don't have an account? Register";
nameField.style.display = isRegister ? 'block' : 'none';
termsField.style.display = isRegister ? 'block' : 'none';
submitButton.textContent = isRegister ? 'Register' : 'Login';
});