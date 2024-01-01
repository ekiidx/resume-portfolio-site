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
					<h2 class="section-title font-black text-uppercase">Firestone Trace</h2>

					<ul class="list-inline portfolio-categories mt-4 mb-0">
						<li class="list-inline-item"><a href="#">WordPress</a></li>
						<li class="list-inline-item"><a href="#">Full Stack</a></li>
						<li class="list-inline-item"><a href="#">Graphic Design</a></li>
					</ul>

					<ul class="list-inline portfolio-info mb-0 mt-4">
						<li class="list-inline-item"><strong>Year:</strong>2021-Present</li>
						<li class="list-inline-item"><strong>Client:</strong>Firestone Trace</li>
						<li class="list-inline-item"><strong>Website:</strong><a href="https://firestonetrace.com" target="_blank">https://firestonetrace.com</a></li>
					</ul>

					<div class="spacer" data-height="40"></div>
					
					<img src="images/firestone-trace-ad.jpg" alt="">

					<div class="portfolio-content my-5">
						<p>Firestone Trace is a residential community located near Bath OH. They have over 160 members in their HOA that needed a way to read and update local documents and newsletters. The client also requested permissions on certain pages for members that were not permitted to view or edit documents. Also requested, was the ability to make classified articles or announcements through a guest board that other users could interact with.</p>

						<p>The site gives all users of the Firestone Trace website the ability to login and update account information. Certain members are permitted access to backend admin section to make updates or edit documents. The main admin has the ability to create and remove users. The system can handle password reset automatically through email verification.</p>
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