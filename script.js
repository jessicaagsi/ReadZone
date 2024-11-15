// Get elements
const loginBtn = document.getElementById('loginBtn');
const loginModal = document.getElementById('loginModal');
const closeModal = document.getElementById('closeModal');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const showRegister = document.getElementById('showRegister');
const showLogin = document.getElementById('showLogin');

// Show modal when login/register button is clicked
loginBtn.addEventListener('click', () => {
    loginModal.style.display = 'flex';
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
});

// Close modal
closeModal.addEventListener('click', () => {
    loginModal.style.display = 'none';
});

// Switch to register form
showRegister.addEventListener('click', (e) => {
    e.preventDefault();
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
});

// Switch to login form
showLogin.addEventListener('click', (e) => {
    e.preventDefault();
    registerForm.style.display = 'none';
    loginForm.style.display = 'block';
});

// Close modal when clicking outside the modal content
window.addEventListener('click', (e) => {
    if (e.target === loginModal) {
        loginModal.style.display    = 'none';
    }
});
