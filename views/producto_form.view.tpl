<div class="row">
  <div class="col-10 col-1-offset">
    <h1>{{producto_modo}}</h1>
  </div>
</div>
<form method="post" action="index.php?page=productosform&mode={{mode}}&productoid={{productoid}}" >
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 col-5-offset">
        <label>Código de Producto</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productocod" name="txt_productocod"
          placeholder="Código de Producto"
          value="{{productocod}}"
          {{productoIsEnabled}} />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 col-5-offset">
        <label>Código de Barra</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productobarra" name="txt_productobarra"
          placeholder="Código de Barra"
          value="{{productobarra}}"
          {{productoIsEnabled}} />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 col-5-offset">
        <label>Producto</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productodsc" name="txt_productodsc"
          placeholder="Producto"
          value="{{productodsc}}"
          {{productoIsEnabled}} />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8 col-2-offset">
      <div class="row">
        <div class="col-2 col-8-offset">
          <a class="btn" id="clicksave" href>Guardar</a>
        </div>
        <div class="col-2">
          <a class="btn" href="index.php?page=productos">Cancelar</a>
        </div>
      </div>
    </div>
</div>
</form>
<script>
  var clickbtn = document.getElementById("clicksave");
  clickbtn.addEventListener("click",saveClick,false);
  function saveClick(e){
    e.preventDefault();
    document.forms[0].submit();
  }
</script>
