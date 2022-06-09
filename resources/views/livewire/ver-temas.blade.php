<div>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @livewire('menu')



        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Temas Propostos para Monografia</h2>
                
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($temas as $tema)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="assets/img/temas.jpg" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>{{$tema->categoria}}</h4>
                                </div>

                                <h3><a href="course-details.html"><span class="lowercase">{{$tema->tema}}</span></a></h3>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                        <span>{{$tema->user->name}}</span>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <strong>{{$tema->user->telefone}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    
                    @endforeach
                    {{$temas->links()}}

                    

                </div>

            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @livewire("footer")

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

</div>
