<div id="addAgendamentoModal" class="modal fade modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h4 class="modal-title">Novo Agendamento</h4>
                    <button class="btn-close cancelarBtn" type="button" data-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <label for="data_hora_inicial" class="my-1">Data e Hora Inicio</label>
                    <input type="datetime-local" class="form-control" id="data_hora_inicial" name="data_hora_inicial"
                           required>
                    <div class="invalid-feedback">
                        A data e hora são obrigatórias.
                    </div>

                    <label for="data_hora_final" class="my-1">Data e Hora Final</label>
                    <input type="datetime-local" class="form-control" id="data_hora_final" name="data_hora_final"
                           required>
                    <div class="invalid-feedback">
                        A data e hora são obrigatórias.
                    </div>

                    <label for="cor_agendamento" class="my-1">Cor do Agendamento</label>
                    <input type="color" class="form-control" id="cor_agendamento" name="cor_agendamento">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default cancelarBtn" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success botaoEnviar" id="enviarBtn2">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="editAgendamentoModal" class="modal fade modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h4 class="modal-title">Editar Agendamento</h4>
                    <button class="btn-close cancelarBtn" type="button" data-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <label for="data_hora_inicial" class="my-1">Data e Hora Inicio</label>
                    <input type="datetime-local" class="form-control" id="data_hora_inicial" name="data_hora_inicial"
                           required>
                    <div class="invalid-feedback">
                        A data e hora são obrigatórias.
                    </div>

                    <label for="data_hora_final" class="my-1">Data e Hora Final</label>
                    <input type="datetime-local" class="form-control" id="data_hora_final" name="data_hora_final"
                           required>
                    <div class="invalid-feedback">
                        A data e hora são obrigatórias.
                    </div>

                    <label for="cor_agendamento" class="my-1">Cor do Agendamento</label>
                    <input type="color" class="form-control" id="cor_agendamento" name="cor_agendamento">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default cancelarBtn" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger cancelarBtn" data-dismiss="modal">Excluir</button>
                    <button type="submit" class="btn btn-success botaoEnviar" id="enviarBtn2">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="listaAgendamentoModal" class="modal fade modal-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Meus Agendamentos</h4>
                <button class="btn-close cancelarBtn" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Equipamento</th>
                        <th>Data e Hora Inicial</th>
                        <th>Data e Hora Final</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Equipamento 1</td>
                        <td>2023-07-05 09:00:00</td>
                        <td>2023-07-05 10:00:00</td>
                    </tr>
                    <tr>
                        <td>Equipamento 2</td>
                        <td>2023-07-06 14:00:00</td>
                        <td>2023-07-06 15:30:00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary cancelarBtn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
