<aside class="sidebar-wrapper">
          <div class="sidebar-header">
            <div class="logo-icon">
              <img src="<?= base_url('assets/images/logo-icon.png')?>" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
              <h5 class="mb-0">Fruitkha-Admin</h5>
              <h5 class="mb-0"><?= session()->name; ?></h5>
            </div>
            <div class="sidebar-close ">
              <span class="material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="sidebar-nav" data-simplebar="true">
            
              <!--navigation-->
              <ul class="metismenu" id="menu">
                <li>
                  <a href="<?= base_url('/')?>">
                    <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="menu-title">Dashboard</div>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Application</div>
                  </a>
                  <ul>
                    <li> <a href="app-emailbox.html"><span class="material-symbols-outlined">arrow_right</span>Email</a>
                    </li>
                    <li> <a href="app-chat-box.html"><span class="material-symbols-outlined">arrow_right</span>Chat Box</a>
                    </li>
                    <li> <a href="app-file-manager.html"><span class="material-symbols-outlined">arrow_right</span>File Manager</a>
                    </li>
                    <li> <a href="app-contact-list.html"><span class="material-symbols-outlined">arrow_right</span>Contatcs</a>
                    </li>
                    <li> <a href="app-to-do.html"><span class="material-symbols-outlined">arrow_right</span>Todo List</a>
                    </li>
                    <li> <a href="app-invoice.html"><span class="material-symbols-outlined">arrow_right</span>Invoice</a>
                    </li>
                    <li> <a href="app-fullcalender.html"><span class="material-symbols-outlined">arrow_right</span>Calendar</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                  <a href="<?= base_url('/category/create')?>" class="has-arrow">
                      <div class="parent-icon"><span class="material-symbols-outlined">widgets</span>
                      </div>
                      <div class="menu-title">Add Category</div>
                    </a>
                </li>
                <li>
                  <a class="has-arrow" href="<?= base_url('/brand/create')?>">
                      <div class="parent-icon"><span class="material-symbols-outlined">redeem</span>
                      </div>
                      <div class="menu-title">Add Brand</div>
                    </a>
                </li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">widgets</span>
                    </div>
                    <div class="menu-title">Products</div>
                  </a>
                  <ul>
                    <li> <a href="<?= base_url('/product')?>"><span class="material-symbols-outlined">arrow_right</span>Product List</a>
                    </li>
                    <li> <a href="<?= base_url('/product/entry')?>"><span class="material-symbols-outlined">arrow_right</span>Add New Product</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="menu-title">eCommerce</div>
                  </a>
                  <ul>
                    
                    <li> <a href="<?= base_url('/customer')?>"><span class="material-symbols-outlined">arrow_right</span>Customers</a>
                    </li>
                    <li> <a href="<?= base_url('customer/details')?>"><span class="material-symbols-outlined">arrow_right</span>Customer Details</a>
                    </li>
                    <li> <a href="<?= base_url('/order')?>"><span class="material-symbols-outlined">arrow_right</span>Orders</a>
                    </li>
                    <li> <a href="<?= base_url('/order/details')?>"><span class="material-symbols-outlined">arrow_right</span>Order Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">redeem</span>
                    </div>
                    <div class="menu-title">Manage Stock</div>
                  </a>
                  <ul>
                  <li> <a href="<?= base_url('/stock')?>"><span class="material-symbols-outlined">arrow_right</span>Available Stock</a>
                    </li>
                    <li> <a href="component-accordions.html"><span class="material-symbols-outlined">arrow_right</span>Re-stock</a>
                    </li>
                  </ul>
                </li>
               
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="menu-title">Complain</div>
                  </a>
                  <ul>
                    <li> <a href="<?= base_url('/Complain')?>"><span class="material-symbols-outlined">arrow_right</span>Complain List</a>
                    </li>                    
                  </ul>
                </li> 
                <li class="menu-label">Pages</li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">lock_open</span>
                    </div>
                    <div class="menu-title">Authentication</div>
                  </a>
                  <ul>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Basic</a>
                      <ul>
                        <li><a href="auth-basic-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-basic-register.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-basic-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-basic-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Cover</a>
                      <ul>
                        <li><a href="auth-cover-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-cover-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-cover-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-cover-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Boxed</a>
                      <ul>
                        <li><a href="auth-boxed-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-boxed-register.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-boxed-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-boxed-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="user-profile.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <div class="menu-title">User Profile</div>
                  </a>
                </li>
                <li>
                  <a href="timeline.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">hotel_class</span>
                    </div>
                    <div class="menu-title">Timeline</div>
                  </a>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">distance</span>
                    </div>
                    <div class="menu-title">Maps</div>
                  </a>
                  <ul>
                    <li> <a href="map-google-maps.html"><span class="material-symbols-outlined">arrow_right</span>Google Maps</a>
                    </li>
                    <li> <a href="map-vector-maps.html"><span class="material-symbols-outlined">arrow_right</span>Vector Maps</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!--end navigation-->

              
          </div>
          <div class="sidebar-bottom dropdown dropup-center dropup">
              <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
                <div class="user-img">
                   <img src="<?= base_url('assets/images/avatars/01.png')?>" alt="">
                </div>
                <div class="user-info">
                  <h5 class="mb-0 user-name"><?= session()->name; ?></h5>
                  <p class="mb-0 user-designation">UI Engineer</p>
                </div>
              </div>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_circle
                  </span><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  tune
                  </span><span>Settings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  dashboard
                  </span><span>Dashboard</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_balance
                  </span><span>Earnings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  cloud_download
                  </span><span>Downloads</span></a>
                </li>
                <li>
                  <div class="dropdown-divider mb-0"></div>
                </li>
                <li><a class="dropdown-item" href="<?= site_url('/signout') ?>"><span class="material-symbols-outlined me-2">
                  logout
                  </span><span>Logout</span></a>
                </li>
              </ul>
          </div>
     </aside>