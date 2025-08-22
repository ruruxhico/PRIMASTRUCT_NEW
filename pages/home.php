<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo 'Prima-struct Engineering Consultancy';
        ?>
    </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>

<body>
    <div id="featuresCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#featuresCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#featuresCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#featuresCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets\eng1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets\eng2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets\eng3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#featuresCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#featuresCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>About Us</h1>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
            <div class="overview-images">
                <div class="img-col">
                    <div id="overviewCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#overviewCarousel" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#overviewCarousel" data-bs-slide-to="1"></li>
                            <li data-bs-target="#overviewCarousel" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="assets\overview.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="assets\overview2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="assets\overview3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#overviewCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#overviewCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="overview-text">
                <p> Prima-struct Engineering Consultancy is a design firm which 
                    specializes in infrastructure projects ranging from mid to 
                    low-rise residential and commercial projects to telecommunication 
                    towers. Though we just formally registered our company for the year 2021, 
                    we started our design services as early as 2017 together with our 
                    partnered contractors and architectural firms which is still with us up 
                    to now proving our excellence and commitment with our partners.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>CEO Message</h1>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="about-me">
                Welcome to Prima-Struct Engineering Consultancy! As the leader of this engineering 
                company, we are thrilled to have you here. Our mission is to deliver innovative 
                solutions that meet your unique challenges, leveraging cutting-edge technology 
                and a dedicated team of experts. <br><br>

                At Prima, we believe in building lasting relationships based on trust, 
                transparency, and exceptional service. We are passionate about 
                engineering and committed to excellence in every project we undertake.<br><br>

                Thank you for choosing us as your partner. Together, let’s 
                engineer a better future.<br><br>

                Warm regards,<br><br>

                Kim Aldrin S. Mejia<br>
                CEO & Co-founder<br>
                Prima-Struct Engineering Consultancy<br>

            </div>
        </div>

            <div class="col-lg-6 col-md-6 text-center">
            <div class="about-me">
                <div class="img-col">
                    <img src="assets\ceo.jpg" alt="about-me" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous">
</script>

</body>
</html>