let day29 = document.querySelector('#day29');
let day30 = document.querySelector('#day30');
let day31 = document.querySelector('#day31');

let dayEventHandle = document.querySelector('#day');
let monthEventHandle = document.querySelector('#month');
let yearEventHandle = document.querySelector('#year');

let password1 = document.querySelector('#pass1');
let password2 = document.querySelector('#pass2');
let wrongPasswords = document.querySelector('#wrongPasswords');

function changeMaxDays() {
    let month = document.querySelector('#month').value;
    let year = document.querySelector('#year').value;
    const toCheck = dayEventHandle.value;
    if (month === '1' || month === '3' || month === '5' || month === '7' || month === '8' || month === '10' || month === '12') {
        day29.style.display = 'block';
        day30.style.display = 'block';
        day31.style.display = 'block';
    } else if (month === '2' && year % 4 === 0) {
        day29.style.display = 'block';
        day30.style.display = 'none';
        day31.style.display = 'none';

    } else if (month === '2' && year % 4 !== 0) {
        day29.style.display = 'none';
        day30.style.display = 'none';
        day31.style.display = 'none';
    } else {
        day29.style.display = 'block';
        day30.style.display = 'block';
        day31.style.display = 'none';
    }

}

function checkPasswords() {
    if (password1.value !== password2.value) {
        password1.style.border = '2px solid red';
        password2.style.border = '2px solid red';
        wrongPasswords.style.display = "block";


    } else {
        password1.style.border = '0px solid red';
        password2.style.border = '0px solid red';
        wrongPasswords.style.display = "none";

    }
}

dayEventHandle.addEventListener('click', changeMaxDays);
monthEventHandle.addEventListener('click', changeMaxDays);
yearEventHandle.addEventListener('click', changeMaxDays);

password1.addEventListener("focusout", checkPasswords);
password2.addEventListener("focusout", checkPasswords);
