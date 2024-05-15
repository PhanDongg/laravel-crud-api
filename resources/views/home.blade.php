<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/oneui/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/oneui/themes/amethyst.scss', 'resources/js/oneui/app.js']) --}}
    @yield('js')
</head>

<body>
    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="index.html">
                    OneUI
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- Menu -->
                <div class="d-none d-lg-block">
                    <ul class="nav-main nav-main-horizontal nav-main-hover">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="gs_landing.html">
                                <i class="nav-main-link-icon si si-home"></i>
                                <span class="nav-main-link-name">Home</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon si si-rocket"></i>
                                <span class="nav-main-link-name">Features</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon si si-wallet"></i>
                                <span class="nav-main-link-name">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon si si-envelope"></i>
                                <span class="nav-main-link-name">Contact</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Extra</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-brush"></i>
                            </a>
                            <ul class="nav-main-submenu nav-main-submenu-right">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-default"></i>
                                        <span class="nav-main-link-name">Default</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/amethyst.min.css" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                                        <span class="nav-main-link-name">Amethyst</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/city.min.css" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-city"></i>
                                        <span class="nav-main-link-name">City</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/flat.min.css" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-flat"></i>
                                        <span class="nav-main-link-name">Flat</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/modern.min.css" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-modern"></i>
                                        <span class="nav-main-link-name">Modern</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/smooth.min.css" href="#">
                                        <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                                        <span class="nav-main-link-name">Smooth</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Menu -->

                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none ms-1" data-toggle="layout"
                    data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
            <div class="content-header">
                <form class="w-100" method="POST">
                    <div class="input-group input-group-sm">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                            data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                            id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-lighter">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('/media/photos/photo39@2x.jpg');">
            <div class="bg-primary-dark-op py-9 overflow-hidden">
                <div class="content content-full text-center">
                    <h1 class="display-4 fw-semibold text-white mb-2">
                        Hero Title
                    </h1>
                    <p class="fs-4 fw-normal text-white-50 mb-5">
                        Lead paragraph containing a quick description of your product.
                    </p>
                    <div>
                        <a class="btn btn-primary px-3 py-2 m-1" href="javascript:void(0)">
                            <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                        </a>
                        <a class="btn btn-dark px-3 py-2 m-1" href="javascript:void(0)">
                            <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            <!-- Cover Link Stories -->
            <h2 class="content-heading">Blog</h2>
            <div class="row items-push">
                {{-- $post này là ở index() trong postscontroller, để trỏ tới các cột trong moduels/post --}}
                @foreach ($posts as $post)
                    @if($post->status == 'Publish')
                    <div class="col-lg-4">
                        <!-- Story -->
                        <a class="block block-rounded block-link-pop h-100 mb-0 overflow-hidden"
                            href="javascript:void(0)">
                            <img class="img-fluid" src="assets/media/photos/photo25@2x.jpg" alt="">
      
                            {{-- các dữ liệu ở đây được lấy ra từ  model post --}}
                            <div class="block-content">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
                                    <h3 class="mt-3">{{ $post->title }}</h3>
                                    <p>{{ $post->content }}</p>
                                    <p>{{ $post->author }}</p>
                            </div>
                        </a>
                        <!-- END Story -->
                    </div>
                    @endif
                @endforeach
            </div>
            <!-- END Cover Link Stories -->
        </div>

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-4">
            <!-- Footer Navigation -->
            <div class="row items-push fs-sm border-bottom pt-4">
                <div class="col-sm-6 col-md-4">
                    <h3>Category</h3>
                    <ul class="list list-simple-mini">
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #1
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #2
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #3
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #4
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #5
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #6
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h3>Category</h3>
                    <ul class="list list-simple-mini">
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #1
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #2
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #3
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #4
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #5
                            </a>
                        </li>
                        <li>
                            <a class="fw-semibold" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #6
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Company</h3>
                    <div class="fs-sm mb-4">
                        1080 Sunshine Valley, Suite 2563<br>
                        San Francisco, CA 85214<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </div>
                    <h3>Subscribe to our news</h3>
                    <form class="push">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-alt" id="dm-gs-subscribe-email"
                                name="dm-gs-subscribe-email" placeholder="Your email..">
                            <button type="submit" class="btn btn-alt-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Footer Copyright -->
            <div class="row fs-sm pt-4">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                        href="https://pixelcave.com" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI 5.8</a>
                    &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
            <!-- END Footer Copyright -->
        </div>
    </footer>
    <!-- END Footer -->
    <script src="/js/oneui.app.min.js"></script>
</body>

</html>
