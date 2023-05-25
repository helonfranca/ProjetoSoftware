<!-- Adicionar Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar novo projeto</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="my-1">Título</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Data inicial</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Data final</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Descrição</label>
                        <textarea class="form-control" placeholder="Detalhamento sucinto do projeto." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1" selected>Em andamento</option>
                            <option value="2">Concluído</option>
                            <option value="3">Pendente</option>
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
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Editar projeto</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="my-1">Título</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Data inicial</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Data final</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Descrição</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="my-1">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1" selected>Em andamento</option>
                            <option value="2">Concluído</option>
                            <option value="3">Pendente</option>
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
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Deletar Projeto</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
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
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Verificar Dados</h4>
                    <button  class="btn-close"  type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table  table-striped">
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Título</td>
                                <td>Imunologia</td>
                            </tr>
                            <tr>
                                <td>Data Inicial</td>
                                <td>10/02/2019</td>
                            </tr>
                            <tr>
                                <td>Data Final</td>
                                <td>20/05/2022</td>
                            </tr>
                            <tr>
                                <td>Participantes</td>
                                <td>Pablo, Helon, Vanessa, Tiago.</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Em andamento</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-primary" data-dismiss="modal" value="Voltar">
            </form>
        </div>
    </div>
</div>
