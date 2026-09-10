<?php include('header,footerandcss/header.php');
  include('header,footerandcss/navbar.php');  ?>

<style>
  .bg-img{
      background-image:url("./img/membership/bg.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
  }

  .w-header{
      background-color: black;
      color: #fff;
      padding: 30px 0px;
  }

  .contact-paragraph .row{
      color: #ffffff;  
      background-color: black;
      border: 3px solid black;
      padding: 30px;
      max-width: 100%;
      height: 100%;
    }

    .contact-img{
      height: 70vh;
      width: 100%;
      background-image: url("./img/contact/contact.jpg");
      background-size: 100% 100%;
      border: 10px solid rgb(255, 255, 255);
      border-radius: 10px;
  }

  .contact-form{
      padding: 20px 20px;
      background-color: #EE0270;
      color: aliceblue;
      height: 70vh;
      border: 10px solid rgb(255, 255, 255);
      border-radius: 10px;
  }

  .contact-form label{
      font-size: 20px;
  }
</style>
    <div class="bg-img">
      <!-- END NAV -->
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div class="container-fluid">
        <div class="contact">
          <div class="row pt-3 pb-3">
            <div class="col-md-12  w-header text-center">
              <h1>
                Get In Touch
              </h1>
            </div>
          </div>
          <div class="row pt-3 pb-3">
            <div class="col-md-6">
              <div class="contact-img"></div>
            </div>
            <div class="col-md-6">
              <div class="contact-form">
                <h1>
                  Contact Us
                </h1>
                <label for="" class="form-label pt-1">User Name</label>
                <input type="email" class="form-control" id="" placeholder="Name">
                <label for="" class="form-label pt-1">Email address</label>
                <input type="email" class="form-control" id="" placeholder="Email">
                <label for="" class="form-label pt-1">Comment</label>
                <textarea class="form-control" id="" rows="5"></textarea>
                <button class="mt-2 btn btn-info">Commit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php include('header,footerandcss/footer.php') ?>