<section class="headings">
		<div class="text-heading text-center">
			<div class="container" style="margin-top:-40px;">
				<h1>Bantuan</h1>
				<h2><a href="index.html">Home </a> &nbsp;/&nbsp; Bantuan</h2>
			</div>
		</div>
	</section>
	<!-- END SECTION HEADINGS -->
	
    <!-- START SECTION HOW IT WORKS -->
    <section class="how-it-works">
        <div class="container">
            <div class="sec-title">
                <h2><span>Fitur</span> SIGOPPER</h2>
                <p>3 Fitur Unggulan Sistem Informasi Pusat Perbelanjaan</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-1">
                            <img src="images/map.png" alt="">
                            <h3> Pencarian</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Memudahkan anda untuk mencari dan menemukan pusat perbelanjaan yang ada disekitar anda</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-2">
                            <img src="images/contact.png" alt="">
                            <h3>Lokasi Pusat Perbelanjaan</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Anda dapat mengetahui lokasi dan alamat serta informasi tentang pasar melalui google map</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-3">
                            <img src="images/user.png" alt="">
                            <h3>Waktu Akses</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Menghemat waktu anda dalam mencari informasi pusat perbelanjaan kapanpun dan dimanapun</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION HOW IT WORKS -->

<!-- START SECTION FAQ -->
    <section class="faq service-details faq-text">
        <div class="container">
        <h2 class="mb-5">PERTANYAAN YANG SERING DIAJUKAN</h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 service-info">
                    <article class="faq"> 
                        <?php 
                        include'inc/koneksi.php';
                            $sqlFAQ=mysqli_query($koneksi,"SELECT * FROM faq");
                             while ($data = mysqli_fetch_array($sqlFAQ)){
                         ?>
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-1"><?php echo $data['pertanyaan'] ?></a>
                            </h4>
                                <div id="tab-1" class="panel-collapse collapse">
                                    <p>
                                        <?php echo $data['jawaban'] ?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    <?php } ?>
                    </article>
                </div>
                <div class="col-lg-6 col-md-12 faq-contact">
                    <h3>Didn't you find your answer contact us here</h3>
                    <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FAQ -->