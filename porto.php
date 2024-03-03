<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" , initial-scale="1,0" />

    <title>Portofolio</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&family=Manrope:wght@300;400&family=Poppins:wght@100;300;700&display=swap"
      rel="stylesheet"
    />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- cssnya -->
    <link rel="stylesheet" href="stylePorto.css" />
  </head>

  <!-- body -->
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Portofolio<span>Ku.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Saya</a>
        <a href="#project">Project</a>
        <a href="#contact">Kontak</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="github"><i data-feather="github"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1><span>Muhammad</span> Fauzan Adhim</h1>
        <p>Integrity | Attitude | Harmony | Proffesional</p>
        <a href="#" class="cta">Hubungi Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- Tentang Saya Start -->
    <section id="about" class="about">
      <h2>Tentang Saya</h2>

      <div class="row">
        <about class="img">
          <img src="img/imgsaya.jpeg" alt="Tentang Saya">
        </about>
        <div class="content">
          <h3>Muhammad Fauzan Adhim</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos labore consectetur accusamus tempore quis, adipisci dicta tenetur cum ducimus corporis minus! Tenetur reprehenderit, magni debitis exercitationem sapiente rerum itaque voluptatem?</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio similique possimus quod laudantium necessitatibus magni impedit laborum sed qui? Temporibus sapiente dolor similique non excepturi sed praesentium tempora pariatur modi!</p>
        </div>
      </div>
    </section>
    <!-- Tentang Saya End -->

    <!-- Project Session Start -->
    <section id="project" class="project">
      <h2>Project</h2>
    </section>
    <!-- Project Session End -->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>
    <!-- Javascript -->
    <script src="script.js"></script>
  </body>
</html>
