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
      <form action="{{ route('cate.addcategory') }}" method="post">
        @csrf
        <div class="content">
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Add New Category</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option">
                  <i class="si si-settings"></i>
                </button>
              </div>
            </div>
            <div class="mx-4 pb-2">
              <label class="form-label pt-2 pb-2" for="title">Title Category</label>
              <input type="text" class="form-control" id="one-ecom-product-name" name="title">
            </div>
            <div class="mx-4 pt-2 pb-2">
              <form>
                <div class="row">
                  <div class="">
                    <label class="pt-2 pb-2" for="">Short Descreption</label><br>
                    <textarea name="description" class="form-control" id="example-textarea-input" name="example-textarea-input" rows="3"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="text-center pt-2 pb-2"><button class="mx-7 btn btn-primary" type="submit">Submit</button></div>
          </div>
          <!-- END CKEditor 5 Classic-->
        </div>
      </form>

      <!-- Dynamic Table Full -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">All Categories</h3>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full " style="font-size: 14px;">
            <thead>
              <tr class="text-capitalize">
                <th class="d-none d-sm-table-cell text-capitalize" >Title</th>
                <th class="d-none d-sm-table-cell text-capitalize" >Description</th>
                <th class="d-none d-sm-table-cell text-capitalize" >Create Date</th>
                <th class="d-none d-sm-table-cell text-capitalize" >Update Date</th>
                <th class="d-none d-sm-table-cell text-capitalize" >Slug</th>
                <th class="d-none d-sm-table-cell text-capitalize" >Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->title }}</td>
                  <td>{{ $category->description }}</td>
                  <td>{{ $category->created_at->format('d/m/Y') }}</td>
                  <td>{{ $category->updated_at->format('d/m/Y') }}</td>
                  <td>{{ $category->slug }}</td>
                  {{-- <td><a href="{{ route('pages.add-posts') }}">Add New</a></td> --}}
                  <td class="text-center d-flex">
                    <a href="{{ route('cate.update-category', ['id' => $category->id]) }}">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit Client">
                          <i class="fa fa-fw fa-pencil-alt"></i>
                        </button>
                      </div>
                    </a>
                    <a href="{{ route('cate.delete-category', $category) }}">
                      <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove Client">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Dynamic Table Full -->
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
