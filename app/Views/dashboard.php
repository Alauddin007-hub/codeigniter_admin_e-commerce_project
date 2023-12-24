<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" >
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet">
	  <script src="assets/js/pace.min.js"></script>
    <!--Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/icons.css" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">
    <link href="assets/css/semi-dark-theme.css" rel="stylesheet">
    <link href="assets/css/minimal-theme.css" rel="stylesheet">
    <link href="assets/css/shadow-theme.css" rel="stylesheet">
     
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

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
          <div class="card radius-10 border-0 border-start border-primary border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Orders</p>
                  <h4 class="mb-0 text-primary"><?= $totalorder ?></h4>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                  <i class="bi bi-basket2-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10 border-0 border-start border-secondary border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Brand</p>
                  <h4 class="mb-0 text-primary"><?= $totalbrand ?></h4>
                </div>
                <div class="ms-auto widget-icon bg-secondary text-white">
                  <i class="bi bi-bookmarks-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10 border-0 border-start border-info border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Category</p>
                  <h4 class="mb-0 text-primary"><?= $totalcategory ?></h4>
                </div>
                <div class="ms-auto widget-icon bg-info text-white">
                  <i class="bi bi-nvidia"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <!-- <div class="col">
          <div class="card radius-10 border-0 border-start border-success border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Revenue</p>
                  <h4 class="mb-0 text-success">$1,245</h4>
                </div>
                <div class="ms-auto widget-icon bg-success text-white">
                  <i class="bi bi-currency-dollar"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div> -->
         <div class="col">
          <div class="card radius-10 border-0 border-start border-success border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Product</p>
                  <h4 class="mb-0 text-success"><?= $totalproduct ?></h4>
                </div>
                <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-backpack4"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <!-- <div class="col">
          <div class="card radius-10 border-0 border-start border-danger border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Bounce Rate</p>
                  <h4 class="mb-0 text-danger">24.25%</h4>
                </div>
                <div class="ms-auto widget-icon bg-danger text-white">
                  <i class="bi bi-graph-down-arrow"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div> -->
         <div class="col">
          <div class="card radius-10 border-0 border-start border-danger border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">Total Customer</p>
                  <h4 class="mb-0 text-danger"><?= $totalcustomer ?></h4>
                </div>
                <div class="ms-auto widget-icon bg-danger text-white">
                  <i class="bi bi-person-check"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10 border-0 border-start border-warning border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                  <p class="mb-1">New Users</p>
                  <h4 class="mb-0 text-warning"><?= $totaluser?></h4>
                </div>
                <div class="ms-auto widget-icon bg-warning text-dark">
                  <i class="bi bi-people-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
      </div><!--end row-->

      
       <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Sales Overview</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                   <div id="chart1"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Statistic</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                   <div id="chart2"></div>
              </div>
              <ul class="list-group list-group-flush mb-0">
                <li class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge bg-success rounded-pill">25%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge bg-primary rounded-pill">65%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge bg-danger rounded-pill">10%</span>
                </li>
              </ul>
            </div>
          </div>

       </div><!--end row-->


       <div class="row">
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">Team Members</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/01.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">John Michael</h6>
                       <span class="badge bg-success bg-success-subtle text-success border border-opacity-25 border-success">ONLINE</span>
                     </div>
                     <div class="">
                       <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/02.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Samantha Ivy</h6>
                       <span class="badge bg-danger-subtle text-danger border border-opacity-25 border-danger">IN MEETING</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/03.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Alex Smith</h6>
                       <span class="badge bg-warning-subtle text-warning border border-opacity-25 border-warning">OFFLINE</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/04.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Alex Smith</h6>
                       <span class="badge bg-danger-subtle text-danger border border-opacity-25 border-danger">OFFLINE</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/02.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Samantha</h6>
                       <span class="badge bg-success-subtle text-success border border-opacity-25 border-success">IN MEETING</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">To do list</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3 border-start border-success border-4 border-0 px-2 py-1">
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                       <span class="">10:56 PM</span>
                     </div>
                     <div class="form-check form-switch form-check-success border-0">
                       <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-danger border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-danger border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-primary border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-primary border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-warning border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-warning border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-info border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-info border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">Projects</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/apple.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/bootstrap.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/google-2.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/spotify.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/outlook.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
         </div>
       </div><!--end row-->


       <div class="row">
          <div class="col-12 col-lg-12 col-xl-6">
             <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Monthly Views</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
               </div>
               <div class="card-body">
                  <div id="chart3"></div>
               </div>
             </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Monthly Users</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="chart4"></div>
              </div>
            </div>
         </div>
       </div><!--end row-->


       <div class="card">
        <div class="card-body">
          <div class="customer-table">
            <div class="table-responsive white-space-nowrap">
               <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th>Order Id</th>
                    <th>Price</th>
                    <th>Customer</th>
                    <th>Payment Status</th>
                    <th>Completed Payment</th>
                    <th>Delivery Type</th>
                    <th>Date</th>
                  </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>
                       <input class="form-check-input" type="checkbox">
                     </td>
                     <td>
                      <a href="javascript:;">#2415</a>
                     </td>
                     <td>$98</td>
                     <td>
                      <a class="d-flex align-items-center gap-3" href="javascript:;">
                        <div class="customer-pic">
                          <img src="assets/images/avatars/01.png" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                      </a>
                     </td>
                     <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                     <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                     <td>Cash on delivery</td>
                     <td>Nov 12, 10:45 PM</td>
                   </tr>
                   <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#7845</a>
                    </td>
                    <td>$110</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/02.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#5674</a>
                    </td>
                    <td>$86</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/03.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#6678</a>
                    </td>
                    <td>$78</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/04.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#2367</a>
                    </td>
                    <td>$69</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/05.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#9870</a>
                    </td>
                    <td>$49</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/06.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#3456</a>
                    </td>
                    <td>$65</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="assets/images/avatars/07.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
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
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
   <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
   <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
   <script src="assets/plugins/apex/apexcharts.min.js"></script>
   <script src="assets/js/index.js"></script>
    <!--BS Scripts-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>