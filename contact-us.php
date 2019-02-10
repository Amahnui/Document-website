<?php include('static/inc/header.php'); ?>

  <!-- Main -->
  <main>

    <section class="page-title-section theme-bg">
      <div class="container">
        <div class="page-title">
          <h1>Contact Us</h1>
          <ol class="breadcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-8 sm-m-30px-b">
            <div class="contact-form md-m-30px-b md-m-0px-r m-50px-r">
                <h2>Say Something</h2>
                <form class="contactform" method="post" action="static/php/process-form.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input id="name" name="name" type="text" placeholder="Name" class="validate form-control" required>
                          <span class="input-focus-effect"></span>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <input id="email" type="email" placeholder="Email" name="email" class="validate form-control" required>
                          <span class="input-focus-effect"></span>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                          <textarea id="message" placeholder="Your Comment" name="message" class="form-control" required></textarea>
                          <span class="input-focus-effect"></span>
                        </div>
                       </div>
                        <div class="col-md-12">
                          <div class="send">
                             <button class="btn btn-theme" type="submit" name="send"> send message</button>
                          </div>
                          <span class="output_message"></span>
                        </div>
                      </div>
                </form>
            </div>
          </div> <!-- col -->
          <div class="col-md-6 col-lg-4">
            <div class="contact-info">
              <h6>Our Address</h6>
              <p>123 Stree New York City , United States Of America.</p>
            </div>
            <div class="contact-info">
              <h6>Our Phone</h6>
              <p>Office: +004 44444 44444<br>
                Office: +004 44444 44444<br></p>
            </div>
            <div class="contact-info">
                <h6>Our Email</h6>
                <p>info@domainname.com<br>contact@domainname.com</p>
              </div>
          </div> <!-- col -->
        </div>
      </div> <!-- container -->
    </section>

    <section>
        <div class="contact-map">
          <div class="embed-responsive embed-responsive-16by9 h-100">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840107317064!2d144.955925!3d-37.817214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1520156366883" allowfullscreen=""></iframe>
          </div>
        </div>       
    </section>

  </main>
  <!-- / -->

  <?php include 'static/inc/footer.php'; ?>