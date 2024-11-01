const lista = document.querySelector('ul');
const botao = document.querySelector('#botao-enviar');
const input = document.getElementById('texto');

botao.addEventListener('click', ()=>{
    //ADICIONAR A LISTA
    let tarefa = input.value;
    if(tarefa !== ""){
        adicionarLista(tarefa); 
        salvarNoLocalStorage(tarefa);   
    }
    input.value = '';
})

function adicionarLista(tarefa){
    const novoItem = document.createElement('li');
    novoItem.textContent = tarefa;
   
    let excluir = document.createElement('button')
    excluir.textContent = 'Excluir'
    excluir.addEventListener('click', ()=>{
        novoItem.remove()
    })
    novoItem.appendChild(excluir) 
    lista.appendChild(novoItem);
}
function salvarNoLocalStorage(tarefa){
    const tarefas = obterTarefas()
    tarefas.push(tarefa)
    localStorage.setItem('tarefas',JSON.stringify(tarefas))
}
function obterTarefas(){
    const tarefas = localStorage.getItem('tarefas')
    return tarefas ? JSON.parse(tarefas) : []
}
