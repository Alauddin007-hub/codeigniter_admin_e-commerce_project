<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="<?= site_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/metismenu/css/metisMenu.min.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/simplebar/css/simplebar.css')?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')?>" rel="stylesheet">
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
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
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

        <h6 class="mb-0 text-uppercase">Category List</h6>
				<hr>
				<?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        <?php endif; ?>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Category Name</th>
										<th>Category Description</th>
										<th>Publication status</th>
									</tr>
								</thead>
								<tbody>
									<?php $n = 0; foreach($items as $item): ?>
									<tr>
										<td><?= $n+1 ?></td>
										<td><?= $item['category_name'] ?></td>
										<td><?= $item['category_description'] ?></td>
										<td><?= $item['publication_status'] ?></td>
										
									</tr>
									<?php $n++; endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
                                    <th>Brand Name</th>
										<th>Brand Description</th>
										<th>Publication status</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				

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
   <script src="<?= site_url('assets/plugins/datatable/js/jquery.dataTables.min.js')?>"></script>
   <script src="<?= site_url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')?>"></script>
	 <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	 </script>
	 <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	 </script>

    <!--BS Scripts-->
    <script src="<?= site_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= site_url('assets/js/main.js')?>"></script>
  </body>
</html>