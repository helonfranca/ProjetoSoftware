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
        $('#mensagemSucesso').fadeOut('slow');
    }, 3000);
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