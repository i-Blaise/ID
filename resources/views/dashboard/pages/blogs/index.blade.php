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


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List of all written blogs</h4>
                    <p class="card-description">
                        <code>NB: </code>Clicking the published button will Publish the Blog onto the Front facing website 
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>
                                #
                              </th>
                            <th>
                              Author
                            </th>
                            <th>
                              Blog Title
                            </th>
                            <th>
                              Status
                            </th>
                            <th>
                              Publish
                            </th>
                            <th>
                              Delete
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                1
                            </td>
                            <td class="py-1">
                              <img src="{{ asset('dashboard/images/faces/face1.jpg') }}" alt="image"/>
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                                <label class="badge badge-info">Pending</label>
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-success btn-icon">
                                    <i class="mdi mdi-upload"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              2
                            </td>
                            <td class="py-1">
                              <img src="{{ asset('dashboard/images/faces/face2.jpg') }}" alt="image"/>
                            </td>
                            <td>
                              Messsy Adam
                            </td>
                            <td>
                                <label class="badge badge-success">Published</label>
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-success btn-icon">
                                    <i class="mdi mdi-upload"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
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
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
