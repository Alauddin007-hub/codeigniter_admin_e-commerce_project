<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!--plugins-->
  <link href="<?= site_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet">
  <!-- loader-->
  <link href="<?= site_url('assets/css/pace.min.css') ?>" rel="stylesheet">
  <script src="<?= site_url('assets/js/pace.min.js') ?>"></script>
  <!--Styles-->
  <link href="<?= site_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= site_url('assets/css/icons.css') ?>">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="<?= site_url('assets/css/main.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/css/dark-theme.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/css/semi-dark-theme.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/css/minimal-theme.css') ?>" rel="stylesheet">
  <link href="<?= site_url('assets/css/shadow-theme.css') ?>" rel="stylesheet">

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
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
            <a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->


    <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-bold flex-wrap font-text1">
      <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">(85472)</span></a>
      <a href="javascript:;"><span class="me-1">Pending Payment</span><span class="text-secondary">(86)</span></a>
      <a href="javascript:;"><span class="me-1">Incomplete</span><span class="text-secondary">(76)</span></a>
      <a href="javascript:;"><span class="me-1">Completed</span><span class="text-secondary">(8759)</span></a>
      <a href="javascript:;"><span class="me-1">Refunded</span><span class="text-secondary">(769)</span></a>
      <a href="javascript:;"><span class="me-1">Failed</span><span class="text-secondary">(42)</span></a>
    </div>

    <div class="row g-3">
      <div class="col-auto">
        <div class="position-relative">
          <input class="form-control px-5" type="search" placeholder="Search Customers">
          <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
        </div>
      </div>
      <div class="col-auto flex-grow-1 overflow-auto">
        <div class="btn-group position-static">
          <div class="btn-group position-static">
            <button type="button" class="btn border btn-light dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
              Payment Status
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Action</a></li>
              <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
            </ul>
          </div>
          <div class="btn-group position-static">
            <button type="button" class="btn border btn-light dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
              Completed
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Action</a></li>
              <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
            </ul>
          </div>
          <div class="btn-group position-static">
            <button type="button" class="btn border btn-light dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
              More Filters
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Action</a></li>
              <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
          <button class="btn btn-light px-4"><i class="bi bi-box-arrow-right me-2"></i>Export</button>
          <button class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Add Order</button>
        </div>
      </div>
    </div><!--end row-->

    <div class="card mt-4">
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
                  <th>Customer</th>
                  <th>Payment Status</th>
                  <th>Completed Payment</th>
                  <th>Delivery Type</th>
                  <th>Price</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php //foreach ($orders as $order) : ?>
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
                <?php //endforeach; ?>

                <!-- <thead class="table-light">
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
              </thead> -->
                <!-- <tr>
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
  <script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= site_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
  <script src="<?= site_url('assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
  <script src="<?= site_url('assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>

  <!--BS Scripts-->
  <script src="<?= site_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= site_url('assets/js/main.js') ?>"></script>
</body>

</html>