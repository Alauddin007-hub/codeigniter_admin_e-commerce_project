<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

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
								<li class="breadcrumb-item active" aria-current="page">Customer Details</li>
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


          <div class="row">
            <div class="col-12 col-lg-4 d-flex">
               <div class="card w-100">
                 <div class="card-body">
                   <div class="customer-profile text-center">
                      <img src="<?= site_url('assets/images/avatars/01.png')?>" width="120" height="120" class="rounded-circle" alt="">
                      <div class="mt-4">
                        <h5 class="mb-1 customer-name fw-bold">Jhon Maxwell</h5>
                        <p class="mb-0 customer-designation">UI Engineer</p>
                      </div>
                       <div class="customer-social-profiles mt-4 d-flex align-items-center justify-content-center gap-3">
                          <a href="javascript:;" class="btn btn-white fs-5"><i class="bi bi-facebook me-0"></i></a>
                          <a href="javascript:;" class="btn btn-white fs-5"><i class="bi bi-linkedin me-0"></i></a>
                          <a href="javascript:;" class="btn btn-white fs-5"><i class="bi bi-twitter me-0"></i></a>
                       </div>
                   </div>
                 </div>
                 <div class="hstack align-items-center justify-content-between p-3 border-top">
                  <div class="">
                     <p class="mb-1 font-text1">Following</p>
                     <h6 class="mb-0 fw-bold">845</h6>
                  </div>
                  <div class="vr"></div>
                  <div class="">
                    <p class="mb-1 font-text1">Projects</p>
                    <h6 class="mb-0 fw-bold">124</h6>
                 </div>
                 <div class="vr"></div>
                 <div class="">
                  <p class="mb-1 font-text1">Subscribers</p>
                  <h6 class="mb-0 fw-bold">2085</h6>
               </div>
               </div>
               <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <b>Address</b>
                    <br>
                    123 Street Name, City, Australia
                </li>
                <li class="list-group-item">
                  <b>Email</b>
                  <br>
                  mail@example.com
              </li>
              <li class="list-group-item">
                <b>Phone</b>
                <br>
                Toll Free (123) 472-796
                <br>
                Mobile : +91-9910XXXX
              </li>
             </ul>
               </div>
           </div>
           
           <div class="col-12 col-lg-8 d-flex">
            <div class="card w-100">
              <div class="card-body">
                <h5 class="mb-3 fw-bold">Send Notes to Customer</h5>
                <textarea class="form-control" placeholder="write somthing" rows="4" cols="4"></textarea>
                <button class="btn btn-outline-primary w-100 mt-3">Add Meesage</button>
              </div>
              <div class="customer-notes mb-3">
                <div class="bg-light mx-3 my-0 rounded-3 p-3">
                  <div class="notes-item">
                    <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content
                      of a page when looking at its layout.
                      of letters, as opposed to using 'Content here, content here.</p>
                    <p class="mb-0 text-end fst-italic text-secondary">10 Apr, 2022</p>
                  </div>
                  <hr class="border-dotted">
                  <div class="notes-item">
                    <p class="mb-2">Various versions have evolved over the years, sometimes</p>
                    <p class="mb-0 text-end fst-italic text-secondary">15 Apr, 2022</p>
                  </div>
                  <hr>
                  <div class="notes-item">
                    <p class="mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some</p>
                    <p class="mb-0 text-end fst-italic text-secondary">15 Apr, 2022</p>
                  </div>
                  <hr>
                  <div class="notes-item">
                    <p class="mb-2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate. quae ab illo inventore veritatis et quasi architecto</p>
                    <p class="mb-0 text-end fst-italic text-secondary">18 Apr, 2022</p>
                  </div>
                  <hr>
                  <div class="notes-item">
                    <p class="mb-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                    <p class="mb-0 text-end fst-italic text-secondary">22 Apr, 2022</p>
                  </div>
                  <hr>
                  <div class="notes-item">
                    <p class="mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                    <p class="mb-0 text-end fst-italic text-secondary">22 Apr, 2022</p>
                  </div>
                  <hr>
                  <div class="notes-item">
                    <p class="mb-2">On the other hand, we denounce with righteous indignation and dislike pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those</p>
                    <p class="mb-0 text-end fst-italic text-secondary">22 Apr, 2022</p>
                  </div>
                </div>
              </div>
            </div>
         </div>
        </div><!--end row-->


        <div class="card">
          <div class="card-body">
             <h5 class="mb-3 fw-bold">Orders<span class="fw-light ms-2">(98)</span></h5>
             <div class="product-table">
              <div class="table-responsive white-space-nowrap">
                 <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Order</th>
                      <th>Expense</th>
                      <th>Payment Status</th>
                      <th>Order Status</th>
                      <th>Delivery Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>#2453</td>
                       <td>$865</td>
                       <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                       <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                       <td>Cash on delivery</td>
                       <td>Jun 12, 12:56 PM</td>
                       <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                     </tr>
                     <tr>
                      <td>#7845</td>
                      <td>$427</td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td>#9635</td>
                      <td>$123</td>
                      <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td>#2415</td>
                      <td>$986</td>
                      <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                      <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td>#3526</td>
                      <td>$104</td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td>#7845</td>
                      <td>$368</td>
                      <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td>#256</td>
                      <td>$865</td>
                      <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                      <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                      <td>Cash on delivery</td>
                      <td>Jun 12, 12:56 PM</td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-eye-fill me-2"></i>View</a></li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bi bi-box-arrow-right me-2"></i>Export</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="javascript:;"><i class="bi bi-trash-fill me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                       </td>
                    </tr>
                    
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-4">
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
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <h5 class="mb-3 fw-bold">Ratings & Reviews<span class="fw-light ms-2">(86)</span></h5>
            <div class="product-table">
              <div class="table-responsive white-space-nowrap">
                 <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Product Name</th>
                      <th>Rating</th>
                      <th>Review</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>
                          <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                       </td>
                       <td>
                        <div class="product-rating text-warning">
                          <i class="bi bi-star-half"></i>
                          <i class="bi bi-star-half"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                       </div>
                       </td>
                       <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                       <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                       <td>Jun 12, 12:56 PM</td>
                     </tr>
                     <tr>
                      <td>
                         <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                      </td>
                      <td>
                       <div class="product-rating text-warning">
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                      </div>
                      </td>
                      <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td>Jun 12, 12:56 PM</td>
                    </tr>
                    <tr>
                      <td>
                         <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                      </td>
                      <td>
                       <div class="product-rating text-warning">
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                      </div>
                      </td>
                      <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                      <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                      <td>Jun 12, 12:56 PM</td>
                    </tr>
                    <tr>
                      <td>
                         <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                      </td>
                      <td>
                       <div class="product-rating text-warning">
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                      </div>
                      </td>
                      <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                      <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                      <td>Jun 12, 12:56 PM</td>
                    </tr>
                    <tr>
                      <td>
                         <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                      </td>
                      <td>
                       <div class="product-rating text-warning">
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                      </div>
                      </td>
                      <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                      <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                      <td>Jun 12, 12:56 PM</td>
                    </tr>
                    <tr>
                      <td>
                         <a href="javascript:;" class="product-title">Women Pink Floral Printed Panelled Pure Cotton</a>
                      </td>
                      <td>
                       <div class="product-rating text-warning">
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-half"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                      </div>
                      </td>
                      <td width="400">This is very awesome product. It has good quality. I suggest everyone to use this product. It is available at very low amount.</td>
                      <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                      <td>Jun 12, 12:56 PM</td>
                     </tr>
                 
                   </tbody>
                 </table>
              </div>
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

    <!--BS Scripts-->
    <script src="<?= site_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= site_url('assets/js/main.js')?>"></script>
       new PerfectScrollbar(".customer-notes")
    </script>
  </body>
</html>