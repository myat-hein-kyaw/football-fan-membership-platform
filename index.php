<?php 
session_start();

include('header,footerandcss/header.php');
include('header,footerandcss/navbar.php');
?>

<!-- Check if payment was successful and display a message -->
<?php
if (isset($_GET['payment_success']) && $_GET['payment_success'] === 'true') {
  echo '<script>alert("Your payment was successful. Please wait for approval.");</script>';
}
?>
      <!-- END NAV -->
      <!-- Start Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/a.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Welcome To Grouped EPL Fans Website</h1>
              </div>
          </div>
          <div class="carousel-item">
            <img src="./img/a1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/a2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Being in the Premier League would be a dream come true. (Jamie Vardy)</h1> <br>
                <p>Read More</p>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <!-- End Carousel -->

      <!-- Start Fixture -->
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div class="fixture text-center bg-danger">
        <div class="fix-header">
          <a href="" class="" >
            <h1><img src="https://images.fotmob.com/image_resources/logo/teamlogo/eng.png" class="Image CountryIcon me-3 " alt="" width="20" height="20" loading="lazy">
              England - Premier League Fixture Tonight</h1>
          </a>
        </div>
        <div class="table mb-0">
          <div class="container">
            <div class="data">
              <div class="row">
                <div class="col-md-12 text-center">
                <h2>Saturday, October 7</h2>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Luton</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8346_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                    <b id="number">0-1</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Tottenham</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8586_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Burnley</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8191_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result">
                    <div class="result text-center">
                      <b id="number">1-4</b>
                      <p>FT</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Chelsea</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8455_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Everton</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8668_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                    <b id="number">3-0</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Bournemouth</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8678_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Fulham</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9879_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result">
                    <div class="result text-center">
                      <b id="number">3-1</b>
                      <p>FT</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Sheff Utd</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8657_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Man United</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10260_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result">
                    <div class="result text-center">
                      <b id="number">2-1</b>
                      <p>FT</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Brentford</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9937_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Crystal Palace</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9826_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result">
                    <div class="result text-center">
                      <b id="number">0-0</b>
                      <p>FT</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Nottm Forest</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10203_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          
          <div class="container">
            <div class="data">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2>Sunday, October 8</h2>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Brighton</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10204_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                    <b id="number">2-2</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Liverpool</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8650_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>West Ham</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8654_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                    <b id="number">2-2</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Newcastle</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10261_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Wolves</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8602_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                     <b id="number">1-1</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Aston Villa</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10252_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div> 
            <div class="match">
              <div class="row">
                <div class="col-md-5">
                  <div class="column">
                    <h3>Arsenal</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9825_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="result text-center">
                    <b id="number">1-0</b>
                    <p>FT</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="column1">
                    <h3>Man City</h3>
                  <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8456_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Fixture -->
      
      <!-- Start news -->
      <div id="news" class="container-fluid text-center bg-dark">
        <div class="news-header">
          <h1><a href="" class="n-header" >Today News</a></h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div>
              <img src="./img/News/M.webp" alt="image" class="img-thumbnail center mb-3 "> 
              <p class="paragraph">"Scott McTominay sends message to Erik ten Hag with Manchester United heroics vs Brentford" <br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-4">
            <div>
              <img src="./img/News/a.webp" alt="image" class="img-thumbnail center mb-3 ">
              <p class="paragraph">Arsenal and Manchester City will face off for the first time in the Premier League this season..... <br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-4">
            <div>
              <img src="./img/News/M2.webp" alt="image" class="img-thumbnail center mb-3 ">
              <p class="paragraph">Manchester United manager Erik ten Hag explains Casemiro substitution and criticises two players <br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-4">
            <div>
              <img src="./img/News/l.webp" alt="image" class="img-thumbnail center mb-3"> 
              <p class="paragraph">Luton 0-1 Tottenham: Ange Postecoglou says players want to change club's destiny after best league start since 1960<br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-4">
            <div>
              <img src="./img/News/M1.webp" alt="image" class="img-thumbnail center mb-3 ">
              <p class="paragraph">Pep Guardiola explains why he has stayed at Man City for so long</button><br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-4">
            <div>
              <img src="./img/News/c.webp" alt="image" class="img-thumbnail center mb-3 ">
              <p class="paragraph">Catch the best bits from Chelsea's 4-1 Premier League victory against Burnley at Turf Moor... <br><a class="mt-3 btn btn-dark" href="football_news.php">Read More</a></p>
            </div>   
          </div>
          <div class="col-md-12 p-4">
            <button class="n-button"><h3>Watch More News</h1></button>
          </div>
        </div>
    </div>
    
    <!-- End News -->

    <!-- START FOOTER -->
    <?php include('header,footerandcss/footer.php') ?>
    