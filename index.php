<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Playfair+Display&display=swap" rel="stylesheet" />
    <title>BEAUTY STORE</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sm fixed-top" style="background-color: #f2e4c8">
      <div class="container">
        <a class="navbar-brand" href="#">BEAUTY STORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kasir">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pemilik-toko">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="row justify-content-center">
        <div class="col-4">
          <figure class="figure">
            <img src="img/jumbotron.jpg" class="figure-img img-fluid rounded" alt="..." />
            <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-4">
          <h1>Welcome To Beauty Store</h1>
          <br />
          <br />
          <p>Disini kami menjual banyak produk make up, jika ingin melihat product klik dibawah ini</p>
          <button type="button" class="btn btn-outline-secondary"><a href="#product">Product</a></button>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,133.3C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About  -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>About</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae accusamus ducimus nisi optio nam quo provident consectetur corrupti nemo architecto.</p>
        </div>
        <div class="col-4">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe eveniet sint, ratione eaque odit sequi totam hic aperiam quibusdam provident vel eos modi explicabo quam.</p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffe6b3"
          fill-opacity="1"
          d="M0,192L48,181.3C96,171,192,149,288,165.3C384,181,480,235,576,234.7C672,235,768,181,864,165.3C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Product -->
    <section id="product">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/Blushon.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Blush On</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 79.900</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/Eyeshadow.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Eyeshadow</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 114.900</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/Lipcream.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Lip Cream</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 69.900</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="product">
      <div class="container">
        <div class="row">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/Mascara.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Mascara</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 79.900</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/Fondation.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Fondation</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 114.900</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/catalog/bedak.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Loose Powder</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rp 69.900</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L48,181.3C96,171,192,149,288,165.3C384,181,480,235,576,234.7C672,235,768,181,864,165.3C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="proses.php" method="post">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" />
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" name="pesan" id="Pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f2e4c8"
          fill-opacity="1"
          d="M0,224L80,202.7C160,181,320,139,480,154.7C640,171,800,245,960,234.7C1120,224,1280,128,1360,80L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2021 | built with <i class="glyphicon glyphicon-heart"></i> by <a href="https://github.com/daraaudia">Kelompok 4</a>.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
