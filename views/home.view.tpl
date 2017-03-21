<div class="galery">
  {{foreach galeria}}
  <div class="glrItem">
    <div class="glrImg" style="background-image:url('{{urlImagen}}')">
      &nbsp;
    </div>
    <div class="back">
      <h3>{{titulo}}</h3>
      <p>
        {{descripcion}}
      </p>
      <a class="btn" href="index.php?page=detpage&id={{lugarid}}">Ir a</a>
    </div>
  </div>
  {{endfor galeria}}
</div>
