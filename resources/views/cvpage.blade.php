<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jobstart &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="{{url('/')}}/fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/css/magnific-popup.css">
  <link rel="stylesheet" href="{{url('/')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{url('/')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{url('/')}}/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="{{url('/')}}/css/animate.css">


  <link rel="stylesheet" href="{{url('/')}}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{url('/')}}/css/fl-bigmug-line.css">

  <link rel="stylesheet" href="{{url('/')}}/css/aos.css">

  <link rel="stylesheet" href="{{url('/')}}/css/style.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="{{url('/home')}}" class="text-black h2 mb-0">Carker<strong>ID</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{url('/home')}}">Home</a></li>
                <li class="has-children">
                  <a href="category.html">Category</a>
                  <ul class="dropdown">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Part Time</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Internship</a></li>
                    <li><a href="#">Termporary</a></li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <!-- Untuk Logout -->
                <?php if (Session::get('login') == true) {
                  ?>
                  <li><a href="{{url('/logout')}}"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Logout</span></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">My CV</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>mycv</span></p>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">

            <!------------------------------------------------------------>
            <?php if (Session::get('cvstat') == false) {
              ?>
              <!-- Form-->
              <form action="{{url('/cvpost')}}" method="get" class="p-5 bg-white">
                @csrf
                <!-- Data Akademik-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Data Akademik</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="akademik" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <!-- Data Akademik-->
                <!-- Organisasi-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Riwayat Organisasi</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="organisasi" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <!-- Organisasi-->
                <!-- Kemampuan-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Deskripsi Kemampuan</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="kemampuan" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <!-- Kemampuan-->
                <!-- Hidden-->
                <input type="hidden" name="iduser" value="<?php echo Session::get('id'); ?>">
                <input type="hidden" name="nama" value="<?php echo Session::get('nama'); ?>">
                <!-- Hidden-->
                <!-- Kodingan Dibawah untuk mengecek apabila akses sebagai admin maka bisa post a job-->
                <?php if (Session::get('akses') == 'user') {
                    ?>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Save" class="btn btn-primary  py-2 px-5">
                    </div>
                  </div>
                <?php } ?>
                <!-- Akhir kodingan -->
              </form>
              <!-- Akhir Form-->
            <?php } ?>
            <!------------------------------------------------------------>

            <!------------------------------------------------------------>
            <?php if (Session::get('cvstat') == true) {
              ?>
              @foreach($cv as $c)
              <!-- Form-->
              <form action="{{url('/cvpost')}}" method="get" class="p-5 bg-white">
                @csrf
                <!-- Data Akademik-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Data Akademik</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="akademik" class="form-control" id="" cols="30" rows="5">{{$c->data_akademik}}</textarea>
                  </div>
                </div>
                <!-- Data Akademik-->
                <!-- Organisasi-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Riwayat Organisasi</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="organisasi" class="form-control" id="" cols="30" rows="5">{{$c->organisasi}}</textarea>
                  </div>
                </div>
                <!-- Organisasi-->
                <!-- Kemampuan-->
                <div class="row form-group">
                  <div class="col-md-12">
                    <h3>Deskripsi Kemampuan</h3>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="kemampuan" class="form-control" id="" cols="30" rows="5">{{$c->kemampuan}}</textarea>
                  </div>
                </div>
                <!-- Kemampuan-->
                <!-- Hidden-->
                <input type="hidden" name="iduser" value="<?php echo Session::get('id'); ?>">
                <input type="hidden" name="nama" value="<?php echo Session::get('nama'); ?>">
                <!-- Hidden-->
                <!-- Kodingan Dibawah untuk mengecek apabila akses sebagai admin maka bisa post a job-->
                <?php if (Session::get('akses') == 'user') {
                    ?>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Save" class="btn btn-primary  py-2 px-5">
                    </div>
                  </div>
                <?php } ?>
                <!-- Akhir kodingan -->
              </form>
              <!-- Akhir Form-->
              @endforeach
            <?php } ?>

            <!------------------------------------------------------------>

          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Your Info</h3>
              <p class="mb-0 font-weight-bold">Nama</p>
              <p class="mb-4"><?php echo Session::get('nama'); ?></p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#"><?php echo Session::get('notelp'); ?></a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><?php echo Session::get('email'); ?></a></p>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>


        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3 months?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register? <span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

            </div>
          </div>
        </div>

      </div>
    </div>




    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Subscribe Newsletter</h2>
          </div>
        </div>
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="Enter Your Email">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">
          </div>
        </form>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">


        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Find Jobs</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Search Jobs</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Employer Account</a></li>
                  <li><a href="#">Clients</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Find Candidates</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Archives</h3>
                <ul class="list-unstyled">
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">February 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                  <li><a href="#">April 2018</a></li>
                  <li><a href="#">May 2018</a></li>
                  <li><a href="#">June 2918</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                New York - 2398 10 Hadson Carl Street
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +1 232 305 3930
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                info@yourdomain.com
              </li>
            </ul>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> All Rights Reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{url('/')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{url('/')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{url('/')}}/js/jquery-ui.js"></script>
  <script src="{{url('/')}}/js/popper.min.js"></script>
  <script src="{{url('/')}}/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/js/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/js/jquery.stellar.min.js"></script>
  <script src="{{url('/')}}/js/jquery.countdown.min.js"></script>
  <script src="{{url('/')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{url('/')}}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{url('/')}}/js/aos.js"></script>


  <script src="{{url('/')}}/js/main.js"></script>

</body>

</html>