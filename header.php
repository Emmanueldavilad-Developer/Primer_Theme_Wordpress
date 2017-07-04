<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url' )?>/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo bloginfo('template_url' )?> style.css">
    
    <style>
      .suscribir{
    background: black;
    background-size: cover;
    background-position: center;
    height: 400px;
}
    </style>
  </head>
  <body>
  
    <!-- navbar -->
         <div class="container-fluid bg-inverse fixed-top">
          <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <a class="navbar-brand" href="#">
            <img src="<?php echo bloginfo('template_url' )?>/img/bootstrap-solid.svg" width="30" height="30" alt=""> Bootstrap
          </a>

          <?php wp_nav_menu(array(

            'theme_location' => 'superior',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'cointariner_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item'
            ) ); ?>
          
          
        </nav>
    </div>
    <!--  /navbar -->
    
    <!--Suscribir-->
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
       <div class="text-center text-white">
           <h1 class="4">lorem ipsum dolor sit</h1>
           <form action="" class="form-inline flext-column flex-sm-row">
           <div class="form-group mr-sm-3">
               <input type="text" placeholder="Nombre" class="form-control">
           </div>
           <div class="form-group </form>">
               <input type="text" placeholder="Email" class="form-control">
           </div>
           <div class="form-group">
               <input type="submit"  class="btn btn-primary" value="Enviar">
           </div>
           </form>
       </div>
        
        
    </div>
    
    <!--/Suscribir-->