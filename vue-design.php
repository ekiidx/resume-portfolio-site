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
					<h2 class="section-title font-black text-uppercase">Vue Design</h2>

					<ul class="list-inline portfolio-categories mt-4 mb-0">
						<li class="list-inline-item"><a href="#">WordPress</a></li>
						<li class="list-inline-item"><a href="#">Full Stack</a></li>
						<li class="list-inline-item"><a href="#">Graphic Design</a></li>
						<li class="list-inline-item"><a href="#">Project Management</a></li>
					</ul>

					<ul class="list-inline portfolio-info mb-0 mt-4">
						<li class="list-inline-item"><strong>Year:</strong>2020-Present</li>
						<li class="list-inline-item"><strong>Client:</strong>Vue Design</li>
						<li class="list-inline-item"><strong>Website:</strong><a href="https://vuedesign.co" target="_blank">https://vuedesign.co</a></li>
					</ul>

					<div class="spacer" data-height="40"></div>
					
					<img src="images/vue-design-ad.jpg" alt="">

					<div class="portfolio-content my-5">
						<p>A design agency located in Cleveland, Ohio, that is building awesome websites. Vue Design needed a website to promote and market their services. The site was built from the ground up, and the company needed a branding solution that matched the their culture and client-base.</p>

						<p>The website was built in WordPress, using WooCommerce as a way for clients to create accounts, sign in, check project details, and update if needed. Clients are also able to request additional services and pay bills easily through the dashboard. A blogging system was later integrated to help with SEO.</p>
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