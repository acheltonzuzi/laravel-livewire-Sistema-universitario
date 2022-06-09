<x-guest-layout>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>

    <section class="login-content">
        <div class="logo">
            <h1 class="w-20"><a href="index.html"><img src="assets/img/ispi10.png" alt="sem imagem"></a></h1>
        </div>

        <div class="login-box">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ENTRAR</h3>
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="mt-4">
                    <div class="form-group btn-container mb-2">
                        <button style="background: #5fcf80; color:white" class="btn btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>ENTRAR</button>
                    </div>
                    

                   {{--  @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Já tem uma Conta?') }}
                        </a>
                    @endif --}}
                </div>


                {{-- <div class="flex items-center justify-end mt-4 flex-col">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div> --}}
            </form>
    </section>
    </div>

</x-guest-layout>
