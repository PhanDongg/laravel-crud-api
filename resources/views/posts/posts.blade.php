@extends('layouts.backend')

@section('content')

        <!-- Page Content -->
        <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block block-rounded">
                      <div class="block-header block-header-default">
                        <h3 class="block-title">All Post</h3>
                      </div>
                      <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full " style="font-size: 14px;">
                          <thead>
                            <tr class="text-capitalize">
                              <th class="d-none d-sm-table-cell text-capitalize" >Title</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Author</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Category</th>
                              <th class="d-none d-sm-table-cell text-capitalize">Status</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Create Date</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Update Date</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Slug</th>
                              <th class="d-none d-sm-table-cell text-capitalize" >Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($posts as $post)
                              <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                <td>{{ $post->updated_at->format('d/m/Y') }}</td>
                                <td>{{ $post->slug }}</td>
                                <td class="text-center d-flex">
                                  <a href="{{ route('post.update', ['id' => $post->id]) }}">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit Client">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                      </button>
                                    </div>
                                  </a>
                                  <a href="{{ route('post.delete', $post) }}">
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
        </div>
        <!-- End Page Content -->

        <script src="/js-html-version/oneui.app.min.js"></script>
        <!-- jQuery (required for DataTables plugin) -->
        <script src="/js/lib/jquery.min.js"></script>
         <!-- Page JS Plugins -->
         <script src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
         <script src="/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
         <script src="/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
          <script src="/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
          <script src="/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
          <script src="/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
          <script src="/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
          <script src="/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
          <script src="/js/plugins/datatables-buttons/buttons.print.min.js"></script>
          <script src="/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
        

        <!-- Page JS Code -->
        <script src="/js/pages/be_tables_datatables.min.js"></script>
        {{-- js phân trang --}}
        <script src="/js/plugins/pagingTabel.js"></script>

        {{-- <script src="/_js/pages/be_tables_datatables.js"></script> --}}
@endsection





