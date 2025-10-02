document.addEventListener('DOMContentLoaded', function() {
    const deleteLinks = document.querySelectorAll('.delete-link');

    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            if (!confirm('Tem certeza que deseja excluir este desafio?')) {
                event.preventDefault();
            }
        });
    });
});
