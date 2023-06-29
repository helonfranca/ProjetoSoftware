<!-- Adicionar Modal HTML -->
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/modalProjeto.css') }}">
@endsection
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('salvar_projeto') }}" method="POST" id = "adicionarProjeto">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo projeto</h4>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label class="my-1">Título</label>
                        <input type="text" class="form-control" name="titulo" pattern="[A-Za-zÀ-ÿ0-9\s!@#$%^&*()-_+=]{1,50}" required>

                    </div>
                    <div class="invalid-feedback">
                        O título é obrigatório e deve conter no mínimo 1 letra e no máximo 50 letras!
                    </div>

                    <div class="form-group">
                        <label class="my-1">Data inicial</label>
                        <input type="date" class="form-control"  name="data_inicial" required>
                    </div>
                    <div class="error-container">
                        <span id="dataErrorMessageInicial" class="error-message">*Informe datas válidas.</span>
                    </div>

                    <div class="form-group">
                        <label class="my-1">Data final</label>
                        <input type="date" class="form-control" name="data_final">
                    </div>
                    <div class="error-container">
                        <span id="dataErrorMessageFinal" class="error-message"></span>
                    </div>


                    <div class="form-group">
                        <label for="descricao" class="my-1">Descrição</label>
                        <textarea class="form-control descricao" name="descricao" id="descricao" required></textarea>

                        <div class="invalid-feedback">
                            O campo descrição é obrigatório.
                            O campo descrição deve ter no mínimo 10 caracteres.
                            O campo descrição deve ter no máximo 255 caracteres.
                        </div>

                    </div>

                    <div class="form-group multiselect">
                        <label for="participante" class="my-1">Participantes</label>
                        <div class="selectBox participantes" >
                            <select id="participante" class="form-select">
                                    <option>Clique aqui para selecionar os participantes</option>
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
                    <div class="form-group">
                        <label class="my-1">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status" required>
                            <option value="Em andamento" selected>Em andamento</option>
                            <option value="Concluído">Concluído</option>
                            <option value="Pendente">Pendente</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar" id="enviarBtn">
                    <!-- ^ Isso do modal de adicionar novo projeto -->
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('editar_projeto')}}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id_edit">
                <div class="modal-header">
                    <h4 class="modal-title">Editar projeto</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo_edit" class="my-1">Título</label>
                        <input type="text" class="form-control" id="titulo_edit"  name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="data_inicial_edit" class="my-1">Data inicial</label>
                        <input type="date" class="form-control" id="data_inicial_edit" name="data_inicial" required>
                    </div>
                    <div class="error-container">
                        <span id="dataErrorMessage" class="error-message">Informe datas válidas.</span>
                    </div>

                    <div class="form-group">
                        <label for="data_final_edit" class="my-1">Data final</label>
                        <input type="date" class="form-control" id="data_final_edit" name="data_final" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao_edit" class="my-1">Descrição</label>
                        <textarea class="form-control"  id="descricao_edit" name="descricao" required></textarea>
                    </div>
                    <div class="form-group multiselect">
                        <label for="participante" class="my-1">Participantes</label>
                        <div class="selectBox participantes" >
                            <select id="participante_edit" class="form-select">
                                <option>Clique aqui para selecionar os participantes</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes">
                            @foreach($participantes as $participante)
                                <label for="{{$participante->id}}" class="form-check-label">
                                    <input type="checkbox" value="{{$participante->id}}" name="participantes[]" class="form-check-input mx-2 participante-checkbox">
                                    <span>{{$participante->name}}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Status</label>
                        <select class="form-select" aria-label="Default select example" id="status_edit" name="status">
                            <option value="Em andamento" {{ isset($projeto) && $projeto->status == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
                            <option value="Concluído" {{ isset($projeto) && $projeto->status == 'Concluído' ? 'selected' : '' }}>Concluído</option>
                            <option value="Pendente" {{ isset($projeto) && $projeto->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar">
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
                    <h4 class="modal-title">Deletar Projeto</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id" id="delete_id">
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o projeto?</p>
                    <p class="text-warning"><small>Esta ação vai deletar seu projeto</small></p>
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
                            <td>Título</td>
                            <td id="titulo"></td>
                        </tr>
                        <tr>
                            <td>Data Inicial</td>
                            <td id="data_inicial"></td>
                        </tr>
                        <tr>
                            <td>Data Final</td>
                            <td id="data_final"></td>
                        </tr>
                        <tr>
                            <td>Descrição</td>
                            <td id="descricao"></td>
                        </tr>
                        <tr>
                            <td>Participantes</td>
                            <td id="participants"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td id="status"></td>
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

