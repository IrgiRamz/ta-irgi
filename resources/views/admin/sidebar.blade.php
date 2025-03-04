<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @php
                $managementActive = request()->is('kelolausers*') || request()->is('setchatbot*') || request()->is('produkjasa*') || request()->is('metodebayar*');
                @endphp
                <a class="nav-link collapsed {{ $managementActive ? '' : 'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="{{ $managementActive ? 'true' : 'false' }}" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ $managementActive ? 'show' : '' }}" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @if(Auth::user()->role == 'admin')
                        <a class="nav-link {{ request()->is('kelolausers*') ? 'active' : '' }}" href="{{ url('/kelolausers')}}"><small><i class="fa fa-user"></i>&nbsp;Management User</small></a>
                        @endif
                        @if(Auth::user()->role == 'support' || Auth::user()->role == 'admin')
                        <a class="nav-link {{ request()->is('setchatbot*') ? 'active' : '' }}" href="{{ url('/setchatbot')}}"><small><i class="fa fa-commenting"></i>&nbsp;Management Chatbot</small></a>
                        @endif
                        @if(Auth::user()->role == 'admin')
                        <a class="nav-link {{ request()->is('produkjasa*') ? 'active' : '' }}" href="{{ url('/produkjasa')}}"><small><i class="fa fa-cubes"></i>&nbsp;Management Produk</small></a>
                        <a class="nav-link {{ request()->is('metodebayar*') ? 'active' : '' }}" href="{{ url('/metodebayar')}}"><small><i class="fa fa-usd"></i>&nbsp;Management Metode Pembayaran</small></a>
                        @endif
                    </nav>
                </div>
                @if(Auth::user()->role == 'finance' || Auth::user()->role == 'admin')
                <a class="nav-link {{ request()->is('pesanan*') ? 'active' : '' }}" href="{{ url('/pesanan')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart"></i></div>
                    Pemesanan
                </a>
                <a class="nav-link {{ request()->is('history*') ? 'active' : '' }}" href="{{ url('/history')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-history"></i></div>
                    History Pemesanan
                </a>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            @if(empty(Auth::user()->name))
            {{ '' }}
            @else
            {{ Auth::user()->role }} - {{ Auth::user()->name }}
            @endif
        </div>
    </nav>
</div>