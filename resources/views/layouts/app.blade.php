<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PWL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh; /* supaya tinggi body selalu penuh */
            display: flex;
            flex-direction: column; /* atur konten jadi vertikal */
        }
        main {
            flex: 1; /* biar main konten isi ruang kosong */
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- Konten Dinamis --}}
    <main class="container my-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
