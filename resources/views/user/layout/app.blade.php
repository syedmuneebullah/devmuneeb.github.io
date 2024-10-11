
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>James - Web & App developer</title>
    <script src="assets/js/vendors/color-modes.js"></script>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <!-- Libs CSS -->
    @include('user.includes.styles')
    
</head>

<body class="home-page-2">
    
    <!-- Navbar -->
    @include('user.includes.header')
    

    <main>
        @yield('content')

    </main>
    <!-- prettier-ignore -->
    <!-- Footer -->
    
    @include('user.includes.footer')

    <!-- Libs JS -->
    @include('user.includes.scripts')
</body>

</html>