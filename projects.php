<?php
include('header.php'); ?>

<style>
    .projects-table {
        width: 100%;
        text-align: left:
    }
    .projects-table th {
        padding: 0.75rem;
    }
</style>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-2 sidebar">

                    <header>
                        <a href="/"><img src="assets/img/erik-todd.jpg" alt="" class="circle profile-photo"></a>
                        <a href="/"><span class="profile-name text-uppercase">Erik Todd</span></a>

                        <nav>
                            <ul class="scrollspy">
                                <li class="active text-uppercase"><a href="/">Home</a></li>
                                <li class="text-uppercase"><a href="/index.php#skills">Skills</a></li>
                                <li class="text-uppercase"><a href="/index.php#experience">Experience</a></li>
                                <li class="text-uppercase"><a href="/projects.php">Projects</a></li>
                                <li class="text-uppercase"><a href="/index.php#contact">Contact</a></li>
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

                <div class="col-10 main">

                    <div class="theme-selector">
                        <ul>
                            <li class="dark"><a href="?bg=dark"></a></li>
                            <li class="light"><a href="?bg=light"></a></li>
                            <li class="orange"><a href="?bg=orange"></a></li>
                            <li class="green"><a href="?bg=green"></a></li>
                        </ul>
                    </div>


                    <section>
                        <div class="container">
                            <h2 class="section-title font-black text-uppercase">Projects</h2>

                            <table class="projects-table">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Project</th>
                                        <th>Company</th>
                                        <th>Built with</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th>2023</th>
                                        <th>West Tech Alumni Website</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://westtechalumni.com">westtechalumni.com</a></th>
                                    </tr>

                                    <tr>
                                        <th>2023</th>
                                        <th>Pb-Cle.org</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://pb-cle.org">pb-cle.org</a></th>
                                    </tr>

                                    <tr>
                                        <th>2022</th>
                                        <th>The Monsters</th>
                                        <th>The Monsters, LLC</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://themonsters.art">themonsters.art</a></th>
                                    </tr>

                                    <tr>
                                        <th>2021</th>
                                        <th>Emory University Website</th>
                                        <th>Mango Bay</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://emory.edu">emory.edu</a></th>
                                    </tr>

                                    <tr>
                                        <th>2021</th>
                                        <th>Vue Design Website</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://vuedesign.co">vuedesign.co</a></th>
                                    </tr>

                                    <tr>
                                        <th>2021</th>
                                        <th>Strong Way</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://vuedesign.co/strongway">strongway.co</a></th>
                                    </tr>

                                    <tr>
                                        <th>2021</th>
                                        <th>ServicePRO</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://vuedesign.co/servicepro">service.pro</a></th>
                                    </tr>

                                    <tr>
                                        <th>2021</th>
                                        <th>Firestone Trace HOA</th>
                                        <th>Vue Design</th>
                                        <th>
                                            <span class="circle-btn">WordPress</span>
                                            <span class="circle-btn">Docker</span>
                                            <span class="circle-btn">Adobe Suite</span>
                                        </th>
                                        <th><a href="https://firestonetrace.com">firestonetrace.com</a></th>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </section>

    
                </div>
            </div>
        </div>

        <script src="assets/js/main.js"></script>
    </body>
</html>