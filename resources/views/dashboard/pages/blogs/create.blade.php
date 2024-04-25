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
</head>

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
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
</body>

</html>
