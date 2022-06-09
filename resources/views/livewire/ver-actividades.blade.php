<div>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @livewire('menu')



        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2 class="mb-10">Datas marcadas para defesas</h2>
                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Estudante
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tema
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sala
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hora
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data
                                </th>

                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actividade as $act)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $act->nome_estudante }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $act->tema }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $act->sala }}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $act->hora }}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $act->data }}

                                    </td>


                                   
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                </div>
                {{$actividade->links()}}

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @livewire('footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

</div>
