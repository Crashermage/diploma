const card1 = document.getElementById('card1');
const card2 = document.getElementById('card2');
const card3 = document.getElementById('card3');

card1.addEventListener('click', () => {
    if (document.location.href.indexOf('/ru/selector.php') > -1) {
        window.location = '/ru/app_common.php';
      }
    else {
        window.location = '/app_common.php';
    }
});

card2.addEventListener('click', () => {
    if (document.location.href.indexOf('/ru/selector.php') > -1) {
        window.location = '/ru/app_slang.php';
      }
    else {
        window.location = '/app_slang.php';
    }
});

card3.addEventListener('click', () => {
    

    if (document.location.href.indexOf('/ru/selector.php') > -1) {
        window.location = '/ru/app.php';
      }
    else {
        window.location = '/app.php';
    }
});

//Переключение языка
const languageSelector = document.getElementById('language-selector');
languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "/ru/selector.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/selector.php";
    }
});