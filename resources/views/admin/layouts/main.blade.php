<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zoofari Admin - {{ $title }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- Sweeetalert2 css --}}
    <link rel="stylesheet" href="/assets/vendors/sweetalert2/dist/sweetalert2.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:/partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:/partials/_navbar.html -->
            @include('admin.layouts.navbar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> {{ $title }} </h3>
                    </div>
                    {{-- Content Start --}}
                    @yield('content')
                    {{-- Content End --}}
                </div>
                <!-- content-wrapper ends -->
                <div class="flash-success" data-success="{{ session('success') }}"></div>
                <div class="flash-warning" data-warning="{{ session('warning') }}"></div>
                <div class="flash-error" data-error="{{ session('error') }}"></div>
                <!-- partial:/partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- Sweetalert2 JS --}}
    <script src="/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
        $(document).ready(function() {

            const success = $('.flash-success').data('success');
            const error = $('.flash-error').data('error');
            const warning = $('.flash-warning').data('warning');

            let Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            if (success) {

                Toast.fire({
                    text: success,
                    icon: 'success'

                })

            } else if (error) {
                Toast.fire({
                    text: error,
                    icon: 'error'

                })
            } else if (warning) {
                Toast.fire({
                    text: warning,
                    icon: 'warning'

                })
            }



        })
    </script>
</body>

</html>
