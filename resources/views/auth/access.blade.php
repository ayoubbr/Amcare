<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Sécurisé | {{ config('app.name') }}</title>
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
            background-image: url('{{ asset('images/ambulance-bg.jpg') }}');
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
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
            font-size: 1.5rem;
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--secondary-color);
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .alert {
            padding: 0.75rem 1rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
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

        .secure-note {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: #777;
        }

        .secure-icon {
            margin-right: 0.5rem;
            color: var(--secondary-color);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            @php
                $imagePath = $settings->logo;
                $imageUrl = null;
                $defaultImageUrl = asset('assets/images/logo.png');

                if ($imagePath) {
                    if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                        $imageUrl = asset($imagePath);
                    } else {
                        $imageUrl = Storage::url($imagePath);
                    }
                }
            @endphp
            <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $settings->site_name ?? 'Amcare' }}">
        </div>

        <h1>Accès Sécurisé</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.verify.access') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="access_code">Code d'accès</label>
                <input type="password" id="access_code" name="access_code" required autofocus>
                @error('access_code')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn">Vérifier</button>
        </form>

        <div class="secure-note">
            <i class="fas fa-shield-alt secure-icon"></i>
            Accès réservé au personnel autorisé
        </div>
    </div>
</body>

</html>
