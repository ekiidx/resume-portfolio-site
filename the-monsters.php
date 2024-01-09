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
					<h2 class="section-title font-black text-uppercase">The Monsters</h2>

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
					
					<img src="assets/img/the-monsters-ad.jpg" alt="">

					<div class="portfolio-content my-5">

						<p>The Monsters are a visual series based out of Cleveland, Ohio. The colorful creatures come from the imagination of local visual, and street artist, Random. These weird, welcoming, and each totally unique monsters have a name, along with a whimsical story that needed to be told in an interactive way.</p>

						<p>The webshop was built with WordPress and WooCommerce, and was custom designed to facilitate automated drop shipping through Printful. The client is able to easily list and automate items in the store to help lower overhead costs by updating items, price, and shipping automatically.</p>

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