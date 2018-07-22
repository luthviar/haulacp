@extends('layouts.master')
@section('content')
<section id="intro">

  <div class="intro-content">
    <h2>Pesan dan buat <u>mainan</u><br>edukatif Anda di sini!</h2>
    <div>
      <a href="#about" class="btn-get-started scrollto">Lihat Selanjutnya</a>
      <a href="#portfolio" class="btn-projects scrollto">Produk Haula</a>
    </div>
  </div>

  <div id="intro-carousel" class="owl-carousel" >
    <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
  </div>

</section><!-- #intro -->

<main id="main">

  <!--==========================
    About Section
  ============================-->
  <section id="about" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2>Profil Perusahaan</h2>
          <h3>Mitra Anda dalam mendidik anak usia dini, dan berwirausaha.</h3>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i>Haula Toys berada di bawah PT. Haula Sejahtera, merupakan perusahaan ternama dalam mengembangkan produk mainan edukasi untuk anak - anak.</li>
            <li><i class="ion-android-checkmark-circle"></i> Telah berpengalaman dalam memproduksi mainan anak - anak, didirikan tahun 1997 di Jakarta Utara.</li>
            <li><i class="ion-android-checkmark-circle"></i>  Pendiri Haula Toys adalah Ummu Masmu’ah beseta Sholahudin Fuadi. Haula Toys terus mengembangkan sayap dan telah terlibat dalam berbagai proyek Pemerintah maupun swasta.</li>
            <li><i class="ion-android-checkmark-circle"></i>Produk Haula Toys antara lain permainan edukasi kayu dan non kayu, alat peraga TK (Standar International), alat terapi autis dan kebutuhan khusus, aneka VCD pendidikan, aneka software pendidikan, pembuatan playground dan sarana outbound, menerima ide pembuatan mainan kayu, melayani proyek pengadaan alat peraga, dan lain - lain.</li>
            <li><i class="ion-android-checkmark-circle"></i><strong>100% BUATAN LOKAL</strong>
            Haula Toys yakin produk mainan edukasi lokal dapat bersaing secara global dari segi kualitas maupun harga</li>
          <li><i class="ion-android-checkmark-circle"></i><strong>100% ORIGINAL</strong>
          Haula Toys menjamin bahwa produk yang terdaftar adalah 100% original buatan produsen mainan lokal di seluruh Indonesia.
          </li>
          <li><i class="ion-android-checkmark-circle"></i><strong>RESPON CEPAT</strong>
            Haula Toys akan merespon dengan cepat atas segala pertanyaan maupun orderan Anda.
          </ul>

        </div>
      </div>

    </div>
  </section><!-- #about -->

  <!--==========================
    Services Section
  ============================-->
  <section id="services">
    <div class="container">
      <div class="section-header">
        <h2>Layanan Kami</h2>
        <p>Berikut ini berbagai layanan dari produksi haula toys untuk Anda.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="fa fa-star"></i></div>
            <h4 class="title"><a href="">Permainan edukasi kayu dan non kayu</a></h4>
            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p> -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInRight">
            <div class="icon"><i class="fa fa-sun-o"></i></div>
            <h4 class="title"><a href="">Alat peraga TK standar internasional</a></h4>
            <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p> -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-picture-o"></i></div>
            <h4 class="title"><a href="">Alat terapi autis &amp; kebutuhan khusus</a></h4>
            <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p> -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-soccer-ball-o"></i></div>
            <h4 class="title"><a href="">Aktifitas edukatif</a></h4>
            <p class="description">Tempat pojok bermain sambil belajar,
              Menerima kunjungan sekolah membuat kreatifitas,
              Training Paud / Kewirausahaan,
              Terapi dan konsultasi Paud,
              Seminar bisnis dan pendidikan</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-puzzle-piece"></i></div>
            <h4 class="title"><a href="">Menerima proyek pengadaan alat peraga</a></h4>
            <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p> -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-rocket"></i></div>
            <h4 class="title"><a href="">Menerima ide pembuatan kayu</a></h4>
           <!--  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p> -->
          </div>
        </div>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
    Clients Section
  ============================-->
  <section id="clients" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Pelanggan &amp; Mitra</h2>
        <p>Selama sekitar 20 tahun haula toys telah melayani berbagai pelanggan di Indonesia, baik itu melayani pemerintah ataupun swasta.</p>
      </div>

      <div class="owl-carousel clients-carousel">
        <img src="img/clients/client-1.png" alt="">
        <img src="img/clients/client-2.png" alt="">
        <img src="img/clients/client-3.png" alt="">
        <img src="img/clients/client-4.png" alt="">
        <img src="img/clients/client-5.png" alt="">
        <img src="img/clients/client-6.png" alt="">
        <img src="img/clients/client-7.png" alt="">
        <img src="img/clients/client-8.png" alt="">
      </div>

    </div>
  </section><!-- #clients -->

  <!--==========================
    Our Portfolio Section
  ============================-->
  <section id="portfolio" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Portofolio Haula Toys</h2>
        <p>Berikut ini berbagai hasil karya yang kami buat selama melayani berbagai pelanggan dan mitra selama 20 tahun ini.</p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
              <img src="img/portfolio/1.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#1</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/2.jpg" class="portfolio-popup">
              <img src="img/portfolio/2.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#2</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/3.jpg" class="portfolio-popup">
              <img src="img/portfolio/3.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#3</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/4.jpg" class="portfolio-popup">
              <img src="img/portfolio/4.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#4</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/5.jpg" class="portfolio-popup">
              <img src="img/portfolio/5.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#5</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/6.jpg" class="portfolio-popup">
              <img src="img/portfolio/6.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#6</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/7.jpg" class="portfolio-popup">
              <img src="img/portfolio/7.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#7</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/8.jpg" class="portfolio-popup">
              <img src="img/portfolio/8.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">#8</h2></div>
              </div>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #portfolio -->

  <!--==========================
    Testimonials Section
  ============================-->
  <section id="testimonials" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Testimoni</h2>
        <p>Apa kata mereka tentang Haula Toys?</p>
      </div>
      <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              “Kami memasarakan Haula Toys dengan ribuan jenis  mainan edukatif   yang terbuat dari kayu dan dipasarkan ke berbagai sekolah, lembaga Pendidikan Anak Usia Dini (PAUD), TK maupun langsung ke masyarakat umum. Selain itu Haula Toys juga dipercaya untuk memenuhi pesanan beberapa instansi pemerintah seperti dinas pendidikan dan dinas kesehatan, baik di tingkat pusat maupun di daerah”
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Ida Nyoman Heru Siswono</h3>
            <h4>Direktur Utama PT. Edukasi Budaya Kreatif</h4>
          </div>

         <!--  <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div> -->

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Bisnis Mainan Edukasi, Omzetnya Tak Main-Main Hingga Miliaran (<a href="https://economy.okezone.com/read/2015/04/16/320/1135231/bisnis-mainan-edukasi-omzetnya-tak-main-main-hingga-miliaran">source</a>)
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>News</h3>
            <h4>Okezone.com</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Haula Toys, Mainan Edukatif Yang Aman Berbahan Dasar Kayu (<a href="https://www.depoknews.id/haula-toys-mainan-edukatif-yang-aman-berbahan-dasar-kayu/">source</a>)
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>News</h3>
            <h4>depoknews.id</h4>
          </div>

      </div>

    </div>
  </section><!-- #testimonials -->

  <!--==========================
    Call To Action Section
  ============================-->
  <section id="call-to-action" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Berminat untuk pesan?</h3>
          <p class="cta-text">Pesan sekarang melalui website ini.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a href="#contact" class="cta-btn align-middle scrollto">Request for Order</a>
          <!-- <a class="cta-btn align-middle" href="#">Call To Action</a> -->
        </div>
      </div>

    </div>
  </section><!-- #call-to-action -->

  <!--==========================
    Our Team Section
  ============================-->
 <!--  <section id="team" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <div class="details">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <div class="details">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <div class="details">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <div class="details">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> --><!-- #team -->

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Hubungi Kami</h2>
        <p>Silahkan mengisi formulir pada form di bawah ini untuk mengajukan pemesanan atau hal apapun kepada kami Haula Toys. Kami akan segera merespon dengan cepat keinginan dan kebutuhan Anda. Atau Anda dapat menghubungi kami melalui contact person yang ada di bawah ini.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Alamat</h3>
            <address><a target="_blank" href="https://goo.gl/maps/Ae12L1PLwBE2">JL. Bekasi Timur Raya Rawa Bunga, Jatinegara - Jakarta Timur
            (seberang stasiun jatinegara)</a></address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+622185913302">021-85913302</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:marketing.haulatoys@gmail.com">marketing.haulatoys@gmail.com</a></p>
          </div>
        </div>

      </div>
    </div>

    <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->

    <div class="container">
       <div class="form">
         <div id="sendmessage">Your message has been sent. Thank you!</div>
         <div id="errormessage"></div>
         <form role="form" method="POST" action="contact/submit" >
           {{ csrf_field() }}
           <div class="form-row">
             <div class="form-group col-md-3">
               <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
               <div class="validation"></div>
             </div>

             <div class="form-group col-md-3">
               <input type="email" class="form-control" name="email" id="email" placeholder="Email*" data-rule="email" data-msg="Please enter a valid email" required />
               <div class="validation"></div>
             </div>

           <div class="form-group col-md-3">
             <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal Instansi*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
             <div class="validation"></div>
           </div>

           <div class="form-group col-md-3">
             <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor HP*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
             <div class="validation"></div>
           </div>
         </div>

           <div class="form-group">
             <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
             <div class="validation"></div>
           </div>

           <div class="form-group">
             <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Isi Pesan*" required></textarea>
             <div class="validation"></div>
           </div>
           <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
         </form>
       </div>

     </div>
   </section><!-- #contact -->

</main>
@stop
