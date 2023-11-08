<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>My profile</title>
  <link rel="icon" type="image/x-icon" href="https://storage.googleapis.com/dicoding-gentur-01/logo_light.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="https://storage.googleapis.com/dicoding-gentur-01/logo.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#contact">Contact Me</button>
          </li>
          <li class="nav-item">
            <a class="btn" href="https://storage.googleapis.com/dicoding-gentur-01/cv.pdf">Download CV</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <header>
    <img class="gentur" src="https://storage.googleapis.com/dicoding-gentur-01/gentur.jpeg" width="200" height="200" alt="foto_gentur">
    <h1>Gentur Sahadewa</h1>
    <p>(Computer Science Student)</p>
  </header>

  <hr>

  <main>
    <article>
      <h3 class="Overview">Overview</h3>
      <p>
        Hi, I am a Computer Science undergraduate student at Universitas Sebelas Maret (UNS).
        <br> Currently, I am learning about web programming.
      </p>
    </article>
  </main>

  <!-- Accordion -->
  <div id="aboutMeAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="btn collapsed btn-outline-warning" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          About Me
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse">
        <div class="accordion-body">
          Hi, my name is <strong>Gentur Sahadewa</strong> made with love from Kulon Progo, Yogyakarta. I am a fulltime
          Computer Science Student who currently live in Sukoharjo, Jawa Tengah. I like to play many different kind of
          music instruments, such as drum, guitar, and even gamelan.
          If you want to
          explore my experience in computer science aspect please visit my github <a
            href="https://github.com/gentursahadewa">here</a>
          I proclaime myself as a nice guy with a low profile personality, high of calcium and carbohidrat. You can add
          my social media on the “Contact Me” button in the navigation bar. Cheers!

        </div>
      </div>
    </div>
  </div>

  <!-- Card -->
  <div class="desc-skills">
    <div class="desc-skills-title">
      <h4>Skills</h4>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Frontend WebDev</h5>
            <p class="card-text">(HyperText Markup Language) a markup language used to create and structure the content
              of web pages. Me still learning.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">CSS</h5>
            <p class="card-text">(Cascading Style Sheets) a styling language used to control the presentation of web
              pages. Me still learning.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Javascript</h5>
            <p class="card-text">a programming language used to add interactivity to web pages. Me still learning.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="desc-experiences">
    <div class="desc-experiences-title">
      <h4>Experiences</h4>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Himaster Axel</h5>
            <p class="card-text">(2022-2023) Staff of Fundraising Division</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">PPK Kulon Progo</h5>
            <p class="card-text">(2018-2020) General Treasurer</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Kompa GKJ Wates</h5>
            <p class="card-text">(2020-2023) Head of Worship Division</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Me!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>
            Hello there! You can contact me via: <br>
            Instagram : @sahadev002 <br>
            Linkedin : Gentur Sahadewa <br> <br>
            or click the buttons below!
          </p>
          <a class="btn btn-outline-danger" href="https://www.instagram.com/sahadev002">
            Instagram
          </a>
          <a class="btn btn-outline-primary" href="https://www.linkedin.com/in/gentur-sahadewa-9546961a8/">
            Linkedin
          </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p>Copyright &copy; 2023 Gentur Sahadewa.</p>
  </footer>
</body>

</html>