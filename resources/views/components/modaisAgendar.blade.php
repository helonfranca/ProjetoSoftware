<!-- Adicionar Modal HTML -->
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/modalProjeto.css') }}">
@endsection
<div id="addEmployeeModal" class="modal fade modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('salvar_projeto') }}" method="POST" id = "adicionarProjeto" class="needs-validation" novalidate>
                <!-- ^ No final dessa tag: Precisa para FICAR PADRÃO A VALIDAÇÃO EM VERMELHO E "!" A DIREITA EM VERMELHO de: class="needs-validation" novalidate -->
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo projeto</h4>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>



                <div class="modal-body">
                    <!-- NESSE SE PODE AGENDAR MAIS DE UM DE UMA VEZ: -->
                    <div class="form-group multiselect">
                        <label for="participante" class="my-1">Equipamentos</label>
                        <div class="selectBox participantes" >
                            <select id="participante" class="form-select">
                                <option>Clique aqui para selecionar os equipamentos</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes">
                            @foreach($participantes as $participante)
                                <label for="{{$participante->id}}" class="form-check-label">
                                    <input type="checkbox" value="{{$participante->id}}" name="participantes[]" class="form-check-input mx-2">
                                    <span>{{$participante->name}}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <!-- NESSE SE PODE AGENDAR MAIS DE UM DE UMA VEZ: -->

                    <div class="form-group">
                        <label class="my-1">Data inicial</label>
                        <input type="date" class="form-control"  name="data_inicial" required>
                    </div>

                    <div class="invalid-feedback">
                        A data INICIAL deve ser válida e anterior ou igual à data atual
                    </div>

                    <div class="form-group">
                        <label class="my-1">Data final</label>
                        <input type="date" class="form-control" name="data_final">
                    </div>

                    <div class="invalid-feedback">
                        A data FINAL deve ser igual ou posterior à data inicial.
                    </div>

                    <div class="form-group">
                        <label class="my-1">Horário Inicial</label>
                        <input type="time" class="form-control" name="horario_inicial" required>
                    </div>

                    <div class="invalid-feedback">
                        O horário inicial é obrigatório.
                    </div>

                    <div class="form-group">
                        <label class="my-1">Horário Final</label>
                        <input type="time" class="form-control" name="horario_final">
                    </div>

                    <div class="invalid-feedback">
                        O horário final deve ser igual ou posterior ao horário inicial.
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success botaoEnviar" value="Adicionar" id="enviarBtn2">
                    <!-- ^ Isso do modal de adicionar novo agendamento -->
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade modal-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('editar_projeto')}}" method="post" class="needs-validation" novalidate>
                <!-- ^ No final dessa tag: Precisa para FICAR PADRÃO A VALIDAÇÃO EM VERMELHO E "!" A DIREITA EM VERMELHO de: class="needs-validation" novalidate -->
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id_edit">
                <div class="modal-header">
                    <h4 class="modal-title">Editar agendamento</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="equipamento" class="my-1">Equipamento selecionado:</label>
                        <div class="equipment-selection">
                            <span>{{$projeto->titulo}}</span>
                        </div>
                        </br>
                    </div>



                    <div class="invalid-feedback">
                        O título é obrigatório e deve conter no mínimo 1 letra e no máximo 50 letras!
                    </div>

                    <div class="form-group">
                        <label class="my-1">Data inicial</label>
                        <input type="date" class="form-control"  name="data_inicial" required>
                    </div>

                    <div class="invalid-feedback">
                        A data INICIAL deve ser válida e anterior ou igual à data atual
                    </div>

                    <div class="form-group">
                        <label class="my-1">Data final</label>
                        <input type="date" class="form-control" name="data_final">
                    </div>

                    <div class="invalid-feedback">
                        A data FINAL deve ser igual ou posterior à data inicial.
                    </div>

                    <div class="form-group">
                        <label class="my-1">Horário Inicial</label>
                        <input type="time" class="form-control" name="horario_inicial" required>
                    </div>

                    <div class="invalid-feedback">
                        O horário inicial é obrigatório.
                    </div>

                    <div class="form-group">
                        <label class="my-1">Horário Final</label>
                        <input type="time" class="form-control" name="horario_final">
                    </div>

                    <div class="invalid-feedback">
                        O horário final deve ser igual ou posterior ao horário inicial.
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success botaoEnviar" value="Adicionar" id="enviarBtn"> <!-- class enviarBtn -->
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('deletar_projeto')}}" method="post">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h4 class="modal-title">Deletar Agendamento</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id" id="delete_id">
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o agendamento?</p>
                    <p class="text-warning"><small>Esta ação vai deletar seu agendamento</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Modal HTML -->
<div id="viewEmployeeModal" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verificar Dados</h4>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td id="id_proj"></td>
                        </tr>

                        <tr>
                            <td>Equipamento</td>
                            <td id="participants"></td>
                        </tr>

                        <tr>
                            <td>Horário Inicial</td>
                            <td id="horario_inicial"></td>
                        </tr>
                        <tr>
                            <td>Horário Final</td>
                            <td id="horario_final"></td>
                        </tr>
                        <tr>

                        <tr>
                            <td>Data Inicial</td>
                            <td id="data_inicial"></td>
                        </tr>
                        <tr>
                            <td>Data Final</td>
                            <td id="data_final"></td>
                        </tr>


                    </tbody>
                </table>
                <div class="modal-footer">
                    <input type="button" class="btn btn-primary" data-dismiss="modal" value="Voltar">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/validacao.js') }}" ></script>

