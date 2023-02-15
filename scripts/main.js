//Выбираем элементы из DOM структуры страницы
const login = document.getElementsByName('login')[0];
const password = document.getElementsByName('password')[0];
const error = document.querySelector('.error');


//Проверяем заполненность данных при нажатии на кнопку Войти
document.querySelector('button').addEventListener('click', (event) => {
    if (login.value === '' || password.value === '') {
        error.innerHTML = "Поля не заполнены";
        event.preventDefault();
    }
})
