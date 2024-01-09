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

				<section>
					
					<!-- section title -->
					<h2 class="section-title font-black text-uppercase">Strong Way</h2>

					<div style="margin-bottom: 1rem;">
						<a href="#"><span class="circle-btn">WordPress</span></a>
						<a href="#"><span class="circle-btn">Full Stack</span></a>
						<a href="#"><span class="circle-btn">Graphic Design</span></a>
						<a href="#"><span class="circle-btn">Project Management</span></a>
					</div>

					<div style="display: flex; margin-bottom: 4rem;">
						<div style="margin-right: 2rem;"><span style="font-weight: 800; text-transform: uppercase;">Year:</span> 2020-Present</div>
						<div style="margin-right: 2rem;"><span style="font-weight: 800; text-transform: uppercase:">Client:</span> Vue Design</div>
						<div style="margin-right: 2rem;"><span style="font-weight: 800; text-transform: uppercase;">Website:</span> <a href="https://vuedesign.co" target="_blank">vuedesign.co</a></div>
					</div>
					
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

				</section>
			</div>
		</div>
	</div>

<?php include('footer.php');