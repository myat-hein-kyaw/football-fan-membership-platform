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
  <style>
    .bg-img{
        background-image:url("./img/membership/bg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .nav-pills .nav-link.active{
        background-color:  #EE0270 !important;
        color:#3B013C !important;
    }

    .nav-pills .nav-link{
        background-color: rgb(0, 0, 0) !important;
        color: #ffffff !important;
    }

    .training-title{
        background-color: #ffffff;
        width: 100%;
        height: 249px;
        padding: 40px 20px;
    }

    .container{
        width: 100%;
        height: 100%;
        padding: 0px;
    }

    a{
        text-decoration: none !important;
    }

    .card-title{
        color: black;
    }

    .w-header{
        background-color: black;
        color: #fff;
        padding: 30px 0px;
    }
    .tab-pane .container{
        margin: 0px 0px 0px 300px;
    }

    .row .col-md-4,
    .row .col-md-8{
        padding: 0px;;
        margin: 10px 0px 10px 0px;
    }

  </style>
    <!-- START lFT -->
    <div class="bg-img">
      
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
      <ul class="nav nav-pills nav-justified bg-dark" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" onclick="showTab('pills-home', this)">
          Tips and Tricks of Football Exercise
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" onclick="showTab('pills-profile', this)">
Live EPL Club Training
          </button>
        </li>
      </ul>

    <div class="container pt-3">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane" id="pills-home" style="display:block;">
          <div class="row">
            <div class="col-md-12 text-center w-header">
              <h1>
                Football Training Techniques
              </h1>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wvlztaJYKYI?si=NctqZA0weLWu8XYW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/wvlztaJYKYI?si=NctqZA0weLWu8XYW">
                  <h2 class="card-title"><b>
                    Football Training Session (Pressing)
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">205K views 2 years ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/WBZllZFrcRc?si=73_gg06dhLJ1tfjL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/WBZllZFrcRc?si=73_gg06dhLJ1tfjL">
                  <h2 class="card-title"><b>
                    4 Line Warm Up
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">2.5M views  4 years ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/w8PbZQHf83M?si=IYrVVC9c5bCYtOOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/w8PbZQHf83M?si=IYrVVC9c5bCYtOOY">
                  <h2 class="card-title"><b>
                    Triangle Passing Drills For Soccer/Football | Passing, Movement & Third Man Run | 5 Variation |
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">482K views  3 months ago </small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RCwNRVc9PV0?si=S10TviEPNzJxcGuz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/RCwNRVc9PV0?si=S10TviEPNzJxcGuz">
                  <h2 class="card-title"><b>
                    Technical Football/Soccer Training Drills | 6 Variation | U9 - U10 - U11 - U12 - U13 - U14 |
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">235K views  4 months ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2MNaq8N0lvE?si=Fuf8gMQjpXIzp8Io" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/2MNaq8N0lvE?si=Fuf8gMQjpXIzp8Io">
                  <h2 class="card-title"><b>
                    ⚽ Technical Circle - Creative Football/ Soccer Activity for Kids - Soccer Drills
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">2.8M views  8 years ago </small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RpHv9vQ4wXI?si=rqkQ7BqOKi8ix6Ne" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/RpHv9vQ4wXI?si=rqkQ7BqOKi8ix6Ne">
                  <h2 class="card-title"><b>
                    Fun Drills For Kids (Volume 2) | U5 U6 U7 U8 Football/Soccer | 2021
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">204K views  2 years ago </small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/B4Mkgd-Ur2w?si=LeYGVbUxsY-wAChz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/B4Mkgd-Ur2w?si=LeYGVbUxsY-wAChz">
                  <h2 class="card-title"><b>
                    TeaM-Soccer Fußballschule Thomas Metzner Soccer Camp ⚽️ Full Training Session 🔥 U6 U7 U8
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">192K views  2 years ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q3w7g5ZzONw?si=AZTt0Hf1hz1CiVy1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-8">
              <div class="training-title">
                <a href="https://www.youtube.com/embed/Q3w7g5ZzONw?si=AZTt0Hf1hz1CiVy1">
                  <h2 class="card-title"><b>
                    4 Basic Youth Soccer Drills| U7/U8 Soccer Training|
                  </b></h2>
                </a>
                <p class="card-text"><small class="text-muted">57K views  2 years ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="pills-profile" style="display:none;">
            <!-- START MEMBERSHIP  -->
              <div class="row">
                <div class="col-md-12 text-center w-header">
                  <h1>
                    Football Training Techniques
                  </h1>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/l6h-mXA-LSc?si=QwU92-gr42S5jT2R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/l6h-mXA-LSc?si=QwU92-gr42S5jT2R">
                      <h2 class="card-title"><b>
                        Inside Training: Boss goals, big saves and skills in the rondos
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">3.6M views
                      2 years ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NahR2fscw44?si=jvwrPISA1FLE3gih" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/NahR2fscw44?si=jvwrPISA1FLE3gih">
                      <h2 class="card-title"><b>
                        INSIDE TRAINING | Gym work, drills, goals and more!
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">308K views
                      8 months ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yczsxBmN8GE?si=cGjZRPSlMJ6Bs8Or" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/yczsxBmN8GE?si=cGjZRPSlMJ6Bs8Or">
                      <h2 class="card-title"><b>
                        How To Get Fit Like A Premier League Footballer | Football Fitness Training
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">196K views  2 years ago </small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/GTnbgXdsK8A?si=u44quY8A6oftGYwn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/GTnbgXdsK8A?si=u44quY8A6oftGYwn">
                      <h2 class="card-title"><b>
                        How To Train Like a Premier League Footballer | 3 Premier League Level Football Fitness Drills
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">235K views  4 months ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/P75ZM9RQkSk?si=GhqrwOkJR6MrGko-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/P75ZM9RQkSk?si=GhqrwOkJR6MrGko-">
                      <h2 class="card-title"><b>
                        INSIDE TRAINING: New signings' first day as 14 more return for pre-season
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">3.1M views  3 months ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XqG0Sv_sh3Y?si=HngtijzmHLax2BmO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/XqG0Sv_sh3Y?si=HngtijzmHLax2BmO">
                      <h2 class="card-title"><b>
                        Look Who's Back In Training! 💪 | INSIDE TRAINING
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">271K views  3 weeks ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Zjr2jssQpAU?si=J_yWbsdG3gwG_nOp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/Zjr2jssQpAU?si=J_yWbsdG3gwG_nOp">
                      <h2 class="card-title"><b>
                        Shooting Competition After A Good Session! ☄️ | INSIDE TRAINING
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">661K views  2 months ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HOwMHSc37dc?si=CHc5wdalUfeato-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-8">
                  <div class="training-title">
                    <a href="https://www.youtube.com/embed/HOwMHSc37dc?si=CHc5wdalUfeato-w">
                      <h2 class="card-title"><b>
                        Hojlund's First Training Session! 🔥 | INSIDE TRAINING
                      </b></h2>
                    </a>
                    <p class="card-text"><small class="text-muted">899K views  2 months ago</small></p>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- END LFT -->

    <?php include('header,footerandcss/footer.php') ?>