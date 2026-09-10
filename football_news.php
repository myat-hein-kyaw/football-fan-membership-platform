<?php
// Start the session
session_start();
include('header,footerandcss/header.php');
include('header,footerandcss/navbar.php');


// Rest of your code follows...
?>

  
  <style>
    .footballnews{
        background-color: #000000;
    } 
      
    .card{
        max-width: 100%;
    }

    .container h1{
        color: white;
    }

    a{
        text-decoration: none !important;
    }

    p{
        color: black;
    }

    .card-title{
        color: black;
    }

    .title{
        background-color:#ff005c;
    }
    .title h1{
        color:#3F1052;
        text-shadow:  1px 1px 1px rgb(255, 255, 255) ;
    }
  </style>
    <!-- END NAV -->

    <!--START NEWS -->
    <div class="container-fluid footballnews p-0 bg-dark">
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div class="container pt-3">
        <div class="title">
          <h1 class="text-center pt-4 pb-4" >
            LATEST NEWS
          </h1>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/treblewinner.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Man Utd capture their fifth Premier League title as part of an historic treble
                  </b></h5>
                </a>
                <a href=""><p class="card-text">In the last full season before the turn of the Millennium, history was made as Manchester United became the first English club to win the Premier League, FA Cup and UEFA Champions League treble, and their fate in all three competitions was sealed during an incredible 10-day period in May 1999.</p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/M.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Scott McTominay sends message to Erik ten Hag with Manchester United heroics vs Brentford
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Man Utd produced a thrilling late comeback to beat Brentford 2-1 at Old Trafford on a day when Scott McTominay was the hero. </p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/a.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Arsenal vs Man City TV channel, kick-off time, live stream and how to watch Premier League
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Arsenal news as the Gunners prepare for their biggest Premier League game of the season on Sunday afternoon looking to move top before the international break</p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/c.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Catch the best bits from Chelsea's 4-1 Premier League victory against Burnley at Turf Moor
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Raheem Sterling inspired Chelsea to come from behind and secure victory in style, having a big hand in all four goals as we brushed Burnley aside in the second half to make it three wins in a row. </p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/l.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Luton 0-1 Tottenham: Ange Postecoglou says players want to change club's destiny after best league start since 1960
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Tottenham have registered 20 points from their opening eight Premier League games this season (W6 D2), only in 1960-61 (21 points in first seven games converting to three points/win) have they done so in fewer games to begin a top-flight campaign</p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/M1.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Pep Guardiola explains why he has stayed at Man City for so long
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Guardiola is the second longest-serving manager in the Premier League and the Manchester City boss believes the relentless schedule has helped with that.</p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href=""><img src="./img/News/M2.webp" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="">
                  <h5 class="card-title"><b>
                    Manchester United manager Erik ten Hag explains Casemiro substitution and criticises two players
                  </b></h5>
                </a>
                <a href=""><p class="card-text">Casemiro produced his poorest performance for Man United and only lasted a half against Brentford, while Erik ten Hag criticised some other players.</p></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div><br>
      </div>
    </div>

    <!-- END NEWS -->

    <!-- START FOOTER -->
    <?php include('header,footerandcss/footer.php') ?>