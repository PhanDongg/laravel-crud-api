<!DOCTYPE html>
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

    <!-- Main Container -->
    <main id="main-container">
      {{-- @if(Session::has('error'))
      <div class="alert alert-danger" role="alert">
        <strong>{{ Session::get('error')}}</strong>
      </div>
      @endif --}}

        <div class="content">
            <div class="row">
                <div class="col-md-6 m-auto container-login">
                    <form action="{{ route('login') }}" method="post" id="form-login" enctype="multipart/form-data">
                        @csrf
                    <div class="block block-rounded">
                      <div class="block-header block-header-default">
                        <h3 class="block-title">Login</h3>
                        <div class="block-options">
                          <button type="submit" class="btn btn-sm btn-primary">
                            Submit
                          </button>
                          <button type="reset" class="btn btn-sm btn-alt-primary">
                            Reset
                          </button>
                          <button class="btn btn-sm btn-warning">
                            <a href="{{ route('register') }}">Register</a>
                          </button>
                        </div>
                      </div>
                      <div class="block-content">
                        <div class="row justify-content-center py-sm-3 py-md-5">
                          <div class="col-sm-10 col-md-8">
                            <div class="mb-4">
                              <label class="form-label" for="email">Username</label>
                              <input type="text" class="form-control form-control-alt" id="block-form1-username" name="email" placeholder="Enter your username..">
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="password">Password</label>
                              <input type="password" class="form-control form-control-alt" id="block-form1-password" name="password" placeholder="Enter your password..">
                            </div>
                            <div class="mb-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="block-form1-remember-me" name="block-form1-remember-me">
                                <label class="form-check-label" for="block-form1-remember-me">Remember Me?</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger text-center">
          <ul style="list-style-type: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </main>
    <!-- END Main Container -->

    {{-- <script src="/js/oneui.app.min.js"></script> --}}
</body>

</html>
