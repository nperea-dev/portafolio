<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Ney Roger Perea</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/media.css" media="screen and (max-width:768px)"/> -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <style>
      @media screen and (max-width: 768px) {
        body {
          border: 10px solid blue;
        }
      }
    </style> -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
  <body>
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="header">
      <div class="container">
        <figure class="logo">
          <img src="images/logo.png" height="50" alt="Logo " />
        </figure>
        <nav class="menu">
          <ol>
            <li>
              <a class="link" href="#portafolio">Portafolio</a>
            </li>
            <li>
              <a class="link" href="#eventos">Experiencia</a>
            </li>
            <li>
              <a class="link" href="#contacto">Trabajemos juntos</a>
            </li>
          </ol>
        </nav>
      </div>
    </header>
    <section class="hero">
      <div class="container">
        <h1>
          Hola! Soy <strong>Ney Roger Perea</strong> <br/> Estudiante de Programacion  <strong>Python, Java, Html y CSS</strong>  <br> apasiónado por la <strong>tecnologia.</strong>
        </h1>
        <img class="hero-image" src="images/hero.jpg" width="300" height="200" alt="imagen principal del sitio"> 
      </div>
    </section>
    <section id="portafolio" class="portfolio">
      <div class="container">
       <!--<h2>Portafolio (Proyectos Destacados)</h2> -->  
      <article class="project">
        <div class="project-details">
          <h3 class="project-title">Gruas Moviles Gottwald </h3>
          <h6 class="project-course">HMK300</h6>
          <p class="project-date"><small><strong>Fecha:</strong> 01/07/2018</small></p>
          <p class="project-url"><small><strong>Puedes verlo en:</strong> https://www.terex.com/</small></p>
          <p class="project-description">Maravilla de la ingenieria alemana en el campo de gruas de muelles, alto preformance, comfiabilidad y disponibilidad.</p>
        </div>
        <figure class="project-imageContainer">
          <img class="project-image" width="500" src="images/platzi-video-react-native.png" alt="prouyecto del curso de React Native">
        </figure>
      </article>
      
      </div>
      
    </section>
    <div class="container">
      <h2 class="event-list-title">Más sobre mi experiencia</h2>
    </div>
   
    <section id="eventos" class="event-list">
      <div class="container">
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/platzi-conf.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">Programacion de PLC</h3>
            <p class="event-description">se actualiza los programas para mejorar el performance de tu maquinaria</p>
            <a class="event-url" href="https://www.pfenninggroup.com/services" target="_blank">Ir a la pagina</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <div class="flexible-video">
              <iframe width="560" height="200" src="https://www.youtube.com/embed/Vee7bZ_rCJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- <img class="event-image" src="images/platzi-conf.jpg" width="500" /> -->
          </figure>
          <div class="event-detail2">
            <h3 class="event-title">Kalmar Review G7/G8</h3>
            <p class="event-description">Entrevista de la firma Kalmar Cranes sobre el desempeño y performance de las gruas que nos vendieron.</p>
            <a class="event-url" href="https://youtu.be/Vee7bZ_rCJs?t=21" target="_blank">Ir a la pagina</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <video class="html-video" src="videos/f8.mp4" width="300" height="320" controls></video>
            <!-- <img class="event-image" src="images/platzi-conf.jpg" width="500" /> -->
          </figure>
          <div class="event-detail">
            <h3 class="event-title">En la draga boscali</h3>
            <p class="event-description">la draga mas grande de su tiempo mejoró la navegalidad de la bahia de cartagena 2016</p>
            <a class="event-url" href="https://boskalis.com/" target="_blank">Ir a la pagina</a>
          </div>
        </article>
        
      </div>
    </section>
    <section id="contacto" class="contact">
      <div class="container">
        <form action="/suscripcion/" class="form-email">
          <h3>¿Creamos algo juntos?</h3>
          <input type="text" placeholder="Déjame tu email" id="email">
          <button>Enviar</button>
        </form>
        <div class="social">
          <a href="https://twitter.com/ney_roger" class="social-link twitter"></a>
          <a href="https://www.facebook.com/ney.perea" class="social-link facebook"></a>
          <a href="https://github.com/nperea75-gh/" class="social-link github"></a>
          <a href="https://www.instagram.com/neyperea/" class="social-link instagram"></a>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div>
          <p>Practicas de Heroku<img src="images/platzi.png" width="80" alt="heroku"></p>
        </div>
        <div>
          <p>
            copiado with ❤️ by <a href="https://twitter.com/ney_roger">@ney_roger</a>
          </p>
        </div>
      </div>
    </footer>
    <script>
      // console.log('Hola mundo! es mi primera linea en JS');
      const ipad = window.matchMedia('screen and (max-width: 767px)')
      const menu = document.querySelector('.menu');
      // console.log(menu);
      const burgerButton = document.querySelector('#burger-menu');
      // console.log(burgerButton);


      ipad.addListener(validation)

      function validation(event) {
        if (event.matches) {
          burgerButton.addEventListener('click', hideShow)
        } else {
          burgerButton.removeEventListener('click', hideShow)
        }
      }
      validation(ipad);


      function hideShow() {
        if (menu.classList.contains('is-active')) {
          menu.classList.remove('is-active');
        } else {
          menu.classList.add('is-active');
        }
      }
    </script>
  </body>
</html>