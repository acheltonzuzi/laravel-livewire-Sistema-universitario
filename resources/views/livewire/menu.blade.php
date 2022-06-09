<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.jpg" alt="sem imagem"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a {{-- class="active" --}} href="/home">Início</a></li>
              <li><a href="/verMonografia">Monografias</a></li>
              <li><a href="/verTemas">Temas Sugeridos</a></li>
              <li><a href="/verActividades">Actividades</a></li>
              @if (Auth()->user()->perfil=="Admin")
              <li ><a href="/crud">Painel Admininstrativo</a></li>
                  
              @endif
              @if (Auth()->user()->perfil=="Professor")
              <li ><a href="/temas">Painel Admininstrativo</a></li>
                  
              @endif
    
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
    
            <x-jet-dropdown-link href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Sair') }}
            </x-jet-dropdown-link>
        </form>
    
        </div>
      </header><!-- End Header -->
</div>
