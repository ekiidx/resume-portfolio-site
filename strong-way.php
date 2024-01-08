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
					<h2 class="section-title font-black text-uppercase">Strong Way</h2>

					<ul class="list-inline portfolio-categories mt-4 mb-0">
						<li class="list-inline-item"><a href="#">Full Stack</a></li>
						<li class="list-inline-item"><a href="#">Graphic Design</a></li>
						<li class="list-inline-item"><a href="#">Figma</a></li>
					</ul>

					<ul class="list-inline portfolio-info mb-0 mt-4">
						<li class="list-inline-item"><strong>Year:</strong>2021</li>
						<li class="list-inline-item"><strong>Client:</strong>Strong Way</li>
						<li class="list-inline-item"><strong>Website:</strong><a href="https://vuedesign.co/portfolio/strongway" target="_blank">https://vuedesign.co/portfolio/strongway</a></li>
					</ul>

					<div class="spacer" data-height="40"></div>
					
					<img src="assets/img/strong-way-ad.jpg" alt="">

					<div class="portfolio-content my-5">
						<p>Strong Way is a gym by women, for women located near Columbus, Ohio. Strong Way originally started as a way for women to meet up digitally during the recent pandemic.</p>

						<p>The client needed a way to schedule and promote classes in a variety of different times, and in different categories. I decided to build them an interactive menu that would allow for easy updating. The client also requested a re-brand of the company including the logo. The website was built in collaboration using Figma as a project management tool.</p>

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