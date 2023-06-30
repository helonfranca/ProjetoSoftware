<!-- Adicionar Modal HTML -->
<div id="addEquipamentoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('equipamentos.salvar') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo equipamento</h4>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label class="my-1">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Quantidade</label>
                        <input type="number" class="form-control"  name="data_inicial" required>
                    </div>

                    <div class="form-group">
                        <label class="my-1">Descrição</label>
                        <textarea class="form-control" name="descricao" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="my-1">Tipo de equipamento</label>
                        <select class="form-select" aria-label="Default select example" name="tipoEquipamento">
                            <option value="1" selected>Equipamento comum</option>
                            <option value="2">Fluxo laminar</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Adicionar">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEquipamentoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id_edit">
                <div class="modal-header">
                    <h4 class="modal-title">Editar equipamento</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome_edit" class="my-1">Nome</label>
                        <input type="text" class="form-control" id="nome_edit"  name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade_edit" class="my-1">Quantidade</label>
                        <input type="number" class="form-control" id="quantidade_edit" name="quantidade" required>
                    </div>

                    <div class="form-group">
                        <label for="descricao_edit" class="my-1">Descrição</label>
                        <textarea class="form-control"  id="descricao_edit" name="descricao" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="my-1">Status</label>
                        <select class="form-select" aria-label="Default select example" id="status_edit" name="status">
                            <option value="1" >Equipamento comum</option>
                            <option value="2">Fluxo laminar</option>
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
<div id="deleteEquipamentoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
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
<div id="viewEquipamentoModal" class="modal fade">
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
                        <td id="id_equipamento"></td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td id="nome"></td>
                    </tr>
                    <tr>
                        <td>Quantidade</td>
                        <td id="quantidade"></td>
                    </tr>
                    <tr>
                        <td>Descrição</td>
                        <td id="descricao"></td>
                    </tr>
                    <tr>
                        <td>Participantes</td>
                        <td id="participantes"></td>
                    </tr>
                    <tr>
                        <td>Tipo de equipamento</td>
                        <td id="tipo"></td>
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


