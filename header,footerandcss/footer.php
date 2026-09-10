<div class="container-fluid">
      <div class="row footer">
        <div class="col-md-4">
          <div class="left">
            <p>Contact us and we'll get back to you within 24 hours</p>
            <p><i class="fas fa-map marker-alt"></i>&nbsp;&nbsp;Chiago, US</p>
            <p><i class="fas fa-phone"></i>&nbsp;&nbsp; +00 1515151515</p>
            <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;mymail@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4">
            <div class="mid">
              <footer>Designs & Developed By Myat Hein Kyaw</footer>
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-youtube"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-twitter"></a>
            </div>
        </div>
        <div class="col-md-4">
          <div class="right">
            <a href="index.html"><img src="https://logowik.com/content/uploads/images/premier-league-lion8499.jpg"></a>
          </div>
        </div>
      </div>
    </div>

    <!-- END FOOTER -->

    <script src="./Vendor/jquery.js"></script>
    <script src="./Vendor/bootstrap.bundle.min.js"></script>
    
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
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    };

    function showTab(tabId, clickedButton) {
      var tabs = document.querySelectorAll('.tab-pane');
      tabs.forEach(function(tab) {
        tab.style.display = 'none';
      });

      var navLinks = document.querySelectorAll('#pills-tab .nav-link');
      navLinks.forEach(function(link) {
        link.classList.remove('active');
      });

      document.getElementById(tabId).style.display = 'block';
      clickedButton.classList.add('active');
    }
    </script>
</body>
</html>
