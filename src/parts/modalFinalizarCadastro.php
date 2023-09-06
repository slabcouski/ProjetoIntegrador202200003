<div class="modal" tabindex="-1" id="myModal" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Finalizando o cadastro.</h5>
            </div>
            <div class="modal-body">
                <form action="../../php/register.php" method="POST">    
                    <input type="text" name="name" class="form-control" placeholder="Nome completo*" required>
                    <input type="email" name="email" class="form-control mt-2" placeholder="Email*" required>
                    <input type="text" name="telefone" id="telefone-input" class="form-control mt-2" placeholder="Telefone*" required>
                    <input type="text" name="dataNasc" id="dataNasc-input" class="form-control mt-2" placeholder="Data de nascimento dd/mm/aaaa">
                    <select name="sexo" class="form-control mt-2">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select>
                    <button class="btn btn-success mt-2">Guardar informações</button>
                </form>
            </div>
        </div>
    </div>
</div>