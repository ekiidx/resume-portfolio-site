<?php 
include('header.php'); ?>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-xl-3 sidebar"> <?php

                include('menu.php'); ?>
                
            </div>

            <div class="main col-lg-10 col-xl-9" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" tabindex="0">

                <div class="theme-selector">
                    <ul>
                        <li class="dark"><a href="?bg=dark"></a></li>
                        <li class="light"><a href="?bg=light"></a></li>
                        <li class="orange"><a href="?bg=orange"></a></li>
                        <li class="green"><a href="?bg=green"></a></li>
                    </ul>
                </div>


				<div class="container">
					
					<!-- section title -->
					<h2 class="section-title font-black text-uppercase">ServicePRO</h2>

					<ul class="list-inline portfolio-categories mt-4 mb-0">
						<li class="list-inline-item"><a href="#">Graphic Design</a></li>
						<li class="list-inline-item"><a href="#">Full Stack</a></li>
					</ul>

					<ul class="list-inline portfolio-info mb-0 mt-4">
						<li class="list-inline-item"><strong>Year:</strong>2020</li>
						<li class="list-inline-item"><strong>Client:</strong>ServicePRO</li>
						<li class="list-inline-item"><strong>Website:</strong><a href="https://vuedesign.co/portfolio/servicepro" target="_blank">https://vuedesign.co/portfolio/servicepro</a></li>
					</ul>

					<div class="spacer" data-height="40"></div>
					
					<img src="assets/img/service-pro-ad.jpg" alt="">

					<div class="portfolio-content my-5">
						<p>This project was a re-brand and rebuild of a website for a construction company based out of Parma, Ohio. The website was designed and built from the ground up, including re-branding of the logo and other promotional materials.</p>

						<p>The client was looking for a way to promote his business along with adding a newsletter posting capability. The client also needed a way for employees to login and update work schedules, and have the ability for requesting time off.</p>

					</div>

					<!--<ul class="social-share list-inline mb-0">
						<li class="list-inline-item share-text">Share:</li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>-->

				</div>
			</div>
		</div>
	</div>

<?php include('footer.php');