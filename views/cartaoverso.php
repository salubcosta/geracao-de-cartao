<div class="painel">
<h4 class="text-danger"><span class="glyphicon glyphicon-saved"></span> Geração de Cartão</h4>
<form method="POST">
  <div class="form-group">
    <label class="text-info" for="inputNome">Nome:</label>
    <input type="text" class="form-control" id="inputNome" name="nome" required="true" placeholder="Informe seu nome">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputCargo">Cargo:</label>
    <input type="text" class="form-control" id="inputCargo" name="cargo" required="true" placeholder="Informe seu Cargo">
  </div>
  <div class="form-group pull-left margin">
    <label class="text-info">Telefone:</label>
    <input type="text" class="form-control" name="telefone" onkeyup="mascara(this, mascaratelefone);" maxlength="15" required="true" placeholder="Informe seu Telefone">
  </div>
  <div class="form-group pull-left">
    <label class="text-info">WhatsApp:</label>
    <input type="text" class="form-control" name="whatsapp" onkeyup="mascara(this, mascaratelefone);" maxlength="15" required="true" placeholder="Informe seu nº Whatsapp">
  </div>
  <div style="clear: both;">
  <div class="form-group">
    <label class="text-info" for="inputSkype">Skype:</label>
    <input type="text" class="form-control" id="inputSkype" name="skype" required="true" placeholder="Informe seu Skype">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputEndereco">Endereço:</label>
    <input type="text" class="form-control" id="inputEndereco" name="endereco" required="true"placeholder="Informe seu Endereço">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputEmail">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" name="email" required="true"placeholder="Informe seu e-mail">
  </div>
  <div class="form-group">
    <label class="text-danger" for="dropdowntipo">Escolha como gostaria de gerar o cartão:</label>
    <select class="form-control" name="tipo">
      <option selected="true">Frente e Verso</option>
      <option>Verso</option>
    </select>

  </div>
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Gerar Cartão</button>
</form>
</div>
