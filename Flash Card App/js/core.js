const languageSelector = document.getElementById('language-selector');

languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "/ru/core.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/core.php";
    }
});