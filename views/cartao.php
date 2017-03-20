<div class="formulario">
<h4 class="text-danger"><span class="glyphicon glyphicon-saved"></span> Geração de Cartão</h4>
<form>
  <div class="form-group">
    <label class="text-info" for="inputNome">Nome:</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Informe seu nome">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputCargo">Cargo:</label>
    <input type="text" class="form-control" id="inputCargo" placeholder="Informe seu Cargo">
  </div>
  <div class="form-group pull-left margin">
    <label class="text-info">Telefone:</label>
    <input type="text" class="form-control" name="telefone" onkeyup="mascara(this, mascaratelefone);" maxlength="15" placeholder="Informe seu Telefone">
  </div>
  <div class="form-group pull-left">
    <label class="text-info">WhatsApp:</label>
    <input type="text" class="form-control" name="Whatsapp" onkeyup="mascara(this, mascaratelefone);" maxlength="15" placeholder="Informe seu nº Whatsapp">
  </div>
  <div style="clear: both;">
  <div class="form-group">
    <label class="text-info" for="inputSkype">Skype:</label>
    <input type="text" class="form-control" id="inputSkype" placeholder="Informe seu Skype">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputEndereco">Endereço:</label>
    <input type="text" class="form-control" id="inputEndereco" placeholder="Informe seu Endereço">
  </div>
  <div class="form-group">
    <label class="text-info" for="inputEmail">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Informe seu e-mail">
  </div>
  
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Gerar Cartão</button>
</form>
</div>