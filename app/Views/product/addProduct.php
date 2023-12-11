<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="<?= site_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!-- loader-->
	<link href="<?= site_url('assets/css/pace.min.css')?>" rel="stylesheet">
	<script src="<?= site_url('assets/js/pace.min.js')?>"></script>
    <!--Styles-->
    <link href="<?= site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= site_url('assets/css/icons.css')?>">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="<?= site_url('assets/css/main.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/dark-theme.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/semi-dark-theme.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/minimal-theme.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/shadow-theme.css')?>" rel="stylesheet">
     
  </head>
  <body>

    <!--start header-->
    <?= $this->include('includes/topbar.php'); ?>
     <!--end header-->


     <!--start sidebar-->
      <?= $this->include('includes/sidebar.php') ?>
     <!--end sidebar-->


    <!--start main content-->
     <main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Validations</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

  
        <!-- <div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 bg-transparent">
								<h5 class="mb-0">Bootstrap Validation</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input type="text" class="form-control" id="bsValidation1" placeholder="First Name" value="Jhon" required>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="bsValidation2" placeholder="Last Name" value="Deo" required>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input type="text" class="form-control" id="bsValidation3" placeholder="Phone" required>
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Email</label>
										<input type="email" class="form-control" id="bsValidation4" placeholder="Email" required>
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation5" class="form-label">Password</label>
										<input type="password" class="form-control" id="bsValidation5" placeholder="Password" required>
										<div class="invalid-feedback">
											Please choose a password.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation6" name="radio-stacked" required>
												<label class="form-check-label" for="bsValidation6">Male</label>
											  </div>
											  <div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation7" name="radio-stacked" required>
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation8" class="form-label">DOB</label>
										<input type="date" class="form-control" id="bsValidation8" required>
										<div class="invalid-feedback">
											Please select date.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="bsValidation9" class="form-select" required>
											<option selected disabled value>...</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
										</select>
										<div class="invalid-feedback">
										   Please select a valid country.
										</div>
									</div>
									
									<div class="col-md-6">
										<label for="bsValidation10" class="form-label">City</label>
										<input type="text" class="form-control" id="bsValidation10" placeholder="City" required>
										<div class="invalid-feedback">
											Please provide a valid city.
										</div>
									</div>
									<div class="col-md-4">
										<label for="bsValidation11" class="form-label">State</label>
										<select id="bsValidation11" class="form-select" required>
											<option selected disabled value>Choose...</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
										</select>
										<div class="invalid-feedback">
											Please select a valid State.
										 </div>
									</div>
									<div class="col-md-2">
										<label for="bsValidation12" class="form-label">Zip</label>
										<input type="text" class="form-control" id="bsValidation12" placeholder="Zip" required>
										<div class="invalid-feedback">
											Please enter a valid Zip code.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required></textarea>
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="bsValidation14" required>
											<label class="form-check-label" for="bsValidation14">Agree to terms and conditions</label>
											<div class="invalid-feedback">
												You must agree before submitting.
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> -->
				<!--end row-->

				<div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 bg-transparent">
								<h5 class="mb-0">jQuery Validation</h5>
							</div>
							<div class="card-body p-4">
								<form id="jQueryValidationForm">
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input35" name="yourname" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Phone No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input37" name="username" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37a" class="col-sm-3 col-form-label">Email Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="input37a" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38" name="password" placeholder="Choose Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input38a" class="col-sm-3 col-form-label">Confirm Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="input38a" name="confirm_password" placeholder="Confirm Password">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input39" class="col-sm-3 col-form-label">Select Country</label>
										<div class="col-sm-9">
											<select class="form-select" id="input39" name="country">
												<option selected disabled value>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input40" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="input40" name="address" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="input41" name="agree">
												<label class="form-check-label" for="input41">Check me out</label>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
												<button type="reset" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
				<!--end row-->


     </main>
     <!--end main content-->
 

    <!--start overlay-->
      <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->

    <!-- Search Modal -->
    <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header gap-2">
            <div class="position-relative popup-search w-100">
              <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
              <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
            </div>
            <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="search-list">
                 <p class="mb-1">Html Templates</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2"><i class="bi bi-filetype-html fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-award fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-box2-heart fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-camera-video fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Web Designe Company</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-chat-right-text fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cloud-arrow-down fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-columns-gap fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-collection-play fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Software Development</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cup-hot fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-droplet fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-exclamation-triangle fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-eye fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Online Shoping Portals</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-facebook fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-flower2 fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-geo-alt fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-github fs-5"></i>eCommerce Html Templates</a>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>


    <!--start theme customization-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
          <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" checked="">
          <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
          <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
          <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
          <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
        </div>
       
      </div>
    </div>
    <!--end theme customization-->

   <!--plugins-->
   <script src="<?= site_url('assets/js/jquery.min.js')?>"></script>
   <script src="<?= site_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')?>"></script>
   <script src="<?= site_url('assets/plugins/metismenu/js/metisMenu.min.js')?>"></script>
   <script src="<?= site_url('assets/plugins/simplebar/js/simplebar.min.js')?>"></script>
   <script src="<?= site_url('assets/plugins/validation/jquery.validate.min.js')?>"></script>
	<script src="<?= site_url('assets/plugins/validation/validation-script.js')?>"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>

    <!--BS Scripts-->
    <script src="<?= site_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= site_url('assets/js/main.js')?>"></script>
  </body>
</html>