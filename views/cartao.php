<div class="formulario">
<form>
  <div class="form-group">
    <label for="inputNome">Nome:</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Informe seu nome">
  </div>
  <div class="form-group">
    <label for="inputCargo">Cargo:</label>
    <input type="text" class="form-control" id="inputCargo" placeholder="Informe seu Cargo">
  </div>
  <div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" name="telefone" onkeyup="mascara(this, mascaratelefone);" maxlength="15" placeholder="Informe seu Telefone">
  </div>
  <div class="form-group">
    <label>WhatsApp:</label>
    <input type="text" class="form-control" name="Whatsapp" onkeyup="mascara(this, mascaratelefone);" maxlength="15" placeholder="Informe seu nº Whatsapp">
  </div>
  <div class="form-group">
    <label for="inputSkype">Skype:</label>
    <input type="email" class="form-control" id="inputSkype" placeholder="Informe seu Skype">
  </div>
  <div class="form-group">
    <label for="inputEndereco">Endereço:</label>
    <input type="email" class="form-control" id="inputEndereco" placeholder="Informe seu Endereço">
  </div>
  <div class="form-group">
    <label for="inputEmail">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Informe seu e-mail">
  </div>
  
  <button type="submit" class="btn btn-primary">Gerar Cartão</button>
</form>
</div>