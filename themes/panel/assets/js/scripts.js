/************************************************************************
 * MENU PRINCIPAL
 ***********************************************************************/

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

  /************************************************************************
 * MODAL DELETE CONFIG
 ***********************************************************************/
var deleteBtn = document.querySelectorAll(".deleteBtn");
var modal = document.querySelector("#modalDelete");
var btnClose = document.querySelectorAll(".btn-close");

btnClose.forEach((btn) => {
    btn.addEventListener("click", () => {
        setTimeout(() => {
            modal.classList.remove('show')
            modal.style.display = 'none';
        }, 300);
    })
})

var btnCancel = document.querySelectorAll("[data-bs-dismiss]");

btnCancel.forEach((btn) => {
    btn.addEventListener("click", () => {
        setTimeout(() => {
            modal.classList.remove('show')
            modal.style.display = 'none';
        }, 300);
    })
    
})

 /************************************************************************
 * MODAL DELETE
 ***********************************************************************/

  deleteBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        setTimeout(() => {
            modal.classList.add('show')
        }, 300);
   
        modal.style.display = 'block';

        const id = btn.getAttribute("id")

        const deleteConfirm = document.querySelector("#deleteConfirm")
        const module = deleteConfirm.dataset.module

        deleteConfirm.setAttribute('href', `/${module}/remover/${id}`)
        
    })
 })
