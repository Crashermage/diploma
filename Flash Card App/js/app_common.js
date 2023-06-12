window.onload = function(){
    updateWords_common();
}

//Переключение языка
const languageSelector = document.getElementById('language-selector');

languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "/ru/app_common.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/app_common.php";
    }
});

const term = document.querySelector('.term');
const definition = document.querySelector('.definition');
const card = document.querySelector('.card');

const front = document.querySelector('.front');
const back = document.querySelector('.back');

front.addEventListener('click', backSide);
back.addEventListener('click', frontSide);
back.addEventListener('mouseleave', backUnhover);
back.addEventListener('mouseenter', inElement);

//Обновление слов без обновления страницы
  function updateWords_common() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      card.style.transform = 'rotateY(0deg)'; 
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        var word = data[0].word;
        var definition = data[0].definition;
        document.querySelector('.term h3').innerHTML = word;
        document.querySelector('.definition h3').innerHTML = definition;
        document.querySelector('.termBack p').innerHTML = word;
        document.querySelector('.termD span').innerHTML = word;
        document.querySelector('.termEd span').innerHTML = word;
        
        var inputElement = document.querySelector('input[name="word"]');
        inputElement.value = word;

        var editInputElement = document.querySelector('input[name="edit"]');
        editInputElement.value = word;
      }
    };
    xmlhttp.open("GET", "/actions/updateWords_common.php", true);
    xmlhttp.send();
  }


function backSide() {
  card.style.transform = 'rotateY(180deg)';    
}

function frontSide() {
  card.style.transform = 'rotateY(0deg)';
}

function backUnhover() {
  card.style.transform = 'rotateY(0deg)';
}

function inElement() {
  card.style.transform = 'rotateY(180deg)';
}



//Модальное окно редактирования слова
const edBtn = document.getElementById('edWord');
const edWindow = document.getElementById('edWindow');
const closeEdBtn = document.getElementById('close-btnEd');
const exeptEdBox = document.querySelector('#edWindow .modal-content');

edBtn.addEventListener('click', () => {
    edWindow.classList.add('open');
});

closeEdBtn.addEventListener('click', () => {
    edWindow.classList.remove('open');
});

window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape'){
        edWindow.classList.remove('open');
    }
});

exeptEdBox.addEventListener('click', (e) => {
    e._isClickWithInModal = true;
});

edWindow.addEventListener('click', e => {
    if (e._isClickWithInModal) return;
    e.currentTarget.classList.remove('open');
})


//Модальное окно удаления слова
const delBtn = document.getElementById('delWord');
const delWindow = document.getElementById('delWindow');
const closeBtn = document.getElementById('close-btnDel');
const cancelBtn = document.getElementById('cancel-btnDel');
const exeptDelBox = document.querySelector('#delWindow .modal-content');

delBtn.addEventListener('click', () => {
    delWindow.classList.add('open');
});

closeBtn.addEventListener('click', () => {
    delWindow.classList.remove('open');
});

cancelBtn.addEventListener('click', () => {
    delWindow.classList.remove('open');
});

window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape'){
        delWindow.classList.remove('open');
    }
});

exeptDelBox.addEventListener('click', (e) => {
    e._isClickWithInModal = true;
});

delWindow.addEventListener('click', e => {
    if (e._isClickWithInModal) return;
    e.currentTarget.classList.remove('open');
})

//Функции модального окна добавления слова
const addBtn = document.getElementById('addWord');
const addWindow = document.getElementById('addWindow');
const closeABtn = document.getElementById('close-btnAdd');
const exeptAddBox = document.querySelector('#addWindow .modal-content');

addBtn.addEventListener('click', () => {
    addWindow.classList.add('open');
});

closeABtn.addEventListener('click', () => {
    addWindow.classList.remove('open');
});

window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape'){
        addWindow.classList.remove('open');
    }
});

exeptAddBox.addEventListener('click', (e) => {
    e._isClickWithInModal = true;
});

addWindow.addEventListener('click', e => {
    if (e._isClickWithInModal) return;
    e.currentTarget.classList.remove('open');
})