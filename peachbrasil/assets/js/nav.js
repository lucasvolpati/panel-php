document.body.classList.add('active');

let button = document.querySelector(".hang-container");
let nav = document.querySelector("#nav");

function menu() {
    document.body.classList.toggle('active');
};

button.addEventListener('click', menu);

////////////////////////////////////////////////

let username = document.querySelector("#username");
let user = document.querySelector(".user-container");

username.addEventListener('click', () => {
    user.classList.toggle('active');
});