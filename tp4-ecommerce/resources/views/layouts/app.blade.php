<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Shopecart Cameroon')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">

    <!-- Police Google (optionnel) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

      <!-- Utilisation de Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('styles')
</head>
<body>

    <!-- Header commun -->
    @include('partials.header')

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer commun -->
    @include('partials.footer')

    <!-- Scripts du TP2 -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
     <script src="{{ asset('assets/js/header.js') }}"></script>
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/Blog.js') }}"></script>

    @stack('scripts')
</body>
</html>