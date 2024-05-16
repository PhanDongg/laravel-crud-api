@extends('layouts.backend')

@section('js')
<script>
    setTimeout(() => {
      One.helpersOnLoad(['js-ckeditor5']);
    }, 1000);

</script>

@endsection

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
          {{-- <form action=""></form> --}}
        @csrf

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
            <div class="mx-4 pb-2">
              <label class="form-label" for="title">Title Post</label>
              <input type="text" class="form-control" id="one-ecom-product-name" name="title" value="">
            </div>

            <div class="mx-7">
              <label for="">Content</label><br>
              {{-- <input type="hidden" name="content" placeholder="Enter Content"> --}}
              <input type="hidden" name="content" id="editor">
              <div id="js-ckeditor5-classic"></div>
            </div>

            {{-- <div class="block-content">
              <form action="/pages/add-post" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <!-- CKEditor 5 Classic Container -->
                  <label class="pb-2" for="">Descreption</label>
                  <div id="js-ckeditor5-classic">Enter description</div>
                </div>
              </form>
            </div> --}}

            <div class="mx-7">
              <label for="">Short Descreption</label><br>
              <input type="text" name="description" placeholder="Enter Short Descreption">
            </div>

            <div class="mb-4 px-4 pe-4">
              <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
              <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
            </div>
            <div class="mx-4">
              <label for="">Author</label><br>
              <input type="text" name="author" placeholder="Enter Author">
            </div>
            <button class="mx-7" type="submit">Submit</button>
          </div>
          <!-- END CKEditor 5 Classic-->
        </div>



      </form>
      

      <!-- END Page Content -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
      {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}

<script>

jQuery(document).ready(function() {
    setTimeout(function() {
        var editor = CKEDITOR.instances['js-ckeditor5-classic'];
        if (editor) {
            // var editorData = editor.getData();
            // console.log(editorData);
            jQuery('form').submit(function(event) {
              event.preventDefault()
                var editorData = editor.getData();
                console.log(editorData);
                jQuery('#editor').val(editorData);
            });
        }
    }, 1000);

    // ClassicEditor
    //         .create( document.querySelector( '#editor' ) )
    //         .catch( error => {
    //             console.error( error );
    //         } );

});


</script>
      




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