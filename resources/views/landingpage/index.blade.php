<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>
        ICONIX :: Software Klinik kecantikan dan Klinik Kesehatan Terbaik
    </title>
    <meta name="title" content="ICONIX :: Software Khusus Klinik Terbaik" />
    <meta name="description" content="software aplikasi klinik kecantikan, klinik gigi dan klinik kesehatan/spesialis, dikembangkan sejak 2007, PSE terdaftar di Kominfo RI, siap integrasi di SATUSEHAT Kemenkes RI" />
    <meta content="Piranti Indonesia, CV" name="author" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.iconix.id/" />
    <meta property="og:title" content="ICONIX :: Software Klinik kecantikan, Klinik Gigi dan Klinik Spesialis Terbaik" />
    <meta property="og:description" content="software aplikasi klinik yg telah dipakai ratusan klinik, dikembangkan sejak 2007, dengan peringkat terbaik" />

    <meta property="og:image" content="{{ asset('images/landingpage/cover-metatag.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://www.iconix.id/" />
    <meta property="twitter:title" content="ICONIX :: Software Klinik kecantikan, Klinik Gigi dan Klinik Spesialis Terbaik" />
    <meta property="twitter:description" content="software aplikasi klinik yg telah dipakai ratusan klinik, dikembangkan sejak 2007, dengan peringkat terbaik" />
    <meta property="twitter:image" content="{{ asset('images/landingpage/cover-metatag.jpg') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/landingpage/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landingpage/typo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landingpage/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landingpage/extra.css') }}" /> <!-- tambahan sendiri -->
    <link rel="stylesheet" href="{{ asset('font/remix-icon/index.min.css') }}" />

    <!-- <link rel="stylesheet" href="wa_support/whatsapp-chat-support.css"> -->
    <!-- <link rel="stylesheet" href="wa_support/components/Font Awesome/css/font-awesome.min.css"> -->

    <link rel="shortcut icon" href="{{ asset('images/landingpage/favicon.ico') }}" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1D31KKQ703"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1D31KKQ703');
    </script>
</head>

<body class="iconix-theme-blue">
    @include('sweetalert::alert')

    <!-- Header -->
    @include('landingpage.header')
    <!-- End Header -->

    <!-- Main -->
    @yield('content')
    <!-- End Main -->


    <!-- Footer -->
    @include('landingpage.footer')
    <!-- End Footer -->


    <script src="{{ asset('js/landingpage/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/landingpage/aos.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- <script src="wa_support/components/moment/moment.min.js"></script>
  <script src="wa_support/components/moment/moment-timezone-with-data.min.js"></script>
  <script src="wa_support/whatsapp-chat-support.js"></script>
  <script>
      $('#chat_support').whatsappChatSupport({
          timezone: 'Asia/Jakarta',
          defaultMsg: 'Hai, saya ingin bertanya tentang software klinik...',
          notAvailableMsg: 'Offline',
          almostAvailableMsg: 'segera kembali', // if today is an available day and before the time starts
          dialogNotAvailableMsg: 'Offline', // message when its not an available day or once the available hours have passed
          dialogAlmostAvailableMsg: 'I will be back',
      });
  </script> -->
    <script src="https://code.tidio.co/rwvm4hluf2m3k8vsjcapixmrlhkygnir.js" async></script>
    <script>
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