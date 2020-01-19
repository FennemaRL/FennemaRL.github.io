<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rodriguez lucas | Desarrollador web</title>
  <link rel="shortcut icon" href="/img/logo.ico" /> <!-- cambiar -->
  <!-- Bootstrap core CSS -->
  <!-- Custom styles for this template -->
  <link href="css/styles.css" rel="stylesheet">

</head>

<body >
   <!--  nav bar -->
  <div class="container">
    <header>
      <img src="/img/logo.png" alt="Rodriguez lucas logo" class="logo">
      <input class="menu-btn" type="checkbox" id="menu-btn"/>
      <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label> 
      <ul class="menu" >
        <li><a onclick="scroll2Proyects('project')">proyectos</a></li>
        <li><a onclick="scroll2Proyects('contactme')">contactame</a></li>
        <li><a href="#" target="_blank">curriculum</a></li>
      </ul> 
    </header>
      <section class="hero">
        <p> hola me llamo,</p>
        <h1>Rodriguez Lucas.</h1>
        <h3>Soy un <span>desarrollador backend & frontend.</span></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
      </section>
  </div>
  <div  class="middlepart"> 
    <div class="container">
      <h2 class="titleproject" id="project">Proyectos</h2>
      <ul>
        <li>
          <div class="card">
            <img src="/img/mockup.png" alt="" >
            <div class="text">
              <div class="title">
                <h4>Titulo </h4>
                <a href="https://github.com/" target="_blank"><img src="/img/iconmonstr-github-1.svg" alt="github-link" ></a>
                <a href="#" target="_blank"><img src="/img/iconmonstr-external-link-thin.svg" alt="github-link" ></a>
              </div>
              <p>Descripcion sobre que va a tratar relleno para ver como se adapta la descripcion de este texto en la tarjeta</p>
             </div>
            </div>
        </li>
      </ul>
    </div>
  </div>
<footer>
  <div class="footer-container">
    <div class="container" id="contactme">
      <h3 class="footer-title">contactame</h3>
      <div class="mail" style="display:flex;">
        <a class="footer-link" href="mailto:ld.fennema@gmail.com?subject=contacto%20por%20paginaweb%20:" style="flex:1"><img src="/img/iconmonstr-email-1.svg" alt="github-link" class="mailto"></a>
        <p style="flex: 2"> : ld.fennema@gmail.com</p>
      </div>
      <p id="footerOr">or</p>
      <form method="post" action="correo" id="form1">
        <input type="text" name="name"  placeholder="Nombre" required="">
        <input type="email" name="email"  placeholder="Mail a responder" required=""><br>
        <textarea type="text" name="message" rows="4" placeholder="Mensaje" required=""></textarea><br>
      </form>
        <button type="submit" form="form1" value="Submit" id="send" name="send">Enviar</button>
        <button type="reset" form="form1" value="Reset">Restablecer</button>
    </div>
  </div>
</footer>
</body>
<?php
include("mail.php");
>
<script src="javascript/js.js"></script>
</html>
