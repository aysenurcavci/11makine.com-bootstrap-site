<?php require 'header.php';?>

<head>
    <title>11 Makine | İletişim </title>
</head>

<div id="banner-area" class="banner-area" style="background-image:url(image/contact.jpg)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Bizimle İletişime Geçin</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">İletişim</li>
              </ol>
            </nav>
          </div>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    
    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Ofisimizi Ziyaret Edin</h4>
            <p>Çilek Mah. 63192. Sok V1 Blok No:10 <br>
              Akdeniz , Mersin/Turkiye</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>E-mail</h4>
            <a href="mailto:destek@11makine.com"><p>destek@11makine.com</p></a>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100 ">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Telefon</h4>
            <a href="tel://+905345696666"><p>+90 534-569-66-66</p></a>
          </div>
        </div>
      </div><!-- Col 3 end -->
    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.160580842283!2d34.66016170016196!3d36.83863005595031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f192dd8ce3f7%3A0x774dd0fdad4f485!2sV1%20Blok!5e0!3m2!1str!2str!4v1637933081633!5m2!1str!2str"
      width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title"><br>Bilgi ve İletişim için;</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        <form id="contact-form" action="#" method="post" role="form">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>İsim Soyisim</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Konu</label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Mesaj</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Mesaj Gönder</button>
          </div>
        </form>
      </div>
    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php require 'footer.php';?>
