let windows = document.querySelector('#removeDanied');
let x = document.getElementById('xSymbol');
x.addEventListener('click', hideWindow);

function hideWindow() {
    windows.style.display = 'none';
}

function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";
}
