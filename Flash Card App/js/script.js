const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const languageSelector = document.getElementById('language-selector');
const definition = document.querySelector('.definition');

registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
});

languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "ru/index.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/index.php";
    }
});

function clickHandler() {
    definition.style.display = 'block';
  }