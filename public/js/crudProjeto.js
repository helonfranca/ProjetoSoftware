$(document).ready(function() {
    // Ocultar a mensagem de sucesso após 3 segundos
    setTimeout(function() {
        $('.mensagemError').fadeOut('slow');
    }, 7000);
});


$(document).ready(function() {
    $('.delete').click(function() {
        const idProjeto = $(this).data('id');
        $('#delete_id').val(idProjeto);
    });
})

$(document).ready(function() {
    // Ocultar a mensagem de sucesso após 3 segundos
    setTimeout(function() {
        $('#mensagemSucesso').fadeOut('slow');
    }, 3000);
});

document.querySelectorAll('#visualizar').forEach(function(button) {
    button.addEventListener('click', function() {
        const idProj = this.getAttribute('data-id');

        document.getElementById('id_proj').textContent = 'Carregando';
        document.getElementById('titulo').textContent = 'Carregando';
        document.getElementById('data_inicial').textContent = 'Carregando';
        document.getElementById('data_final').textContent =  'Carregando';
        document.getElementById('participantes').textContent = 'Carregando';
        document.getElementById('status').textContent = 'Carregando';

        // Fazer uma requisição AJAX para atualizar os dados de projeto
        fetch('/projetos/visualizar/' + idProj)
            .then((response) => response.json())
            .then((data) => data.projeto)
            .then((dados) => {
                document.getElementById('id_proj').textContent = dados.id;
                document.getElementById('titulo').textContent = dados.titulo;
                document.getElementById('data_inicial').textContent = new Date(dados.data_inicial).toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric' });
                document.getElementById('data_final').textContent = new Date(dados.data_final).toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric' });
                document.getElementById('descricao').textContent = dados.descricao;
                document.getElementById('participantes').textContent = dados.participantes;
                document.getElementById('status').textContent = dados.status;
            })
            .catch(function(error) {
                console.log(error);
            });
    });
});

document.querySelectorAll('#editar').forEach(function(button) {
    button.addEventListener('click', function() {
        const idProj = this.getAttribute('data-id');

        document.getElementById('id_edit').value ='Carregando';
        document.getElementById('titulo_edit').value = 'Carregando';
        document.getElementById('titulo_edit').value = 'Carregando';
        document.getElementById('data_inicial_edit').value = 'Carregando';
        document.getElementById('data_final_edit').value = 'Carregando';
        document.getElementById('descricao_edit').value = 'Carregando';
        document.getElementById('status_edit').value = 'Carregando';

        // Fazer uma requisição AJAX para atualizar os dados de projeto
        fetch('/projetos/visualizar/' + idProj)
            .then((response) => response.json())
            .then((data) => data.projeto)
            .then((dados) => {
                document.getElementById('id_edit').value = dados.id;
                document.getElementById('titulo_edit').value = dados.titulo;
                document.getElementById('titulo_edit').value = dados.titulo;
                document.getElementById('data_inicial_edit').value = dados.data_inicial;
                document.getElementById('data_final_edit').value = dados.data_final;
                document.getElementById('descricao_edit').value = dados.descricao;
                document.getElementById('status_edit').value = dados.status;

            })
            .catch(function(error) {
                console.log(error);
            });
    });
});

$(document).ready(function() {
    // Ativar tooltip
    $('[data-toggle="tooltip"]').tooltip();

    const mobileScreen = window.matchMedia("(max-width: 990px)");

    $(".dashboard-nav-dropdown-toggle").click(function() {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });

    $(".menu-toggle").click(function() {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});

$(document).ready(function() {
    $('#projectTable').DataTable({
            language: {
                url: 'js/pt-BR.json'
        },
        lengthMenu: [5,10],
        paging: true, // Ativar paginação
        searching: true, // Ativar barra de pesquisa
});
});