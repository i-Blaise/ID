<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>!D - Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
  <!-- endinject -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('assets/favicon_io/site.webmanifest') }}">
  <x-head.tinymce-config/>

    {{-- Toastify Notifications  --}}
    @toastifyCss
</head>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        {{ toastify()->error($error) }}
    @endforeach
@endif

@if(session('success'))
        {{ toastify()->success(session('success')) }}
@endif
<body>
  <div class="container-scroller">


    {{-- Navbar  --}}
    @include('dashboard.partials.navbar')
    {{-- End Navbar --}}


    <div class="container-fluid page-body-wrapper">


    {{-- Sidebar  --}}
    @include('dashboard.partials.sidebar')
    {{-- End Sidebar  --}}


      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create New Blog</h4>
                  <p class="card-description">
                    Submitting form will not immediatelt publish blog. Go to View Blogs tab to revivew and publish submitted blogs
                  </p>
                  @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                  @endif
                  <form class="forms-sample" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label>Main Blog Image</label>
                      <input type="file" name="main_image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>

                    <div class=" col-12 form-group">
                      <label for="exampleInputName1">Blog Title</label>
                      <input type="text" class="form-control" name="blog_title" id="exampleInputName1" placeholder="Enter Blog Title">
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Sub Image 1</label>
                          <input type="file" name="sub_image1" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Sub Image 2</label>
                          <input type="file" name="sub_image2" class="file-upload-default">
                          <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="exampleTextarea1">Blog Body</label>
                      <x-forms.tinymce-editor/>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="exampleTextarea1">Quotes</label>
                        <textarea class="form-control" name="quotes" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputName1">Quotes Author</label>
                        <input type="text" class="form-control" name="quotes_author" id="exampleInputName1" placeholder="Name">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="blog_tags">Select Blog Tags</label>
                          <select id="blog_tags" class="js-example-basic-single w-100" name="blog_tags[]" multiple>
                            @foreach ($tags as $tag)
                                <option>{{ $tag->tags }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputName1">Add Blog Tags</label>
                        <input type="text" class="form-control" name="new_blog_tags" id="exampleInputName1" placeholder="Name">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

        {{-- Footer --}}
        @include('dashboard.partials.footer')
        {{-- End Footer  --}}


      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
    <script src="{{ asset('dashboard/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('dashboard/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('dashboard/vendors/select2/select2.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('dashboard/js/file-upload.js') }}"></script>
  <script src="{{ asset('dashboard/js/typeahead.js') }}"></script>
  <script src="{{ asset('dashboard/js/select2.js') }}"></script>
  <!-- End custom js for this page-->

    {{-- Toastify Notifications  --}}
    @toastifyJs
</body>

</html>
