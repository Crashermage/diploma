let lastScrollPosition = 0;


window.addEventListener("scroll", () => {
  const currentScrollPosition = window.pageYOffset;
  const scrollDifference = currentScrollPosition - lastScrollPosition;

  const scrollHeader = document.querySelector(".scroll-header");

  if (scrollDifference > 0) {
    // Скрываем хэдер, если скроллим вниз
    scrollHeader.classList.add("hide");
  } else {
    // Показываем хэдер, если скроллим вверх
    scrollHeader.classList.remove("hide");
  }

  lastScrollPosition = currentScrollPosition;
});

const languageSelector = document.getElementById('language-selector');

languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "/ru/info.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/info.php";
    }
});