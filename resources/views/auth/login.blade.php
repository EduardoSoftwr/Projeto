<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/d49ccb3aeb.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <x-guest-layout>
        <x-authentication-card>
            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                <div class="container">
                    <input id="signup_toggle" type="checkbox">
                    <form class="form">
                        <div class="form_front">
                            <img src="{{ asset('css/image/logo_conve.png') }}" />
                            <div class="form_details">Login</div>

                          
                            <x-input id="email" class="input" type="email" name="email" :value="old('email')" placeholder="email" required
                                autofocus autocomplete="username" />

                            <x-input id="password" class="input" type="password" name="password" placeholder="password" required
                                autocomplete="current-password" />

                            <div class="btn-space">

                                <x-button class="btn">
                                    {{ __('Log in') }}
                                </x-button>
                                @if (Route::has('password.request'))
                                    <div class="btn a">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('register') }}">
                                            {{ __('Cadastre-se') }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Back side of the form -->
                        <div class="form_back">
                            <!-- Add any content you want to display on the back side of the form here -->
                        </div>
                    </form>
                </div>

        </x-authentication-card>
    </x-guest-layout>

</body>

</html>