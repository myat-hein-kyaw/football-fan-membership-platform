<?php
  session_start();

  if (!isset($_SESSION['userEmail'])) {
      header("Location: login.php");
      exit();
  }

  if (!isset($_SESSION['membershipStatus']) || $_SESSION['membershipStatus'] !== 'paid') {
      header("Location: membership.php");
      exit();
  }
  ?>

<?php include('header,footerandcss/header.php');
  include('header,footerandcss/navbar.php');  ?>
      <!-- END NAV -->
    <!-- START LFM -->
  <style>
    a{
        text-decoration: none !important;
    }
    .bg-img{
        background-image:url("./img/membership/bg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
  </style>

    <div class="bg-img">
      <div class="container pt-3">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="fixture text-center">
          <div class="title">
            <h1 class="text-center pt-4 pb-4" >
              <img src="https://images.fotmob.com/image_resources/logo/teamlogo/eng.png" class="Image CountryIcon me-3 " alt="" width="20" height="20" loading="lazy"> Live English Premier League
            </h1>
          </div>
          <div class="table mb-0">
            <div class="container pt-3 pb-3">
              <div class="data">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <h2>Saturday, October 21</h2>
                  </div>
                </div>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Liverpool</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8650_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result text-center">
                        <b id="number">11:00 PM</b>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Everton</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8668_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Bournemouth</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8678_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result">
                        <div class="result text-center">
                          <b id="number">20:30</b>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Wolves</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8602_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Brentford</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9937_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result text-center">
                        <b id="number">20:30</b>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Burnley</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8191_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Man City</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8456_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result">
                        <div class="result text-center">
                          <b id="number">20:30</b>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Brighton</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10204_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Newcastle</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10261_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result">
                        <div class="result text-center">
                          <b id="number">20:30</b>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Crystal Palace</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9826_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Nottm Forest</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10203_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result">
                        <div class="result text-center">
                          <b id="number">20:30</b>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Luton</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8346_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Chelsea</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8455_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result">
                        <div class="result text-center">
                          <b id="number">23:00</b>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Arsenal</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9825_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
    
          <div class="table mb-0">
            <div class="container pt-3 pb-3">
              <div class="data">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>Sunday, October 22</h2>
                  </div>
                </div>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Sheff Utd</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8657_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result text-center">
                        <b id="number">01:30</b>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Man United</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10260_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Aston Villa</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/10252_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result text-center">
                        <b id="number">22:00</b>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>West Ham</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8654_xsmall.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="match">
                <a href="">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="column">
                        <h3>Tottenham</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/8586_small.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="result text-center">
                        <b id="number">01:30</b>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="column1">
                        <h3>Fulham</h3>
                      <img src="https://images.fotmob.com/image_resources/logo/teamlogo/9879_small.png" class="Image TeamIcon " alt="" width="25" height="25" loading="lazy">
                      </div>
                    </div>
                  </div>
                </a>
              </div> 
            </div>
          </div> 
        </div>  
      </div>
    </div>


    <!-- END LFM -->
    <?php include('header,footerandcss/footer.php') ?>