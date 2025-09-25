document.addEventListener('DOMContentLoaded', function() {
    console.log("A aplicação Desafios Fitness está pronta! (Frontend JS)");

    function inicializarInteratividade() {
        const listaDesafios = document.getElementById('desafios-lista');
        
        if (listaDesafios) {
            listaDesafios.querySelectorAll('li').forEach(item => {
                item.addEventListener('click', function() {
                });
            });
        }
    }

    inicializarInteratividade();
})