// const botao = document.querySelector("nav h2");
// const linksMenu = document.querySelector(".menu");
// const icone = document.querySelector(".icone");

// botao.addEventListener("click", function(event){
//     event.preventDefault();
//     linksMenu.classList.toggle("aberto");

//     if(linksMenu.classList.contains("aberto")){
//         icone.innerHTML = "&times;";
//     } else {
//         const imgElement = document.createElement("img");
//         imgElement.src = "imagens/icon-menu.svg";
//     }
// });

const botao = document.querySelector("nav h2");
const linksMenu = document.querySelector(".menu");
const icone = document.querySelector(".icone");

botao.addEventListener("click", function(event){
    event.preventDefault();
    linksMenu.classList.toggle("aberto");

    if(linksMenu.classList.contains("aberto")){
        icone.innerHTML = ""; // Limpa o conteúdo anterior

        // Cria o elemento <img> e atribui a imagem desejada
        const imgElement = document.createElement("img");
        imgElement.src = "imagens/icon-menu.svg"; // Substitua pelo caminho da sua imagem

        icone.appendChild(imgElement);
    } else {
        imgElement.src = "imagens/icon-menu.svg";
    }
});


// function selecionarProduto(produto) {
//     produto.classList.toggle('selected');
// }