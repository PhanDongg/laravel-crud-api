<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    {{-- <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}"> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}"> --}}

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/oneui/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/oneui/themes/amethyst.scss', 'resources/js/oneui/app.js']) --}}
    @yield('js')
    <link rel="stylesheet" href="{{ asset('my-style.css')}}">
  </head>

  <body>
  
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="hero">
          <div class="hero-inner text-center">
            <div class="bg-body-extra-light">
              <div class="content content-full overflow-hidden">
                <div class="py-4">
                  <!-- Error Header -->
                  <h1 class="display-1 fw-bolder text-modern">
                    500
                  </h1>
                  <h2 class="h4 fw-normal text-muted mb-5 text-capitalize " style="color: red !important;">
                    Tính năng thêm bài viết chỉ dành cho admin thôi bạn iu ơi !!!
                  </h2>
                  <!-- END Error Header -->

                  <!-- Search Form -->
                  <form action="be_pages_generic_search.html" method="POST">
                    <div class="row justify-content-center mb-4">
                      <div class="col-sm-6 col-xl-3">
                        <div class="input-group input-group-lg">
                          <input class="form-control form-control-alt" type="text" placeholder="Search application..">
                          <button type="submit" class="btn btn-dark">
                            <i class="fa fa-search opacity-75"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- END Search Form -->

                  <a style="color: red;"  href=" {{ route('home')}} ">Go Visit Home</a>
                </div>
              </div>
            </div>
            <div class="content content-full text-muted fs-sm fw-medium">
              <!-- Error Footer -->
              <p class="mb-1">
                Would you like to let us know about it?
              </p>
              <a class="link-fx" href="javascript:void(0)">Report it</a> or <a class="link-fx" href="be_pages_error_all.html">Go Back to Dashboard</a>
              <!-- END Error Footer -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/oneui.app.min.js"></script>
  </body>
</html>
