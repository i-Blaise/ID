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
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Profile</h4>
                    <form class="forms-sample" method="POST" action="/profile/{{ Auth::user()->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" name="profile_picture" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Full Name</label>
                        <input type="text" class="form-control" name="full_name" id="exampleInputUsername1" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Job Title</label>
                        <input type="text" class="form-control"  id="exampleInputEmail1" name="job_title" placeholder="Job Title">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Current Profile</h4>
                    <div class="profile">
                        <div class="user-profile">
                            <div class="user-image">
                                @if (is_null(Auth::user()->profile_picture))
                                    <img src="{{ asset('dashboard/images/faces/user-icon.webp') }}">
                                @else
                                    <img src="{{ asset( Auth::user()->profile_picture ) }}">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="template-demo">
                      <h1 class="display-4">Name: <b>{{ Auth::user()->name }}</b></h1>
                      <h1 class="display-4">Email: <b>{{ Auth::user()->email }}</b></h1>
                      <h1 class="display-4">Job TItle: <b>{{ Auth::user()->job_title }}</b></h1>
                    </div>
                  </div>
                </div>
              </div>
          </div>



          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Change Password</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Current Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputConfirmPassword1">Confirm New Password</label>
                          <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm New Password">
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
