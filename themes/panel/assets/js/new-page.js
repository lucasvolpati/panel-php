/************************************************************************
 * SEÇÃO NOVA PÁGINA
 ***********************************************************************/

// VARIAVEIS DE SESSÕES
let sectionI = document.querySelector("#sectionI");
let sectionII = document.querySelector("#sectionII");

// CONTROLADORES
let pagina = document.querySelector(".pg");
let conteudo = document.querySelector(".ct");

// FUNÇÃO PAGINA
pagina.addEventListener('click', () => {
    sectionII.classList.remove('active');

    if(sectionI.classList == '') {
        sectionI.classList.add('active');

            pagina.classList.add('active');
            conteudo.classList.remove('active');
    }
});


// FUNÇÃO CONTEUDO
conteudo.addEventListener('click', () => {
    sectionI.classList.remove('active');
    sectionII.classList.add('active');

        pagina.classList.remove('active');
        conteudo.classList.add('active');
});