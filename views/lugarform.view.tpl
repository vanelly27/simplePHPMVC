<div>
  <h1>Formulario</h1>
  <form action="index.php?page=lugarform&mode={{mode}}" method="post">
    <input type="hidden" name="lugarId" value="{{lugarid}}" />
    <label for="lugartitulo">Título del Lugar</label><br />
    <input type="text" value="{{lugartitulo}}" placeholder="Título del Lugar" id="lugartitulo" name="lugartitulo"  />
    <br/>
    <label for="lugardesc">Descripción</label><br />
    <input type="text" value="{{lugardesc}}" placeholder="Descripción" id="lugardesc" name="lugardesc"  />
    <br/>
    <label for="lugarimgurl">Url de Imágen</label><br />
    <input type="text" value="{{lugarimgurl}}" placeholder="Uri Absoluta o Relativa" id="lugarimgurl" name="lugarimgurl"  />
    <br/>
    <label for="lugardesccrt">Descripción Corta</label><br />
    <input type="text" value="{{lugardesccrt}}" placeholder="Nombre Corto" id="lugardesccrt" name="lugardesccrt"  />
    <br/>
    <input type="submit" value="Guardar" name="btnGuardar"  />
  </form>
</div>
