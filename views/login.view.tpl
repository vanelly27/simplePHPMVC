<form action="index.php?page=login" method="post" >
  <input type="hidden" name="returnurl" value="{{returnurl}}"/>
  <div class="row">
    <div class="col-6 col-offset-3">
      <div class="row">
        <div class="col-6">
            <b>Correo Electrónico</b>
        </div>
        <div class="col=6">
            <input type="email" name="usuario_email" value="{{usuario_email}}"
              placeholder="tucorre@electr.nico" />
        </div>
      </div>
      <div class="row">
        <div class="col-6">
            <b>Contraseña</b>
        </div>
        <div class="col=6">
            <input type="password" name="usuario_pswd" value="{{usuario_pswd}}"
              placeholder="tu contraseña" />
        </div>
      </div>
      <div class="row">
        <div class="col=6">
            <button onclick="return submitLogin();">Iniciar Sesión</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
  function submitLogin(){
    document.forms[0].submit();
    return false;
  }
</script>
