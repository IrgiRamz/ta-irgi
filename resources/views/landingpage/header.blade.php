<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img src="{{ asset('images/landingpage/logo.webp') }}" alt="Software Klinik Kecantikan" class="iconix-logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fitur</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('/fcantik')}}">Klinik Kecantikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/fklinik')}}">Klinik Kesehatan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/fgigi')}}">Klinik Gigi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Harga</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('/hcantik')}}">Klinik Kecantikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/hklinik')}}">Klinik Kesehatan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/hgigi')}}">Klinik Gigi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak')}}">Kontak</a>
                    </li>
                    <!--<li class="nav-item d-none d-lg-none d-md-block d-sm-block">
            <a href="https://api.whatsapp.com/send?phone=628118248989&text=Halo Kak, saya tertarik dengan software klinik" class="btn bg-white d-none d-lg-block" type="submit">Hubungi Kami</a>
          </li>-->
                </ul>
            </div>
            <!--<a href="https://api.whatsapp.com/send?phone=628118248989&text=Halo Kak, saya tertarik dengan software klinik" class="btn bg-white d-none d-lg-block" type="submit">Hubungi Kami</a>-->
        </div>
    </nav>