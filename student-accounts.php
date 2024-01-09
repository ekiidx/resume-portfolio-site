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
					<h2 class="section-title font-black text-uppercase">Emory University</h2>

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
					
					<img src="assets/img/student-accounts-ad.jpg" alt="">

					<div class="portfolio-content my-5">
						<p>Emory University is a private research university located in Atlanta, Georgia. Founded in 1836, the school currently has 32,000+ administrative staff, and 15,000+ students.</p>

						<p>Emory University Student Accounts needed a website to help students and parents find information about their student cards and accounts. The website is separated into different sections that are specific to the needs of either students, or their parents. I was able to work with university staff to re-brand the website specifically in the style that was standardized by the university.</p>

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