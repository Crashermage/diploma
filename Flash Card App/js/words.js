const delBtn = document.getElementById('delWord');
const delWindow = document.getElementById('delWindow');
const closeBtn = document.getElementById('close-btnDel');
const exeptDelBox = document.querySelector('#delWindow .modal-content');

//Модальное окно удаление
delBtn.addEventListener('click', () => {
    delWindow.classList.add('open');
});

closeBtn.addEventListener('click', () => {
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


//Модальное окно добавления слова
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

//Переключение языка
const languageSelector = document.getElementById('language-selector');
languageSelector.addEventListener('change', function(){
    const selectedLanguage = languageSelector.value;
    if (selectedLanguage === 'russian') {
        window.location.href = "/ru/words.php";
    }
    else if (selectedLanguage === 'english') {
        window.location.href = "/words.php";
    }
});

//Добавление выбора по клику на таблицу
$(document).ready(function() {
    $('table tr').click(function() {
      var word = $(this).find('td:eq(0)').text();   
      var selectedWord = word;
      console.log(selectedWord);

      $('#output').text(selectedWord);
      $('#output2').text(selectedWord);
      $('#wordInput').val(selectedWord);
      $('#edInput').val(selectedWord);
    });
  });

//Выделение редактируемого элемента таблицы
var rows = document.querySelectorAll('table tbody tr');

rows.forEach(function(row) {
  row.addEventListener('click', function() {
    rows.forEach(function(row) {
      row.classList.remove('highlighted-row');
    });

    this.classList.add('highlighted-row');
  });
});


