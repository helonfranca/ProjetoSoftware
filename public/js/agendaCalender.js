document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var dataAtual = new Date().toISOString().split('T')[0];

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialDate: dataAtual,
        buttonText: {
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia'
        },
        navLinks: true,
        selectable: true,
        selectMirror: true,
        select: function (arg) {
            // Abrir o modal diretamente ao selecionar uma data/hora
            $('#addAgendamentoModal').modal('show');

            // Fechar o modal de adição ao clicar no botão de cancelar
            var butoesCancelar = document.querySelectorAll('#addAgendamentoModal .cancelarBtn, #addAgendamentoModal .btn-close');
            butoesCancelar.forEach(function (button) {
                button.addEventListener('click', function () {
                    $('#addAgendamentoModal').modal('hide');
                });
            });

        },
        eventClick: function (info) {
            // Abra o modal de edição preenchendo os dados do evento
            $('#editAgendamentoModal').modal('show');

            // Fechar o modal de edição ao clicar no botão de cancelar
            var editButoesCancelar = document.querySelectorAll('#editAgendamentoModal .cancelarBtn, #editAgendamentoModal .btn-close');
            editButoesCancelar.forEach(function (button) {
                button.addEventListener('click', function () {
                    $('#editAgendamentoModal').modal('hide');
                });
            });
        },
        editable: false,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
            {
                title: 'Nome da pessoa',
                start: '2023-07-05T09:00:00',
                end: '2023-07-05T10:00:00',
                color: 'blue',
                extendedProps: {
                    description: 'Descrição do evento 1'
                }
            },
            {
                title: 'Nome da pessoa',
                start: '2023-07-06T14:00:00',
                end: '2023-07-06T15:30:00',
                color: 'red',
                extendedProps: {
                    description: 'Descrição do evento 2'
                }
            }
        ]
    });

    calendar.render();

});
