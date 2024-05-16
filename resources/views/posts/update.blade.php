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
      <!-- Page Content -->
      <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="content">
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Post</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option">
                  <i class="si si-settings"></i>
                </button>
              </div>
            </div>
            <div class="mx-4 pb-2">
              <label class="form-label pt-2 pb-2" for="title">Title Post</label>
              <input type="text" class="form-control" id="one-ecom-product-name" name="title" value="{{ $post->title }}">
            </div>
            <div class="mx-4 pt-2 pb-2">
              <label class="pt-2 pb-2" for="">Content</label><br>
              <textarea name="content" rows="10" id="editor">{{ $post->content }}
              </textarea>
            </div>
            <div class="mx-4 pt-2 pb-2">
              <form>
                <div class="row">
                  <div class="">
                    <label class="pt-2 pb-2" for="">Short Descreption</label><br>
                    <textarea name="description" class="form-control" id="example-textarea-input" name="example-textarea-input" rows="3">{{ $post->description }}</textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="mx-4 pt-2 pb-2">
              <label class="pt-2 pb-2" for="">Author</label><br>
              <input name="author" type="text" class="form-control" id="example-text-input" name="example-text-input" value="{{ $post->author }}">
            </div>
            <div class="mx-4 pt-2 pb-2">
              <label for="cars">Category: </label>
              <select name="category" id="cars">
                @foreach($categories as $category)
                <option value="{{ $category->title }}">{{ $category->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="mx-4 pt-2 pb-2">
              <label for="image">Avatar</label><br>
              {{-- cập nhật thì phải xử lí trong controller --}}
              <input type="file" id="avatar" name="image">
            </div>
            <div class="text-center pt-2 pb-2"><button class="mx-7 btn btn-primary" type="submit">Submit</button></div>
          </div>
          <!-- END CKEditor 5 Classic-->
        </div>

      </form>
      
      <!-- END Page Content -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
      {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}


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

 --}}

<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script> 


@endsection


