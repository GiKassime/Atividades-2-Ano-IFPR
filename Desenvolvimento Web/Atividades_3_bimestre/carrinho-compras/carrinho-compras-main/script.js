const botaoAdicionar = document.querySelectorAll('.produto-item a')
const produtoItemNome = document.querySelectorAll('.produto-item h2')
const produtoItemPreco = document.querySelectorAll('.produto-item .preco')
let contador = document.querySelector('.contador')
for (let index = 0; index < 4; index++) {
    botaoAdicionar[index].addEventListener('click', (evento) =>{
    evento.preventDefault()//para evitar q o link v apara outra página
    contador.innerText ++
    let carrinho = obterTodosProdutos()
    let produtoExiste = false
    for (let index = 0; index < carrinho.length; index++) {
        let produto = carrinho[index];
        if (produto.nome == produtoItemNome[index].textContent) {
            produto.quantidade ++
            produtoExiste = true
        }
    }
    if (!produtoExiste) {
        let produto = {
        "nome": produtoItemNome[index].textContent,
        "preco": produtoItemPreco[index].textContent,
        "quantidade": 1
        }
        carrinho.push(produto)
    }
    localStorage.setItem('carrinho', JSON.stringify(carrinho))
    })  
}

function obterTodosProdutos(){
    let carrinho = JSON.parse(localStorage.getItem('carrinho'))
    if(carrinho == null || carrinho.length < 1){
        carrinho = []
    }
    return carrinho
}
