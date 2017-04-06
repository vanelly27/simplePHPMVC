<div class="galery">
  {{foreach galeria}}
  <div class="glrItem">
    <div class="glrImg" style="background-image:url('{{lugarimgurl}}')">
      &nbsp;
    </div>
    <div class="back">
      <h3>{{lugartitulo}}</h3>
      <p>
        {{lugardesc}}
      </p>
      <a class="btn" href="index.php?page=detpage&id={{lugarId}}">Ir a</a>
    </div>
  </div>
  {{endfor galeria}}
</div>
<div class="add-button">
  <a href="index.php?page=lugarform&mode=INS" >+</a>
</div>
