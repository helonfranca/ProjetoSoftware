<!-- Adicionar Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('resultados.salvar')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo Resultado</h4>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="projeto_id" id="projeto_id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo" class="my-1">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Data</label>
                        <input type="date" class="form-control"  name="data" required>
                    </div>
                    <div class="form-group">
                        <label for="link" class="my-1">Link</label>
                        <textarea class="form-control" name="link" id="link" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar" id="adicionarResultadoBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('resultados.editar')}}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="resultado_id" id="id_edit">
                <input type="hidden" name="projeto_id" id="projeto_id_edit" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Resultado</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo_edit" class="my-1">Título</label>
                        <input type="text" class="form-control" id="titulo_edit"  name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="data_edit" class="my-1">Data</label>
                        <input type="date" class="form-control" id="data_edit" name="data" required>
                    </div>
                    <div class="form-group">
                        <label for="link_edit" class="my-1">Link</label>
                        <textarea class="form-control" id="link_edit" name="link" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Adicionar" id="EditarResultadoBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('resultados.deletar')}}" method="post">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h4 class="modal-title">Excluir Resultado</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id_resultado" id="delete_id">
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o Resultado?</p>
                    <p class="text-warning"><small>Esta ação vai excluir seu resultado permanentemente</small></p>
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
                <h4 class="modal-title">Verificar Resultado</h4>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>#</td>
                        <td id="id_resultado"></td>
                    </tr>
                    <tr>
                        <td>Título</td>
                        <td id="titulo_resultado"></td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td id="data_resultado"></td>
                    </tr>
                    <tr>
                        <td>Link</td>
                        <td id="link_resultado"></td>
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
