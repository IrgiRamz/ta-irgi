<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ url('/index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/akunuser')}}"><small><i class="fa fa-user"></i>&nbsp;Management User</small></a>
                        <a class="nav-link" href="{{ url('/chatbot')}}"><small><i class="fa fa-commenting"></i>&nbsp;Management Chatbot</small></a>
                        <a class="nav-link" href="{{ url('/produk')}}"><small><i class="fa fa-cubes"></i>&nbsp;Management Produk</small></a>
                        <a class="nav-link" href="{{ url('/bayar')}}"><small><i class="fa fa-usd"></i>&nbsp;Management Metode Pembayaran</small></a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ url('/pemesanan')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart"></i></div>
                    Pemesanan
                </a>
                <a class="nav-link" href="{{ url('/history')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-history"></i></div>
                    History Pemesanan
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Irgi Rama
        </div>
    </nav>
</div>