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
    <link rel="stylesheet" href="{{ asset('my-style.css') }}">
</head>

<body>

    <!-- Main Container -->
    <main id="main-container">

        <div class="content">
            <div class="row">
                <div class="col-md-6 m-auto container-login">
                    <form action="{{ route('complete.register') }}" method="post" id="form-login">
                        @csrf
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Register</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-sm btn-alt-primary">
                                        Reset
                                    </button>
                                </div>
                            </div>

                            <div class="block-content">
                                <div class="row justify-content-center py-sm-3 py-md-5">
                                    <div class="col-sm-10 col-md-8">
                                        <div class="mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" class="form-control form-control-alt"
                                                id="block-form1-username" name="email"
                                                placeholder="Enter your username..">
                                                 {{-- display validation --}}
                                            @if ($errors->has('email'))
                                                <ul style="list-style-type: none; font-size: 12px;">
                                                    @foreach ($errors->get('email') as $error)
                                                        <li style="color: red;">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" class="form-control form-control-alt"
                                                id="block-form1-password" name="password"
                                                placeholder="Enter your password..">
                                                @if ($errors->has('password'))
                                                <ul style="list-style-type: none; font-size: 12px;">
                                                    @foreach ($errors->get('password') as $error)
                                                        <li style="color: red;">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                        {{-- <div class="mb-4">
                                          <label class="form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                          <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password">
                                        </div> --}}
                                        <div class="mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="block-form1-remember-me" name="block-form1-remember-me">
                                                <label class="form-check-label" for="block-form1-remember-me">Remember
                                                    Me?</label>
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

    </main>
    <!-- END Main Container -->

    <script src="/js/oneui.app.min.js"></script>
</body>

</html>
