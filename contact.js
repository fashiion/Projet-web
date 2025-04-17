const toggleButton = document.getElementById('toggle-button');
const body = document.body;

toggleButton.addEventListener('click', () => {
body.classList.toggle('light-mode');
body.classList.toggle('dark-mode');
toggleButton.textContent = body.classList.contains('light-mode') ? 'Mode Nuit' : 'Mode Jour';
});