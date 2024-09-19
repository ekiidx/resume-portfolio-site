@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <section id="home" class="hero">
        <div class="container">
            <h1><a href="#" class="typewriter" data-period="6000" data-type='[ "Hello_" ]'><span class="wrap"></span></a></h1>
            
            <p>I'm an experienced web developer located in Cleveland, Ohio. I like to think about websites and how to build them. Professionally skilled in Adobe Suite, Figma, HTML, CSS, PHP, C#, JavaScript, .NET, WordPress, Laravel, and Docker.</p>
            <a href="#projects" class="btn circle-btn">Projects</a>
            <a href="erik-todd-resume.pdf" download class="btn circle-btn btn-alt-light">Resume</a>

            <div class="scroll-down">
                <a href="#services" class="mouse-wrapper"><span class="mouse"><span class="wheel"></span></span></a>
            </div>

        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
        
            <h2 class="text-uppercase">Skills</h2>

            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-12 col-sm-9">

                    @foreach ($tags as $tag)
                        <a href="/tags/{{ $tag->slug }}"><span class="btn circle-btn">{{ $tag->name }}</span></a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <h2 class="text-uppercase">Experience</h2>


            @foreach ($experiences as $experience)
                <div class="item">
                    <div class="row">
                        <div class="col-3">
                            <span class="date">{{ $experience->timeline }}</span>
                        </div>
                        <div class="col-9">
                            <!-- <img class="experience-logo wtaa-logo" src="assets/img/wtaa-logo.webp"> -->
                            <h4 class="title">{{ $experience->name }}</h4>
                            <p class="subtitle">{{ $experience->description }}</p>
                        
                            <p>{{ $experience->content }}</p>

                            @foreach ($experience->tags as $tag )
                                <a class="btn circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section id="education">
        <div class="container">   
            <h2 class="text-uppercase">Education</h2>

            @foreach ($schools as $school)
                <div class="item">
                    <div class="row">
                        <div class="col-3">
                            <span class="date">{{ $school->timeline }}</span>
                        </div>
                        <div class="col-9">
                            <!-- <img class="experience-logo wtaa-logo" src="assets/img/wtaa-logo.webp"> -->
                            <h4 class="title">{{ $school->name }}</h4>
                            <p class="subtitle">{{ $school->description }}</p>
                        
                            <p>{{ $school->content }}</p>

                            @foreach ($school->tags as $tag )
                                <a class="btn circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section id="projects">
        <div class="container">
            <!-- section title -->
            <div class="d-flex align-items-start justify-content-between">
                <h2 class="section-title font-black text-uppercase">Projects</h2>
                <a class="circle-btn btn-all-projects" href="/projects">All Projects ({{ $all_projects->count() }})</a>
            </div>

            @foreach ($projects as $project)
                <div class="item">
                    <div class="row">
                        <div class="col-3 project-img">
                            <a href="/projects/{{ $project->slug }}">
                                <img src="/assets/img/{{ $project->img }}" alt="">
                            </a>
                        </div>
                        <div class="col-9">
                            <a href="/projects/{{ $project->slug }}">
                                <h4 class="title">{{ $project->name }}</h4>
                            </a>
                            <p class="subtitle">{{ $project->description }}</p>
                            <p>{{ $project->excerpt }}</p>
                            
                            <div>
                                @foreach ($project->tags as $tag)    
                                    <a class="btn circle-btn" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section id="contact">
        <div class="container">
            
            <h2 class="text-uppercase">Contact</h2>

            <div class="row contact-items">

                <div class="col-6 col-md-3 item linkedin">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="fill" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                        <h4 class="bold">LinkedIn</h4>
                        <p><a href="https://www.linkedin.com/in/erik-todd">linkedin.com/in/erik-todd</a></p>
                    </div>
                </div>

                <div class="col-6 col-md-3 item github">
                    <div class="text-center">
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
                        <h4 class="bold">Github</h4>
                        <p><a href="https://github.com/ekiidx">github.com/ekiidx</a></p>
                    </div>
                </div>
            
                <div class="col-6 col-md-3 item email">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M11.021,10.591l-2.591-2.591,7.164-.006-2.597,2.597c-.527,.527-1.448,.527-1.976,0Zm12.979,1.409c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-5.007-3.007c0-.458-.111-.887-.295-1.276l.009-.009-.032-.032c-.293-.593-.772-1.073-1.365-1.365l-.017-.017-.005,.005c-.394-.19-.83-.306-1.296-.306l-7.992,.007c-.458,0-.887,.111-1.275,.295h-.001l-.004,.003c-1.013,.482-1.72,1.508-1.72,2.702v8l13.993-.008v-8Zm-6.984,4.007c-.907,0-1.761-.354-2.402-.995l-2.606-2.607v5.601l9.993-.006v-5.572l-2.583,2.583c-.641,.642-1.494,.995-2.401,.995Z"/></svg>
                        <h4 class="bold">Email</h4>
                        <p>hello@eriktodd.me</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 item location">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M19.071,2.936A10,10,0,1,0,4.937,17.085L12,23.994l7.071-6.917a10,10,0,0,0,0-14.141ZM17,14H7V9.409a2.513,2.513,0,0,1,.983-1.986l2.5-1.91a2.507,2.507,0,0,1,3.035,0l2.5,1.91A2.515,2.515,0,0,1,17,9.409Zm-2.2-4.987a.5.5,0,0,1,.2.4V12H13V10H11v2H9V9.409a.5.5,0,0,1,.2-.4L11.7,7.1a.5.5,0,0,1,.608,0Z"/></svg>
                        <h4 class="bold">Location</h4>
                        <p>Cleveland, Ohio</p>
                    </div>
                </div>
            </div>   

            <form id="contact-form" class="contact-form" method="post" action="/contact/submit">
                @csrf 
                <div class="messages"></div>
                
                <div class="row">
                    <div class="column col-md-4">
                        <!-- Name input -->
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
                           @error('InputName') {{ $message }} @enderror
                            {{-- <div class="help-block with-errors"></div> --}}
                        </div>
                    </div>
                    
                    <div class="column col-md-4" style="margin-bottom: 1.5rem;">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required" data-error="Email is required.">
                            {{-- <div class="help-block with-errors"></div> --}}
                        </div>
                    </div>

                    <div class="column col-md-4" style="margin-bottom: 1.5rem;">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject" required="required" data-error="Subject is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            
                    <div class="column col-md-12" style="margin-bottom: 1rem;">
                        <!-- Message textarea -->
                        <div class="form-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <button type="submit" name="submit" id="submit" class="btn circle-btn">Submit</button>

            </form>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div id="demo"></div>
                <button  onclick="getData()" name="demo-button" id="demo-button" class="btn circle-btn">Demo</button>
         
                <meta name="csrf-token" content="{{ csrf_token() }}">

        </div>
    </section>
          
@endsection

@section('scripts')
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/ajax.js"></script>
@endsection