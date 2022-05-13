// VARIAVEIS DE SESSÕES
let sectionI = document.querySelector(".article");
let sectionII = document.querySelector(".content");
let sectionIII = document.querySelector(".categories");

// CONTROLADORES
let artigo = document.querySelector(".atg");
let conteudo = document.querySelector(".ctd");
let categorias = document.querySelector(".cta")

// FUNÇÃO PAGINA
artigo.addEventListener('click', () => {
    sectionI.classList.add('active');

    sectionII.classList.remove('active');
    sectionIII.classList.remove('active');

        // CLASS PARA ANIMAÇÂO
        artigo.classList.add('active');

        conteudo.classList.remove('active');
        categorias.classList.remove('active');
});


// FUNÇÃO CONTEUDO
conteudo.addEventListener('click', () => {
    sectionII.classList.add('active');

    sectionIII.classList.remove('active');
    sectionI.classList.remove('active');

        // CLASS PARA ANIMAÇÂO
        conteudo.classList.add('active');

        artigo.classList.remove('active');
        categorias.classList.remove('active');
});

// FUÇÂO CATEGORIAS
categorias.addEventListener('click', () => {
    sectionIII.classList.add('active');

    sectionII.classList.remove('active');
    sectionI.classList.remove('active');

        // CLASS PARA ANIMAÇÂO
        categorias.classList.add('active');

        conteudo.classList.remove('active');
        artigo.classList.remove('active');
});