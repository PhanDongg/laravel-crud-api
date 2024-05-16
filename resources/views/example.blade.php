@section('content')

    <!-- Main Container -->
    <main id="main-container">
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
          <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
              <h1 class="h3 fw-bold mb-1">
                CKEditor 5
              </h1>
              <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                Classic editor mode.
              </h2>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item">
                  <a class="link-fx" href="javascript:void(0)">Forms</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  CKEditor 5 Classic
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- END Hero -->

      <!-- Page Content -->
      <form action="/pages/add-post" method="post">
        {{-- <form action="{{ route('pages.addpost') }}" method="post"> --}}
        @csrf
        <div class="mx-7">
          <label for="title">Tile post</label><br>
          <input type="text" name="title" placeholder="Enter Title post">
        </div>

        <div class="mx-7">
          <label for="">Short Descreption</label><br>
          <input type="text" name="description" placeholder="Enter Short Descreption">
        </div>
        
        <div class="mx-7">
          <label for="">Content</label><br>
          <input type="text" name="content" placeholder="Enter Content">
        </div>
        
        <div class="mx-7">
          <label for="">Author</label><br>
          <input type="text" name="author" placeholder="Enter Author">
        </div>
        
        {{-- <div class="mx-7">
          <label for="">Date</label><br>
          <input type="text" placeholder="Enter Date">
        </div> --}}
        {{-- <div class="mx-7">
          <label for="">Image</label><br>
          <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48">
        </div> --}}
        <button class="mx-7" type="submit">Đăng</button>
      </form>
      
      <div class="content">
        <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.jsCkeditor5()) -->
        <!-- For more info and examples you can check out http://ckeditor.com -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Add Post</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div>
            <label class="form-label" for="one-ecom-product-name">Name</label>
            <input type="text" class="form-control" id="one-ecom-product-name" name="" value="Dark Souls III">
          </div>
          <div class="block-content">
            <form action="be_forms_editors.html" method="POST" onsubmit="return false;">
              <div class="mb-4">
                <!-- CKEditor 5 Classic Container -->
                <div id="js-ckeditor5-classic">Hello classic CKEditor 5!</div>
              </div>
            </form>
          </div>
        </div>
        <!-- END CKEditor 5 Classic-->
      </div>
      <!-- END Page Content -->


      




    </main>
    <!-- END Main Container -->


    

  <!-- END Page Container -->

  <!--
      OneUI JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
  -->
  {{-- <script src="assets/js-html-version/oneui.app.min.js"></script> --}}

  <!-- Page JS Plugins -->
  {{-- <script src="assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script> --}}
  <script src="/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}

  <!-- Page JS Helpers (CKEditor 5 plugins) -->
 

  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

  <div id="editor"></div>

  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> --}}


@endsection