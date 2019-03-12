@extends('layouts.rh-about')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block">
                @if ($photos)
                    @foreach ($photos as $photo)
                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('images/' . $photo->file) }}" alt="">
                    @endforeach
                @endif

        </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">


            @if ($ab)

            @foreach($ab as $abc)

            <h1 class="mb-0">{{$abc->fname}}
                <span class="text-primary">{{$abc->lname}}</span>
            </h1>
            <div class="subheading mb-5">{{$abc->address}}
                <a href="mailto:name@email.com">{{$abc->email}}</a>
            </div>
            <p class="lead mb-5">{{$abc->abinfo}}</p>
        @endforeach
            @endif


            <div class="social-icons">
                <a href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                </a>
                <a href="#">
                    <i class="fa fa-github" aria-hidden="true"></i>

                </a>
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>

                </a>
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>

                </a>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        @if ($exps)

        @foreach ($exps as $exp)
        <div class="my-auto">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">{{$exp->des}}</h3>
                    <div class="subheading mb-3">{{$exp->sh}}</div>
                    <p>{{$exp->ex_info}}</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">{{$exp->period}}</span>
                </div>
            </div>

        </div>

            @endforeach
        @endif

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>
        @if ($edus)
            @foreach ($edus as $edu)

                    <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <div class="resume-content mr-auto">
                            <h3 class="mb-0">{{$edu->uni}}</h3>
                            <div class="subheading mb-3">{{$edu->degree}}</div>
                            <div>{{$edu->sub}}</div>
                            <p>GPA: {{$edu->cgpa}}</p>
                        </div>
                        <div class="resume-date text-md-right">
                            <span class="text-primary">{{$edu->period}}</span>
                        </div>
                    </div>

                    @endforeach

        @endif



        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                    <i class="fa fa-html5" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-css3" aria-hidden="true"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-linux" aria-hidden="true"></i>

                </li>
                <li class="list-inline-item">
                    <i class="fa fa-drupal" aria-hidden="true"></i>

                </li>
                <li class="list-inline-item">
                    <i class="fa fa-android" aria-hidden="true"></i>

                <li class="list-inline-item">
                    <i class="fa fa-wordpress" aria-hidden="true"></i>

                </li>

            </ul>

            <div class="subheading mb-3">Workflow</div>

            @if ($skills)
                @foreach ($skills as $skill)
                    <ul class="fa-ul mb-0">
                        <li>
                            <i class="fa-li fa fa-check"></i>
                            {{$skill->flow}}</li>

                    </ul>
                @endforeach
            @endif

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
            <h2 class="mb-5">Interests</h2>
            
            @if ($inters)
                @foreach ($inters as $inter)
                    <p>{{$inter->inter_des}}</p>
                @endforeach
            @endif

            
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            @if ($awards)
                @foreach ($awards as $award)
                    <ul class="fa-ul mb-0">
                        <li>
                            <i class="fa-li fa fa-trophy text-warning"></i>
                            {{$award->award_name}}</li>

                    </ul>
                @endforeach
            @endif

        </div>
    </section>
    </div>
@stop
