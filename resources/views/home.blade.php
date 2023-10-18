<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #3e0782;">
  <!-- <a class="navbar-brand" href="#">Navbar </a> -->
  <!-- <i class="fa-brands fa-github fa-2xl"></i> -->
  <i class="fa-brands fa-github fa-2xl" style="color: #ff0000;"></i>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto" style="margin-left: 1100px;">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#project">Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Me</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar -->

<!-- jumbotron -->
<div class="jumbotron text-center rounded-0" id="home" style="height: 700px; background-color:#342259; color:white;">
  <img src="http://localhost:8000/images/1.png" class="img-thumbnail rounded-circle" width="120">
  <h1 class="display-2">Joko Bogor</h1>
  <p class="lead">dengan spring boot menjadikan negeri anda tentram</p>
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,192C384,192,480,128,576,133.3C672,139,768,213,864,229.3C960,245,1056,203,1152,186.7C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
</div> 
<!-- jumbotron -->

<!-- about -->
  <section id="about">
    <div class="container">
      <div class="row border-danger mb-3 justify-content-center">
        <h2>About Me</h2>
      </div>
      <div class="row border-info">
        <div class="col-md-5">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed ducimus dolore, itaque deleniti labore provident minima corporis quis repellat fuga tempore id pariatur ipsum odit! Quia assumenda quibusdam dolore sunt voluptate consequatur? Tempora voluptatem quas error, consequatur ut velit adipisci temporibus. Molestias nihil perspiciatis soluta, veniam delectus tenetur sit velit.</p>
        </div>
        <div class="col-md-5">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed ducimus dolore, itaque deleniti labore provident minima corporis quis repellat fuga tempore id pariatur ipsum odit! Quia assumenda quibusdam dolore sunt voluptate consequatur? Tempora voluptatem quas error, consequatur ut velit adipisci temporibus. Molestias nihil perspiciatis soluta, veniam delectus tenetur sit velit.</p>
        </div>
      </div>
    </div> 
  </section>
<!-- about -->

 <!-- Project -->
 <section id="project">
   <div class="container" >
   <div class="row justify-content-center">
        <h2>My project</h2> <br> <br> <br> <br>
      </div>
      <div class="row justify-content-center">

        <div class="col-md-4 pb-3">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/9e/a5/e5/9ea5e5255688e5a7a3a9c6226d36139c.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Project PJBL</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="https://id.pinterest.com/pin/4222193391128128/" class="btn btn-primary">link uy"</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-3">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/3a/8a/6c/3a8a6cc532e966db07c76f0041fe7a7b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mobile Apps</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="https://id.pinterest.com/pin/4222193391128128/" class="btn btn-primary">link uy"</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-3">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/6b/03/76/6b0376ac3b6232fc032ba81d2e4e7b11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">C++ (CPP)</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="https://id.pinterest.com/pin/4222193391128128/" class="btn btn-primary">link uy"</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/6f/f1/42/6ff1420eff13056ec51bca5c8a7dd2bf.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Blender 3D Design</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="https://id.pinterest.com/pin/4222193391128128/" class="btn btn-primary">link uy"</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/736x/f3/1d/f1/f31df17603effe63f02083d4381649df.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Project Rubish Rescue</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="https://id.pinterest.com/pin/4222193391128128/" class="btn btn-primary">link uy"</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Tutup Project --> 


  <!-- contact me -->
  <section id="contact">
    <div class="container">
      <div class="col text-center">
        <h2>Contact Me</h2>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div> 
      <div class="mb-3">
        <button class="btn btn-primary">Kirim</button>
      </div> 
    </div>
  </section>
  <!-- contact me -->

  <!-- footer -->
  <footer style="background-color: #3e0782;">
    <div class="container" style="padding-top: 1rem;">
      <div class="row">
        <div class="col-md-8">
          <button type="button" class="btn btn-primary btn-floating mx-2 border-0" style="background-color: #7289da;">
            <i class="fa-brands fa-discord"></i>
          </button>
          <button type="button" class="btn btn-primary btn-floating mx-2 border-0">
            <i class="fa-brands fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-danger btn-floating mx-2 border-0">
            <i class="fa-brands fa-youtube"></i>
          </button>
      </div>
      <div class="col-md-4 text-white">
        <h6 class="text-uppercase fw-bold">
          <i class="fa-regular fa-copyright fa-2xl"></i> RARS
        </h6>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa praesentium nostrum maiores veritatis? Omnis libero totam asperiores mollitia quas delectus.</p>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- copyright -->
  <div class="text-center text-white p-3" style="background-color:black;">
  <i class="fa-regular fa-copyright fa-s"></i> 2023 Copyright
  <a href="#" class="text-white">Paung</a>
  </div>
  <!-- copyright -->


  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>
<!-- bootstrap 4.6 config -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.documentElement.scrollTop = 0; 
} 
</script>

</html>