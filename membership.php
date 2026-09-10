<?php include('header,footerandcss/header.php');
  include('header,footerandcss/navbar.php');  ?>
  <style>
    

    /* START SEC NAV */
    .nav-pills .nav-link.active{
        background-color:  #EE0270 !important;
        color:#3B013C !important;
    }

    .nav-pills .nav-link{
        background-color: rgb(0, 0, 0) !important;
        color: #ffffff !important;
    }


    /* END SEC NAV */

    /* START MEMBERSHIP */

    .membership img,
    .membership1 img{
        opacity: 0.5;
    }

    .membership img:hover,
    .membership1 img:hover{
        opacity: 1;
    }

    .membership .col-md-4 .a3{
        border: 5px solid grey;
        background-size: auto;
        height:90vh;
    }

    .membership .col-md-4 .a2{
        border: 5px solid grey;
        background-size: auto;
        height:90vh;
    }

    .membership .col-md-4 .a1{
        border: 5px solid grey;
        background-size: auto;
        height:90vh;
    }

    .w-header{
        background-color: black;
        color: #fff;
        padding: 30px 0px;
    }


    /* test */
    * {
        box-sizing: border-box;
      }

    .container-fluid {
        position: relative;
        margin: 0 auto;
    }
      
    .container-fluid img {
        vertical-align: middle;}
      
    .container-fluid .content1 {
        position: absolute;
        bottom: 30%;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
        width: 82.7%;
        padding: 14px;
        margin-left:6%;
      }
    .container-fluid .content {
        position: absolute;
        bottom: 30%;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
        width: 400px;
        padding: 14px;
        margin-left: 29px;
      } 
/* END MEMBERSHIP */
  </style>


    <!-- START SEC NAV -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <ul class="nav nav-pills nav-justified bg-dark" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">What's on</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Join NOW</button>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="membership1">
          <div class="container-fluid pt-2 pb-2 bg-dark">
            <div class="row">
              <div class="col-md-12 text-center w-header">
                <h1>
                  Watch All of English Premier League Online.
                </h1>
              </div>
              <div class="col-md-6">
                <div class="container-fluid pt-3 pb-3">
                  <img src="./img/membership/tr1.jpg" alt="Notebook" style="max-width:100%; max-height: 100%;">
                  <div class="content1">
                    <h2>Football Training Techniques Videos</h2>
                    <p>Elevate your game with our exclusive Football Training Techniques Videos membership! Dive into in-field footballers' training sessions, uncover tips, and master tricks to refine your skills. Join today for premium access, and transform your play with expert insights. Your journey to peak performance starts here!</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="container-fluid pt-3 pb-3">
                  <img src="./img/membership/tr2.jpg" alt="Notebook" style="max-width:100%; max-height: 100%;">
                  <div class="content1">
                    <h2>Live English Premier League 2023-24 </h2>
                    <p>Immerse yourself in the Live English Premier League 2023-24 like never before! Unlock premium access with our membership for an unrivaled football experience. Don't miss out on the electrifying matches—secure your membership now for exclusive content and thrilling moments throughout the season!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <!-- START MEMBERSHIP  -->

          

          <div class="membership">
            <div class="container-fluid pt-2 pb-2 bg-dark">
            <div class="row">
              <div class="col-md-12 text-center w-header">
                  <h1>Choose Your Sport Membership Plan</h1>
              </div>
              <div class="col-md-4 text-center">
                  <div class="container pt-3 pb-3">
                      <img src="./img/membership/a3.jpeg" alt="Notebook" style="max-width:400px; max-height: 800px;">
                      <div class="content">
                          <h1>One Day <br> Membership</h1>
                          <p>24hours of Grouped EPL Fans</p>
                          <hr>
                          <h2><b>$12.99</b></h2>
                          <form action="buynow.php" method="post">
                              <input type="hidden" name="membershipDuration" value="oneday">
                              <button type="submit" class="btn btn-danger">Buy Now</button>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="container pt-3 pb-3">
                      <img src="./img/membership/a2.jpeg" alt="Notebook" style="max-width:400px; max-height: 800px;">
                      <div class="content">
                          <h1>One Month <br> Membership</h1>
                          <p>Unlimited of Grouped EPL Fans</p>
                          <hr>
                          <h2><b>$34.99 (10% Discount)</b></h2>
                          <form action="buynow.php" method="post">
                            <input type="hidden" name="membershipDuration" value="onemonth">
                            <button type="submit" class="btn btn-danger">Buy Now</button>
                        </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="container pt-3 pb-3">
                      <img src="./img/membership/a1.jpeg" alt="Notebook" style="max-width:400px; max-height: 800px;">
                      <div class="content">
                          <h1>One Season <br> Membership</h1>
                          <p>Unlimited of Grouped EPL Fans</p>
                          <hr>
                          <h2><b>$78.99 (25% Discount)</b></h2>
                          <form action="buynow.php" method="post">
                          <input type="hidden" name="membershipDuration" value="oneyear">
                          <button type="submit" class="btn btn-danger">Buy Now</button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>


          <!-- END MEMBERSHIP -->

    <!-- END SEC NAV -->


    <!-- START FOOTER -->
            </div>
          </div>

    <!-- END FOOTER -->
    
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          const params = new URLSearchParams(window.location.search);
          const tab = params.get("tab");

          if (tab === "join") {
              document.getElementById("pills-home").classList.remove("show", "active");
              document.getElementById("pills-profile").classList.add("show", "active");

              document.getElementById("pills-home-tab").classList.remove("active");
              document.getElementById("pills-profile-tab").classList.add("active");
          }
      });
      </script>
    <?php include('header,footerandcss/footer.php') ?>