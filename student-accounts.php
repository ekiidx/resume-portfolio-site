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
					<h2 class="section-title font-black text-uppercase">Emory University</h2>

					<ul class="list-inline portfolio-categories mt-4 mb-0">
						<li class="list-inline-item"><a href="#">Full Stack</a></li>
						<li class="list-inline-item"><a href="#">Graphic Design</a></li>
						<li class="list-inline-item"><a href="#">Project Management</a></li>
					</ul>

					<ul class="list-inline portfolio-info mb-0 mt-4">
						<li class="list-inline-item"><strong>Year:</strong>2020</li>
						<li class="list-inline-item"><strong>Client:</strong>Emory University Student Accounts</li>
						<li class="list-inline-item"><strong>Website:</strong><a href="https://studentaccounts.emory.edu" target="_blank">https://studentaccounts.emory.edu</a></li>
					</ul>

					<div class="spacer" data-height="40"></div>
					
					<img src="images/student-accounts-ad.jpg" alt="">

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

				</div>
			</div>
		</div>
	</div>

<?php include('footer.php');