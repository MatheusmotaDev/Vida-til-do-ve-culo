<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-primary">

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-9 col-xl-4">
                <img src="img/login/vuv.png" class="img-fluid" style="margin-left: 25px;" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="form-label">{{ __('Nome') }}</label>
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Legal ID (CPF ou CNPJ) -->
                    <div class="mt-4">
                        <label for="legal_id" class="form-label">{{ __('Insira seu CPF') }}</label>
                        <input id="legal_id" class="form-control" type="text" name="legal_id" :value="old('legal_id')" required />
                        @error('legal_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <label for="phone_number" class="form-label">{{ __('Número de telefone') }}</label>
                        <input id="phone_number" class="form-control" type="text" name="phone_number" :value="old('phone_number')" required placeholder="(ddd) 9xxxx-xxxx" />
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label">{{ __('Senha') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label">{{ __('Confirme sua senha') }}</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm hover:text-gray-900 text-white" href="{{ route('options') }}">
                     {{ __('Já é registrado?') }}
                     </a>

                        <button type="submit" class="btn btn-dark btn-lg ms-4">{{ __('Cadastrar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="scripts/register.js"></script>
</body>
</html>
