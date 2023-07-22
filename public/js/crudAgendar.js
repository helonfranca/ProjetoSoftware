$(document).ready(function() {
    $('.agendar-link').click(function(event) {
        event.preventDefault(); // Evita o comportamento padrão do link

        var calendario = $('.linha-calender');
        $('html, body').animate({
            scrollTop: calendario.offset().top
        });
    });
});

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
        $('.mensagemSucesso').fadeOut('slow');
    }, 5000);
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
    $('#projectTable2').DataTable({
        language: {
            url: 'js/pt-BR.json'
        },
        lengthMenu: [5,10],
        paging: true, // Ativar paginação
        searching: true, // Ativar barra de pesquisa
    });
});

document.getElementById('visualizar_agenda').addEventListener('click', function() {
        // Fazer uma requisição AJAX para obter os agendamentos
        fetch('/meusAgendamentos')
            .then(response => response.json())
            .then(data => {
                // Limpar a tabela de agendamentos
                document.getElementById('agendamentosBody').innerHTML = '';

                // Preencher os agendamentos na tabela
                data.forEach(function(agendamento) {
                    var equipamento = agendamento.nome_equipamento;
                    var dataHoraInicial = new Date(agendamento.data_hora_inicial).toLocaleString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                    var dataHoraFinal =  new Date(agendamento.data_hora_final).toLocaleString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit' });

                    var row = '<tr>' +
                        '<td>' + equipamento + '</td>' +
                        '<td>' + dataHoraInicial + '</td>' +
                        '<td>' + dataHoraFinal + '</td>' +
                        '</tr>';

                    document.getElementById('agendamentosBody').innerHTML += row;
                });
            })
            .catch(function(error) {
                console.log(error);
            });
});


