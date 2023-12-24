<?php
include('header.php'); ?>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-xl-3 sidebar">

                <header>
                    <a href="/"><img src="assets/img/erik-todd.jpg" alt="" class="circle profile-photo"></a>
                    <a href="/"><span class="profile-name text-uppercase">Erik Todd</span></a>

                    <nav>
                        <ul id="navbar" role="tablist">
                            <li class="text-uppercase"><a href="/">Home</a></li>
                            <li class="text-uppercase"><a href="#skills">Skills</a></li>
                            <li class="text-uppercase"><a href="#experience">Experience</a></li>
                            <li class="text-uppercase"><a href="#projects">Projects</a></li>
                            <li class="text-uppercase"><a href="#contact">Contact</a></li>
                            <li class="text-uppercase"><a href="#resume">Resume</a></li>
                        </ul>
                    </nav>

                    <footer>
                        <ul class="social-icons">
                            <li class="social-icon">
                                <a href="https://linkedin.com/in/erik-todd">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="fill" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>

                            <li class="social-icon">
                                <a href="https://github.com/ekiidx">

                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98 96" style="enable-background:new 0 0 98 96;" xml:space="preserve">
                                        <style type="text/css">
                                            .st0{fill-rule:evenodd;clip-rule:evenodd;}
                                        </style>
                                        <path class="st0" d="M48.9,0C21.8,0,0,22,0,49.2C0,71,14,89.4,33.4,95.9c2.4,0.5,3.3-1.1,3.3-2.4c0-1.1-0.1-5.1-0.1-9.1
                                            c-13.6,2.9-16.4-5.9-16.4-5.9c-2.2-5.7-5.4-7.2-5.4-7.2c-4.4-3,0.3-3,0.3-3c4.9,0.3,7.5,5.1,7.5,5.1c4.4,7.5,11.4,5.4,14.2,4.1
                                            c0.4-3.2,1.7-5.4,3.1-6.6c-10.8-1.1-22.2-5.4-22.2-24.3c0-5.4,1.9-9.8,5-13.2c-0.5-1.2-2.2-6.3,0.5-13c0,0,4.1-1.3,13.4,5.1
                                            c4-1.1,8.1-1.6,12.2-1.6c4.1,0,8.3,0.6,12.2,1.6c9.3-6.4,13.4-5.1,13.4-5.1c2.7,6.8,1,11.8,0.5,13c3.2,3.4,5,7.8,5,13.2
                                            c0,18.9-11.4,23.1-22.3,24.3c1.8,1.5,3.3,4.5,3.3,9.1c0,6.6-0.1,11.9-0.1,13.5c0,1.3,0.9,2.9,3.3,2.4C83.6,89.4,97.6,71,97.6,49.2
                                            C97.7,22,75.8,0,48.9,0z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <span class="copyright">© <?php echo date('Y'); ?> Erik Todd</span>
                    </footer>
                </header>
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

                <section class="hero">
                    <div class="container">
                        <h1><a href="#" class="typewriter" data-period="6000" data-type='[ "Hello_" ]'><span class="wrap"></span></a></h1>
                        
                        <p>I'm an experienced web developer located in Cleveland, Ohio. I like to think about websites and how to build them. Professionally skilled in Adobe Suite, Figma, HTML, CSS, PHP, C#, JavaScript, .NET, WordPress, Laravel, and Docker.</p>
                        <a href="#works" class="btn btn-default btn-animation">Projects</a>
                        <a href="erik-todd-resume.pdf" download class="btn btn-alt-light btn-animation">Resume</a>

                        <div class="scroll-down">
				            <a href="#services" class="mouse-wrapper"><span class="mouse"><span class="wheel"></span></span></a>
			            </div>

                    </div>
                </section>

                <section id="skills" class="skills">
                    <div class="container">
                    
                        <h2 class="text-uppercase">Skills</h2>

                        <div class="row">
                            <div class="col-3">
                            </div>

                            <div class="col-9">
                
                                <span class="circle-btn">HTML</span>
                                <span class="circle-btn">CSS</span>
                                <span class="circle-btn">PHP</span>
                                <span class="circle-btn">JavaScript</span>
                                <span class="circle-btn">SQL</span>
                                <span class="circle-btn">Docker</span>
                                <span class="circle-btn">MySQL</span>
                                <span class="circle-btn">ASP.NET</span>
                                <span class="circle-btn">C#</span>
                                <span class="circle-btn">YAML</span>
                                <span class="circle-btn">Git</span>
                                <span class="circle-btn">AWS/EKS</span>
                                <span class="circle-btn">WordPress</span>
                                <span class="circle-btn">Laravel</span>
                                <span class="circle-btn">Adobe Suite</span>
                                <span class="circle-btn">Figma</span>

                            </div>
                        </div>
                    </div>
                </section>

                <section id="experience">
		            <div class="container">
                        <h2 class="text-uppercase">Experience</h2>

                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">Jul 2023 - Current</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo wtaa-logo" src="assets/img/wtaa-logo.webp"> -->
                                    <h4 class="title">West Tech Alumni Association</h4>
                                    <p class="subtitle">Web Developer, Project Manager</p>
                                
                                    <p>Managaged projects for company client base, using creative skills and design to create visually engaging websites. Duties included writing and maintaining code, updating and maintaining responsively built websites, and troubleshooting website issues.</p>

                                    <span class="circle-btn">WordPress</span>
                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">HTML</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">Mar 2022 - Nov 2022</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo ncm-logo" src="assets/img/ncm-logo.png"> -->
                                    <h4 class="title">North Coast Media</h4>
                                    <p class="subtitle">Web Developer</p>
                            
                                    <p>Tasks included writing and maintaining WordPress code, troubleshooting Kubernetes issues. updating and maintaining email designs, testing and debugging, collaborating with others,  staying up-to-date with new technologies.</p>

                                    <span class="circle-btn">WordPress</span>
                                    <span class="circle-btn">Docker</span>
                                    <span class="circle-btn">Adobe Suite</span>
                                    <span class="circle-btn">AWS/EKS</span>
                                    <span class="circle-btn">Git</span>
                                    <span class="circle-btn">Figma</span>
                                </div>
                            </div>
                        </div>
                            
                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">May 2021 - Mar 2022</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo vue-design-logo" src="assets/img/vue-logo-short.svg"> -->
                                    <h4 class="title">Vue Design</h4>
                                    <p class="subtitle">Full Stack Web Developer, Project Manager</p>
                            
                                    <p>Maintained client code, managed client relationships, testing, debugging, updating and maintaining websites, staying up-to-date with new WordPress issues. HTML and CSS redesigning for small businesses.</p>

                                    <span class="circle-btn">WordPress</span>
                                    <span class="circle-btn">PHP</span>
                                    <span class="circle-btn">Javascript</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">Jan 2020 - Apr 2021</span>
                                </div>
                                <div class="col-9"> 
                                    <!-- <img class="experience-logo mango-bay-logo" src="assets/img/mango-bay-logo.png"> -->
                                    <h4 class="title">Mango Bay</h4>
                                    <p class="subtitle">Lead Web Developer, Project Manager</p>
                            
                                    <p>Managaged projects for company client base, using creative skills and design to create visually engaging websites. Duties included writing and maintaining code, updating and maintaining responsively built websites, and troubleshooting website issues.</p>

                                    <span class="circle-btn">WordPress</span>
                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">HTML</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">Oct 2017 - Mar 2018</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo" src="assets/img/ellet-sign-logo.gif"> -->
                                    <h4 class="title">Ellet Sign</h4>
                                    <p class="subtitle">Graphic Designer</p>
                            
                                    <p>Created impactful visual designs that effectively communicated client messages and brand identities. Tasks included designing visually engaging and user-friendly visual designs, wireframes, concepts, and finals, collaborating with clients and team members.</p>

                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">HTML</span>
                                </div>
                            </div>
                        </div>
        
                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">Oct 2016 - Jan 2020</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo ff-design-logo" src="assets/img/ff-design-logo.svg"> -->
                                    <h4 class="title">FF Design</h4>
                                    <p class="subtitle">Web Developer</p>
                                    
                                    <p>Daily tasks included creating visually engaging, intuitive, and user-friendly websites that meet and exceed client expectations, while collaborating with cross-functional teams and staying current with emerging design trends and technologies.</p>

                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">PHP</span>
                                    <span class="circle-btn">CSS</span>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </section>

                <section id="education">
                    <div class="container">   
                        <h2 class="text-uppercase">Education</h2>
                            
                        <div class="item">
                            <div class="row">
                                <div class="col-3">
                                    <span class="date">2012 - 2016</span>
                                </div>
                                <div class="col-9">
                                    <!-- <img class="experience-logo" src="assets/img/uakron-logo.svg"> -->
                                    <h4 class="title">University of Akron</h4>
                                    <p>BA Studio & Fine Arts</p>
                                    <p>Minor Japanese</p>

                                    <span class="circle-btn">Adobe Suite</span>
                                    <span class="circle-btn">Figma</span>
                                    <span class="circle-btn">HTML</span>
                                    <span class="circle-btn">CSS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="projects">
                    <div class="container">
                        
                        <!-- section title -->
                        <h2 class="section-title font-black text-uppercase">Projects</h2>

                        <!-- portfolio filter (desktop) -->
                        <!--<ul class="portfolio-filter list-inline">
                            <li class="current list-inline-item" data-filter="*">Everything</li>
                            <li class="list-inline-item" data-filter=".creative">Creative</li>
                            <li class="list-inline-item" data-filter=".art">Art</li>
                            <li class="list-inline-item" data-filter=".design">Design</li>
                            <li class="list-inline-item" data-filter=".branding">Branding</li>
                        </ul>-->
                        
                        <!-- portfolio filter (mobile) -->
                        <!--<div class="pf-filter-wrapper">
                            <select class="portfolio-filter-mobile">
                                <option value="*">Everything</option>
                                <option value=".creative">Creative</option>
                                <option value=".art">Art</option>
                                <option value=".design">Design</option>
                                <option value=".branding">Branding</option>
                            </select>
                        </div>-->
                        
                         <?php

                            $projects = array(
                                'the-monsters' => array(
                                    'link' => '/the-monsters.php',
                                    'title' => 'The Monsters',
                                    'subtitle' => 'E-commerce Webshop',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/the-monsters-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'student-accounts' => array(
                                    'link' => '/student-accounts.php',
                                    'title' => 'Emory University',
                                    'subtitle' => 'University Student Services Website',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/student-accounts-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'vue-design' => array(
                                    'link' => '/vue-design.php',
                                    'title' => 'Vue Design',
                                    'subtitle' => 'E-commerce Webshop',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/vue-design-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'strong-way' => array(
                                    'link' => '/strong-way.php',
                                    'title' => 'Strong Way',
                                    'subtitle' => 'E-commerce Webshop',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/strong-way-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'service-pro' => array(
                                    'link' => '/service-pro.php',
                                    'title' => 'ServicePRO',
                                    'subtitle' => 'E-commerce Webshop',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/service-pro-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'firestone-trace' => array(
                                    'link' => '/firestone-trace.php',
                                    'title' => 'Firestone Trace',
                                    'subtitle' => 'HOA Website',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/firestone-trace-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                                'pb-cle' => array(
                                    'link' => '/pb-cle.php',
                                    'title' => 'Pb-Cle.org',
                                    'subtitle' => 'Music Event Website',
                                    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                                    'image' => 'assets/img/firestone-trace-ad.jpg',
                                    'alt' => '',
                                    'buttons' => array(
                                        'HTML',
                                        'PHP',
                                        'CSS'
                                    )
                                ),
                            );

                            /* foreach($projects as $project) { ?>
                                <!-- portfolio item -->
                                <div class="col-md-4 col-sm-6 grid-item art">
                                    <a href="<?php echo $project['link']; ?>">
                                        <div class="portfolio-item">
                                            <div class="details">
                                                <h4 class="title"><?php echo $project['title']; ?></h4>
                                                <span class="subtitle"><?php echo $project['subtitle']; ?></span>
                                            </div>
                                            <div class="thumb">
                                                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['alt']; ?>">
                                                <div class="mask"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div> <?php
                            } */ 

                        // <!-- more button -->
                        // <div class="load-more text-center mt-4">
                        //     <a href="javascript:" class="btn btn-default btn-animation"><i class="fas fa-spinner"></i> Load more</a>
                        //     <!-- numbered pagination (hidden for infinite scroll) -->
                        //     <ul class="portfolio-pagination list-inline d-none">
                        //         <li class="list-inline-item">1</li>
                        //         <li class="list-inline-item"><a href="works-2.html">2</a></li>
                        //     </ul>
                        // </div> 

                        foreach($projects as $project) { ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-3 project-img">
                                        <a href="<?php echo $project['link']; ?>">
                                            <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['alt']; ?>">
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <h4 class="title"><?php echo $project['title']; ?></h4>
                                        <p class="subtitle"><?php echo $project['subtitle']; ?></p>
                                        <p><?php echo $project['info']; ?></p>
                                        
                                        <div> <?php
                                            foreach ($project['buttons'] as $button) { ?>       
                                                <span class="circle-btn"><?php echo $button; ?></span> <?php
                                            }; ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <?php
                        } ?>
                    </div>
                </section>

                <section id="contact">
                    <div class="container">
                        
                        <h2 class="text-uppercase">Contact</h2>

                        <div class="row">
                        
                            <div class="col-md-4 item">
                                <div class="text-center">
                                    <span class="icon icon-location-pin simple"></span>
                                    <h4 class="bold">LinkedIn</h4>
                                    <p class="mb-0"><a href="https://www.linkedin.com/in/erik-todd">linkedin.com/in/erik-todd</a></p>
                                </div>
                            </div>

                            <div class="col-md-4 item">
                                <div class="text-center">
                                    <span class="icon icon-envelope-open simple"></span>
                                    <h4 class="bold">Email</h4>
                                    <p class="">hello@eriktodd.me</p>
                                </div>
                            </div>

                            <div class="col-md-4 item">
                                <div class="text-center">
                                    <span class="icon icon-location-pin simple"></span>
                                    <h4 class="bold">Location</h4>
                                    <p class="">Cleveland, Ohio</p>
                                </div>
                            </div>
                        </div>   

                        <form id="contact-form" class="contact-form" method="post" action="forms/contact.php">
                            
                            <div class="messages"></div>
                            
                            <div class="row">
                                <div class="column col-md-4">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="column col-md-4">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required" data-error="Email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="column col-md-4">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject" required="required" data-error="Subject is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                        
                                <div class="column col-md-12">
                                    <!-- Message textarea -->
                                    <div class="form-group">
                                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default btn-full btn-animation">Submit</button>

                        </form>

                    </div>
                </section>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>