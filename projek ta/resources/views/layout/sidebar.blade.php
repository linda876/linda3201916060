<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">
                    <hr>
                </div>
                @auth

                    <a class="nav-link {{ Request::is('pemasukan-pengeluaran') ? 'active' : '' }}"
                        href="/pemasukan-pengeluaran">
                        <div class="sb-nav-link-icon"></div><strong>
                            PEMASUKAN
                        </strong>
                    </a>
                    <a class="nav-link {{ Request::is('index-pengeluaran') ? 'active' : '' }}" href="/index-pengeluaran">
                        <div class="sb-nav-link-icon"></div><strong>
                            PENGELUARAN
                        </strong>
                    </a>
                @endauth
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"></div><strong>
                        LAPORAN
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div><strong>
                        </strong>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('semua') ? 'active' : '' }}" href="/semua">KAS</strong></a>
                        <a class="nav-link {{ Request::is('kolekte') ? 'active' : '' }}"
                            href="/kolekte"><strong>Pemasukan Kolekte</strong></a>
                        <a class="nav-link {{ Request::is('sumbangan') ? 'active' : '' }}"
                            href="/sumbangan"><strong>Pemasukan Sumbangan</strong></a>
                        <a class="nav-link {{ Request::is('pengeluaran') ? 'active' : '' }}"
                            href="/pengeluaran"><strong>Pengeluaran</strong></a>

                    </nav>
                </div>
                @auth

                    <a class="nav-link {{ Request::is('kas') ? 'active' : '' }}" href="/kas">
                        <div class="sb-nav-link-icon"></div><strong>
                            KAS
                        </strong>
                    </a>

                    <a class="nav-link" href="/logout">
                        <div class="sb-nav-link-icon"></div><strong>
                            logout
                        </strong>
                    </a>
                @else
                    <a class="nav-link" href="/login">
                        <div class="sb-nav-link-icon"></div><strong>
                            Log in
                        </strong>
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</div>
