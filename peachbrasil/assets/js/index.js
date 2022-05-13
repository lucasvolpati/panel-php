let btn = document.querySelector(".btn-delete");
let modal = document.querySelector("#modalDelete");

btn.addEventListener('click', () => {
    setTimeout(() => {
        modal.classList.add('show');
    }, 200);

    modal.style.display = 'block';
});

let exit = document.querySelector(".btn-close");
let exitII = document.querySelector(".btn-secondary");

function modalClose() {
    modal.classList.remove('show');

    setTimeout(() => {
    modal.style.display = 'none';
    }, 500);
}

exit.addEventListener('click', modalClose);
exitII.addEventListener('click', modalClose);