<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <style>
        :root {
            --primary-color: #e74c3c;
            --secondary-color: #34495e;
            --text-color: #333;
            --light-color: #f8f9fa;
            --border-color: #ddd;
            --error-color: #e74c3c;
            --success-color: #2ecc71;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('{{ asset('storage/admin/admin-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .container {
            width: 100%;
            max-width: 450px;
            padding: 2.5rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }

        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo img {
            max-width: 150px;
            height: auto;
        }

        h1 {
            font-size: 1.75rem;
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--secondary-color);
        }

        input {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
        }

        .input-icon {
            position: absolute;
            top: 2.5rem;
            right: 1rem;
            color: #aaa;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.85rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.2);
        }

        .btn:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(231, 76, 60, 0.3);
        }

        .btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(231, 76, 60, 0.2);
        }

        .alert {
            padding: 0.85rem 1rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .alert-danger {
            background-color: rgba(231, 76, 60, 0.1);
            border: 1px solid var(--error-color);
            color: var(--error-color);
        }

        .alert-success {
            background-color: rgba(46, 204, 113, 0.1);
            border: 1px solid var(--success-color);
            color: var(--success-color);
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .remember-me input {
            width: auto;
            margin-right: 0.5rem;
        }

        .secure-note {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: #777;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .secure-icon {
            margin-right: 0.5rem;
            color: var(--secondary-color);
        }

        .form-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
            font-size: 0.9rem;
            color: #777;
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ $settings->logo ? Storage::url($settings->logo) : Vite::asset('resources/assets/images/logo.png') }}"
                alt="{{ $settings->site_name ?? 'Amcare' }}">
        </div>

        <h1>Connexion Administrateur</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                <i class="fas fa-envelope input-icon"></i>
                @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <i class="fas fa-lock input-icon"></i>
                @error('password')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- <div class="remember-me">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Se souvenir de moi</label>
            </div> --}}

            <button type="submit" class="btn">
                <i class="fas fa-sign-in-alt mr-2"></i> Connexion
            </button>
        </form>

        <div class="secure-note">
            <i class="fas fa-shield-alt secure-icon"></i>
            Connexion sécurisée
        </div>

        <div class="form-footer">
            <p>{{ \App\Models\Setting::getSetting('site_name') ?? 'Amcare' }} &copy; {{ date('Y') }} - Tous droits
                réservés</p>
        </div>
    </div>

    <script>
        // Masquer les alertes après 5 secondes
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.5s';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            });
        }, 5000);
    </script>
</body>

</html>
