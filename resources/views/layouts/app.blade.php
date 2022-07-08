<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Travel</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
</head>

<body>


    <main>
        {{ $slot }}
    </main>


    {{-- SCRIPT --}}
    @livewireScripts
    {{-- Sweet alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/4264742291.js" crossorigin="anonymous"></script>

    <script>
        @if (session('success'))
            Swal.fire(
                "Sucess",
                "{{ session('success') }}",
                "success"
            )
        @endif
        @if (session('failed'))
            Swal.fire(
                "Oops",
                "{{ session('failed') }}",
                "error"
            )
        @endif
    </script>
</body>

</html>
