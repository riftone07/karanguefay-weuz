<!-- header-section start -->
<header class="header-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex header-area">
                <nav class="navbar d-flex navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo/LogoKF1.png') }}" class="logo" alt="logo" width="90">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#accueil">
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#presentation-sectino">Présentation</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#notreproduit">
                                    Notre Produit
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#article-section">À la une</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="right-area header-action d-flex align-items-center">
                            <div class="lang d-flex align-items-center">
                                <img src="v2/assets/img/lang.png" alt="icon">
                                <select>
                                    <option value="1">FR</option>
                                </select>
                            </div>
                            <a href="https://dashboard.karanguefay.sn/admin/login" class="cmn-btn login">Connexion</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header-section end -->
