<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }} - Travelend</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Custom css --}}
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <style>
        .switch input {
            display: none;
        }

        .switch {
            display: inline-block;
            width: 50px;
            height: 14px;
            margin: 5px;
            margin-left: 25px;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            position: relative;
        }

        .slider {
            position: absolute;
            top: 0px;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 20px;
            background: #B7B7B7;
            cursor: pointer;
            border: 4px solid transparent;
            overflow: visible;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            width: 22px;
            height: 22px;
            background: #706F6F;
            border-radius: 100px;
            top: -8px;
            -webkit-transform: translateX(-0px);
            transform: translateX(-0px);
            -webkit-transition: .4s;
            transition: .4s;
            -webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.23);
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.23);
        }

        .switch input:checked+.slider:before {
            -webkit-transform: translateX(20px);
            transform: translateX(20px);
            background: #43AD50;
        }

        .off {
            position: absolute;
            left: -25px;
            top: -5px;
            color: #706F6F;
            -webkit-transition: all ease .4s;
            transition: all ease .4s;
        }

        .on {
            position: absolute;
            right: -20px;
            top: -5px;
            color: #d3d3d3;
            font-family: 'roboto_light', sans-serif;
            -webkit-transition: all ease .4s;
            transition: all ease .4s;
        }

        .switch input:checked~.off {
            color: #d3d3d3;

            top: -5px;
        }

        .switch input:checked~.on {
            color: #43AD50;

        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.components.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.components.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
                    </div>

                    <!-- Content -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Travelend {{ now()->year }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    {{-- My Script --}}
    <script src="{{ asset('js/travel-admin.js') }}"></script>
    @yield('scripts')

    {{-- Sweet alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/chart-area.js') }}"></script>
    <script src="{{ asset('js/chart-pie.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/custom-validation.js') }}"></script>

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
