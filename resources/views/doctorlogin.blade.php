<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo2.png" alt="" style="max-height:400px !important ;width:300px !important">
                </a>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your PHN Number & password to login</p>
                  </div>
                  <form class="row g-3 needs-validation" method="POST" action="{{ route('PHNlogin.loginWithPHN') }}" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="phoneNumber" class="form-label">PHN Number </label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">+</span>
                            <input type="text" name="phn" class="form-control @error('phn') is-invalid @enderror" id="phoneNumber" value="{{ old('phn') }}" required autocomplete="phn">
                            <div class="invalid-feedback">
                                @error('phn')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required autocomplete="current-password">
                        <div class="invalid-feedback">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn custombtn w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">Don't remember the PHN Number? <a href="{{ route('login') }}">Login through email</a></p>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                    </div>
                </form>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="admin/assets/vendor/quill/quill.min.js"></script>
<script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="admin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="admin/assets/js/main.js"></script>

</body>

</html>
