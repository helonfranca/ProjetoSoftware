<!-- Adicionar Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('itens.salvar')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo Item</h4>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="projeto_id" id="projeto_id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome" class="my-1">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade" class="my-1">Quantidade</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="my-1">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar" id="adicionarItemBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('itens.editar')}}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="item_id" id="id_edit">
                <input type="hidden" name="projeto_id" id="projeto_id_edit" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Item</h4>
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
                        <textarea class="form-control" id="descricao_edit" name="descricao" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar" id="EditarItemBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('itens.deletar')}}" method="post">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h4 class="modal-title">Deletar Item</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id_item" id="delete_id">
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o Item?</p>
                    <p class="text-warning"><small>Esta ação vai deletar seu item permanentemente</small></p>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verificar Item</h4>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>#</td>
                        <td id="id_item"></td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td id="nome_item"></td>
                    </tr>
                    <tr>
                        <td>Quantidade</td>
                        <td id="quantidade_item"></td>
                    </tr>
                    <tr>
                        <td>Descrição</td>
                        <td id="descricao_item"></td>
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
