    <link rel="stylesheet" href="../../src/css/user.css">
    <?php require '../components/scripts.php'; ?>

 <div class="content-img W-100  d-flex justify-content-center align-items-center">
         <div class="content-img-inner d-flex justify-content-center align-items-center">
            <div class="img-perfil">
 
            </div>
            <!-- <img src="../../src/images/perfil.jpg" alt=""> -->
</div>
            <!-- <img src="../../src/images/perfil.jpg" alt="product-1"> -->
    </div> 
<div class="container w-100 h-100 d-flex justify-content-center flex-column align-items-center">
  <div class="options w-50 h-100">
  <div class="opcion">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos Generales</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Publicaciones</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Comentarios</button>
    </li>
  </ul>
  </div>
  <div class="tab-content " id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

     <div class="datos-perfil ">
<form>
  <div class="form-group">
    <label for="username">Nombre de Usuario</label> 
    <input id="username" name="username" placeholder="nombre de Usuario" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Correo</label> 
    <input id="email" name="email" placeholder="nombre de Usuario" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="namae">Nombre</label> 
    <input id="namae" name="namae" placeholder="nombre de Usuario" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label> 
    <input id="lastname" name="lastname" placeholder="nombre de Usuario" type="text" class="form-control">
  </div> 
  <div class="form-group text-center p-5">
    <button name="submit" type="submit" class="btn  boton">Editar</button>
  </div>
</form>
     </div>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
  
     
  </div>
  
  </div>
</div>