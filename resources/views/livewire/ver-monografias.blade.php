<div class="mx-2">
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
                <h2>Todas Monografias Já defendidas</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="flex w-full flex-wrap justify-start" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($monografias as $monografia)
                    <a href="{{route('download',$monografia->id)}}">
                        <div class="flex  flex-col justify-center text-center items-center w-20 mx-20 mb-10">
                            <img class="w-20" src="pdf.jpg" class="img-fluid" alt="...">
                            <strong class="flex flex-wrap">{{$monografia->nome}}</strong>
                        </div>
                    </a>
                    @endforeach
                    
                    
                    
                </div>
                
            </div>
        </section><!-- End Courses Section -->
        
    </main><!-- End #main -->
    {{ $monografias->links() }}

    <!-- ======= Footer ======= -->
    @livewire('footer')

    

</div>
