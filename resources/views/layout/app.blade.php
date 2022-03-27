<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mini Project</title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope" id="yui_3_18_1_1_1648127855620_29978">
                    <span class="site-logo-img" id="yui_3_18_1_1_1648127855620_29977"><a href="https://sitemaya.com/" class="custom-logo-link transparent-custom-logo" rel="home" itemprop="url" id="yui_3_18_1_1_1648127855620_29976"><img width="171" height="41" src="https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-171x41.png" class="custom-logo" alt="" loading="lazy" srcset="https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-171x41.png 171w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-300x72.png 300w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-1024x245.png 1024w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-768x184.png 768w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-60x14.png 60w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-110x26.png 110w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-600x143.png 600w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-200x48.png 200w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-1536x367.png 1536w, https://cdn.sitemaya.com/wp-content/uploads/2021/10/22163837/Sitemaya-Export-01-2048x489.png 2048w" sizes="(max-width: 171px) 100vw, 171px"></a></span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-success" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Features
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Template</a></li>
                                <li><a class="dropdown-item" href="#">Text</a></li>
                                <li><a class="dropdown-item" href="#">Slider</a></li>
                                <li><a class="dropdown-item" href="#">Counter</a></li>
                                <li><a class="dropdown-item" href="#">Animasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pilihan Template</a>
                        </li>
                        <li><a href="/login"><button class="btn btn-outline-dark">Login</button></a></li>
                        <li><a href="/daftar"><button class="btn btn-bg-success">Daftar Sekarang</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

</body>

<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
    <div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-3-rheavy ast-builder-grid-row-tablet-3-equal ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-primary-footer-builder">
        <div class="ast-builder-grid-row-container-inner">
            <div class="ast-builder-footer-grid-columns site-primary-footer-inner-wrap ast-builder-grid-row">

                <div class="row ms-auto">
                    <div class="col">
                        <div class="site-footer-primary-section-1 site-footer-section site-footer-section-1">
                            <aside class="footer-widget-area widget-area site-footer-focus-item" data-section="sidebar-widgets-footer-widget-1" aria-label="Footer Widget 1">
                                <div class="footer-widget-area-inner site-info-inner">
                                    <section id="media_image-1" class="widget widget_media_image"><img width="275" height="70" src="https://cdn.sitemaya.com/wp-content/uploads/2021/10/25155719/logo-sitemaya-275.png" class="image wp-image-5924  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;"></section>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col">
                        <div class="site-footer-primary-section-2 site-footer-section site-footer-section-2">
                            <div class="footer-widget-area widget-area site-footer-focus-item" data-section="section-footer-menu">
                                <div class="footer-bar-navigation">
                                    <nav class="site-navigation ast-flex-grow-1 navigation-accessibility footer-navigation" id="footer-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                        <div class="footer-nav-wrap">
                                            <ul id="astra-footer-menu" class="ast-nav-menu ast-flex astra-footer-vertical-menu astra-footer-tablet-vertical-menu astra-footer-mobile-vertical-menu">
                                                <a href="https://sitemaya.com/aturan-penggunaan/" class="d-flex justify-content-end"><p class="menu-link">Aturan Penggunaan</p> </a>
                                                <a href="https://sitemaya.com/artikel/" class=" d-flex justify-content-end"><p class="menu-link">Artikel</p> </a>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="site-footer-primary-section-3 site-footer-section site-footer-section-3">
                            <div class="footer-widget-area widget-area site-footer-focus-item ast-footer-html-1" data-section="section-fb-html-1">
                                <div class="ast-header-html inner-link-style-">
                                    <div class="ast-builder-html-element">
                                        <p style="text-align: left;">Delavender town house, Jl. Papa Hijau, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141<br>
                                            <span style="font-size: 11pt;">Contact: maya@sitemaya.com</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-below-footer-builder">
        <div class="ast-builder-grid-row-container-inner">
            <div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
                <div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
                    <div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
                        <div class="ast-footer-copyright">
                            <p style="text-align: center;"><span style="font-size: 9pt;">Copyright © 2022 <strong>Sitemaya</strong> | Powered by <strong>Sitemaya</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<script src="js/app.js"></script>

</html>