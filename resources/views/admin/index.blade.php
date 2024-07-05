<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconix Software</title>
    <link href="{{ asset('css/admin/datatablestyle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/admin/fontawesome.js') }}"></script>
    <style>
        /* Menentukan lebar kolom pertama dan terakhir */
        td:first-child {
            width: 6%;
        }

        td:last-child {
            width: 10%;
        }

        .datatable-sorter {
            text-align: center;
            margin-left: 7px;
        }

        td {
            text-align: center;
        }
    </style>
</head>

<body class="">
    @include('sweetalert::alert')
    <!--Header-->
    @include('admin.header')
    <!--End Header-->
    <div id="layoutSidenav">
        <!--Sidebar-->
        @include('admin.sidebar')
        <!--End Sidebar-->
        <div id="layoutSidenav_content">
            <!--Content-->
            @yield('content')

            <!--End Content-->

            <!--Footer-->
            @include('admin.footer')
            <!--End Footer-->
        </div>
    </div>
    <script src="{{ asset('js/admin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/admin/scripts.js') }}"></script>
    <script src="{{ asset('js/admin/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('js/admin/simple-datatables.min.js') }}"></script>
    <script src="{{ asset('js/admin/datatables-simple-demo.js') }}"></script>
    <script src="{{ asset('js/admin/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#currentYear").text(new Date().getFullYear());
        });
    </script>

    <script>
        /*$('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Anda Yakin Data DiHapus?',
                text: 'Perhatian yang akan dihapus, akan dihapus secara permanen!',
                icon: 'warning',
                buttons: ["Batal", "Hapus"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });*/

        /*$('.delete-form').on('click', function(event) {
            event.preventDefault();
            const form = this;
            swal({
                title: 'Anda Yakin Data DiHapus?',
                text: 'Perhatian yang akan dihapus, akan dihapus secara permanen!',
                icon: 'warning',
                buttons: ["Batal", "Hapus"],
            }).then(function(value) {
                if (value) {
                    form.submit();
                }
            });
        });*/

        $(document).ready(function() {
            $('.delete-confirm').on('click', function(event) {
                event.preventDefault();
                const form = $(this).closest('form');
                swal({
                    title: 'Anda Yakin Data DiHapus?',
                    text: 'Perhatian yang akan dihapus, akan dihapus secara permanen!',
                    icon: 'warning',
                    buttons: ["Batal", "Hapus"],
                }).then(function(value) {
                    if (value) {
                        form.submit();
                    }
                });
            });
        });

        $(document).ready(function() {
            hitungtotal()
            function hitungtotal() {
                var harga = $('#produk option:selected').data('harga');
                var lamapakai = $('#lamapakai').val();
                var total = harga * lamapakai;
                if (lamapakai == 12) {
                    total = harga * 10;
                }
                $('#total').val('Rp. ' + total.toLocaleString('id-ID'));
            }

            $('#produk, #lamapakai').on('change', hitungtotal);
        });
    </script>

</body>

</html>