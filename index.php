<!DOCTYPE html>
<html lang="pt-br">
<head>
  
  <title>Senac Multimarcas - Site modelo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://www.senac.br/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
min-height: 100px;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-4.png" style="width:100px;></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">INÍCIO</a></li>
        <li><a href="#portfolio">LANÇAMENTOS</a></li>
        <li><a href="#pricing">MAIS VENDIDOS</a></li>
	<li><a href="#contact">LOCALIZAÇÃO</a></li>
        <li><a href="#contact">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Senac Multimarcas</h1> 
  <p>A sua loja para todos os estilos.</p> 
  <form>
    <div class="input-group">
     
      </div>
    </div>
  </form>
</div>

<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://cdn.awsli.com.br/1140x1140/328/328858/banner/2364a527ae.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://cdn.awsli.com.br/1140x1140/328/328858/banner/48401057f6.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://cdn.awsli.com.br/1140x1140/328/328858/banner/7c90d74091.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Voltar</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>CATEGORIAS</h2>
  
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/fdba9a326f.png"></span>
      <h4>CALÇAS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/aefb5614eb.png"></span>
      <h4>CAMISETAS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/9675ad35a5.png"></span>
      <h4>BERMUDAS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
       <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/ca160db649.png"></span>
      <h4>BONES</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/072f885d57.png"></span>
      <h4>JAQUETAS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span><img src="https://cdn.awsli.com.br/1140x850/328/328858/banner/ab79bfff9f.png"></span>
      <h4 style="color:#303030;">CALÇADOS</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Lançamentos</h2><br>
  <h4>O seu estilo em todas as estações.</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://img.ltwebstatic.com/images3_pi/2021/09/24/1632446601aa055b3bb28abb469ab8a99817751931_thumbnail_600x.webp" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://img.ltwebstatic.com/images3_pi/2021/09/24/1632446601aa055b3bb28abb469ab8a99817751931_thumbnail_600x.webp" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://img.ltwebstatic.com/images3_pi/2021/09/24/1632446601aa055b3bb28abb469ab8a99817751931_thumbnail_600x.webp" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p></p>
      </div>
    </div>
  </div><br>
  
  
 

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>MAIS VENDIDOS</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-8">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
        </div>
        <div class="panel-footer">
          <h3>R$ 19</h3>
          
          <button class="btn btn-lg">Comprar pelo whatsapp</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-8">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
        </div>
        <div class="panel-footer">
          <h3>R$ 19</h3>
          
          <button class="btn btn-lg">Comprar pelo whatsapp</button>
        </div>
      </div>      
    </div>          
    <div class="col-sm-4 col-xs-8">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
        </div>
        <div class="panel-footer">
          <h3>R$ 19</h3>
          
          <button class="btn btn-lg">Comprar pelo whatsapp</button>
        </div>
      </div>      
    </div>       
  </div>
</div>


<!-- Image of location/map -->
<div id="map" class="container-fluid bg-grey">
  <h2 class="text-center">LOCALIZAÇÃO</h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.3378689726374!2d-43.25823238503516!3d-22.86397408503358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997c013902f0c3%3A0xa1ad7b4cb85e0ddb!2sSenac%20Bonsucesso!5e0!3m2!1spt-BR!2sbr!4v1664222049057!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Funcionamos de 08:00 as 21:00.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Feito com amor <a href="https://github.com/Leonardo-Ferreira-costa" title="Visite o modelo no Github">github.com/Leonardo-Ferreira-costa</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>