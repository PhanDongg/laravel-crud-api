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
        <form action="{{ route('post.addpost') }}" method="post" enctype="multipart/form-data">
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
                        <label class="form-label pt-2 pb-2" for="title">Title Post</label>
                        <input type="text" class="form-control" id="one-ecom-product-name" name="title" value="">
                    </div>

                    <div class="mx-4 pt-2 pb-2">
                        <label class="pt-2 pb-2" for="">Content</label><br>
                        <textarea name="content" id="editor">
                {{-- &lt;p&gt;This is some sample content.&lt;/p&gt; --}}
              </textarea>
                    </div>

                    <div class="mx-4 pt-2 pb-2">
                        <form>
                            <div class="row">
                                <div class="">
                                    <label class="pt-2 pb-2" for="">Short Descreption</label><br>
                                    <textarea name="description" class="form-control" id="example-textarea-input" name="example-textarea-input"
                                        rows="4" placeholder=""></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mx-4 pt-2 pb-2">
                        <label class="pt-2 pb-2" for="">Author</label><br>
                        <input name="author" type="text" class="form-control" id="example-text-input"
                            name="example-text-input" placeholder="">
                    </div>

                    <div class="mx-4 pt-2 pb-2">
                        <label for="cars">Category: </label>
                        <select name="category" id="cars">
                            @foreach ($categories as $category)
                                <option value="{{ $category->title }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="mx-4 pt-2 pb-2" for="cars">Status</label>
                    <select name="status">
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                    </select>

                    <div class="mx-4 pt-2 pb-2">
                        <label for="image">Avatar</label><br>
                        <input type="file" id="avatar" name="image">
                    </div>
                    <div class="text-center pt-2 pb-2"><button class="mx-7 btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
                <!-- END CKEditor 5 Classic-->
            </div>

        </form>

        <!-- END Page Content -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}

        <script>
            //code của phần editor 5, ko bug nhưng k ra kq ổn
            jQuery(document).ready(function() {
                // setTimeout(function() {
                //     var editor = CKEDITOR.instances['js-ckeditor5-classic'];
                //     if (editor) {
                //         // var editorData = editor.getData();
                //         // console.log(editorData);
                //         jQuery('form').submit(function(event) {
                //           event.preventDefault()
                //             var editorData = editor.getData();
                //             console.log(editorData);
                //             jQuery('#editor').val(editorData);
                //         });
                //     }
                // }, 1000);
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
    {{-- <script src="/js/plugins/ckeditor5-classic/build/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-source-editing@41.4.2/src/index.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-source-editing@41.4.2/theme/sourceediting.min.css"> --}}

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>

    <!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script>
        CKEDITOR.ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                        'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                        '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'MultiLevelList',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                    'MathType',
                    // The following features are part of the Productivity Pack and require additional license.
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
