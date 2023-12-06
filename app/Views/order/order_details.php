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
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Order Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
                <a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
              <div class="d-flex flex-lg-row flex-column align-items-start align-items-lg-center justify-content-between gap-3">
                 <div class="flex-grow-1">
                   <h4 class="fw-bold">Order #849</h4>
                   <p class="mb-0">Customer ID : <a href="javascript:;">6589743</a></p>
                 </div>
                 <div class="overflow-auto">
                  <div class="btn-group position-static">
                    <div class="btn-group position-static">
                      <button type="button" class="btn btn-outline-primary px-4">
                        <i class="bi bi-printer-fill me-2"></i>Print
                      </button>
                    </div>
                    <div class="btn-group position-static">
                      <button type="button" class="btn btn-outline-primary px-4">
                        <i class="bi bi-arrow-clockwise me-2"></i>Refund
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                    <div class="btn-group position-static">
                      <button type="button" class="btn btn-outline-primary dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                        More Actions
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                  </div>  
                </div>
              </div>
          </div>
        </div>

         <div class="row">
            <div class="col-12 col-lg-8 d-flex">
               <div class="card w-100">
                <div class="card-body">
                  <h5 class="mb-3 fw-bold">Wishlist<span class="fw-light ms-2">(46)</span></h5>
                  <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                       <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                     
                      <th>Product Name</th>
                      <th>Color</th>
                      <th>Size</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                    </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/05.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                       <td>Blue</td>
                       <td>Large</td>
                       <td>2</td>
                       <td>$59</td>
                       <td>189</td>
                     </tr>
                     <tr>
                      <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/06.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                      <td>Blue</td>
                      <td>Large</td>
                      <td>2</td>
                      <td>$59</td>
                      <td>189</td>
                    </tr>
                    <tr>
                      <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/07.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                      <td>Blue</td>
                      <td>Large</td>
                      <td>2</td>
                      <td>$59</td>
                      <td>189</td>
                    </tr>
                    <tr>
                      <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/08.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                      <td>Blue</td>
                      <td>Large</td>
                      <td>2</td>
                      <td>$59</td>
                      <td>189</td>
                    </tr>
                    <tr>
                      <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/05.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                      <td>Blue</td>
                      <td>Large</td>
                      <td>2</td>
                      <td>$59</td>
                      <td>189</td>
                    </tr>
					<tr>
                      <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="<?= site_url('assets/images/products/06.webp')?>" alt="">
                            </div>
						   <div class="product-info">
						    <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
						    <p class="mb-0 product-category">Category : Fashion</p>
						   </div>
						 </div>
                       </td>
                      <td>Blue</td>
                      <td>Large</td>
                      <td>2</td>
                      <td>$59</td>
                      <td>189</td>
                    </tr>
                   </tbody>
                 </table>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-bold">Items subtotal :</p>
                    <p class="mb-0 fw-bold">$8495</p>
                  </div>
                </div>
               </div>
            </div>
            <div class="col-12 col-lg-4 d-flex">
              <div class="w-100">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4 fw-bold">Summary</h4>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="fw-semi-bold">Items subtotal :</p>
                      <p class="fw-semi-bold">$891</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="fw-semi-bold">Discount :</p>
                      <p class="text-danger fw-semi-bold">-$48</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="fw-semi-bold">Tax :</p>
                      <p class="fw-semi-bold">$156.70</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="fw-semi-bold">Subtotal :</p>
                      <p class="fw-semi-bold">$756</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="fw-semi-bold">Shipping Cost :</p>
                      <p class="fw-semi-bold">$50</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between border-top pt-4">
                    <h5 class="mb-0 fw-bold">Total :</h5>
                    <h5 class="mb-0 fw-bold">$925.44</h5>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4 fw-bold">Order Status</h4>
                  <label class="form-label">Payment status</label>
                  <select class="form-select mb-4">
                    <option value="cod">Processing</option>
                    <option value="card">Done</option>
                    <option value="paypal">Pending</option>
                  </select>
                  <label class="form-label">Completed status</label>
                  <select class="form-select">
                    <option value="cod">Complete</option>
                    <option value="card">Done</option>
                    <option value="paypal">Pending</option>
                  </select>
                </div>
              </div>
            </div>
           </div>
         </div><!--end row-->


         <h5 class="fw-bold mb-4">Billing Details</h5>
         <div class="card">
            <div class="card-body">
              <div class="row g-3 row-cols-1 row-cols-lg-4">
                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="detail-info">
                       <p class="fw-bold mb-1">Customer Name</p>
                       <a href="javascript:;" class="mb-0">Jhon Maxwell</a>
                    </div>
                 </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Email</h6>
                      <a href="javascript:;" class="mb-0">abc@example.com</a>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Phone</h6>
                      <a href="javascript:;" class="mb-0">+01-585XXXXXXX</a>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Shipping Date</h6>
                      <p class="mb-0">15 Dec, 2022</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-gift-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Gift Order</h6>
                      <p  class="mb-0">Gift voucher has available</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-house-door-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Address 1</h6>
                      <p  class="mb-0">123 Street Name, City, Australia</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="d-flex align-items-start gap-3 border p-3 rounded">
                    <div class="detail-icon fs-5">
                      <i class="bi bi-house-fill"></i>
                    </div>
                    <div class="detail-info">
                      <h6 class="fw-bold mb-1">Shipping Address</h6>
                      <p  class="mb-0">198 Street Name, City, Inited States of America</p>
                    </div>
                  </div>
                </div>
                
              </div><!--end row-->
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

    <!--BS Scripts-->
    <script src="<?= site_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= site_url('assets/js/main.js')?>"></script>
  </body>
</html>