<x-sidebar/>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Toasts</h4>

              <!-- Toast with Placements -->
              <div
                class="bs-toast toast toast-placement-ex m-2"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold">Bootstrap</div>
                  <small>11 mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.</div>
              </div>
              <!-- Toast with Placements -->

              <!-- Bootstrap Toasts with Placement -->
              <div class="card mb-4">
                <h5 class="card-header">Bootstrap Toasts Example With Placement</h5>
                <div class="card-body">
                  <div class="row gx-3 gy-2 align-items-center">
                    <div class="col-md-3">
                      <label class="form-label" for="selectTypeOpt">Type</label>
                      <select id="selectTypeOpt" class="form-select color-dropdown">
                        <option value="bg-primary" selected>Primary</option>
                        <option value="bg-secondary">Secondary</option>
                        <option value="bg-success">Success</option>
                        <option value="bg-danger">Danger</option>
                        <option value="bg-warning">Warning</option>
                        <option value="bg-info">Info</option>
                        <option value="bg-dark">Dark</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label" for="selectPlacement">Placement</label>
                      <select class="form-select placement-dropdown" id="selectPlacement">
                        <option value="top-0 start-0">Top left</option>
                        <option value="top-0 start-50 translate-middle-x">Top center</option>
                        <option value="top-0 end-0">Top right</option>
                        <option value="top-50 start-0 translate-middle-y">Middle left</option>
                        <option value="top-50 start-50 translate-middle">Middle center</option>
                        <option value="top-50 end-0 translate-middle-y">Middle right</option>
                        <option value="bottom-0 start-0">Bottom left</option>
                        <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                        <option value="bottom-0 end-0">Bottom right</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Bootstrap Toasts with Placement -->

              <!-- Bootstrap Toasts Styles -->
              <div class="card mb-4">
                <h5 class="card-header">Bootstrap Toasts Styles</h5>
                <div class="row g-0">
                  <div class="col-md-6 p-4">
                    <div class="text-light small fw-semibold mb-3">Default</div>
                    <div class="toast-container">
                      <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-primary"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-secondary"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-success"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-danger"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-warning"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-info"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-dark"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ui-bg-overlay-container p-4">
                    <div class="ui-bg-overlay bg-dark opacity-75 rounded-end-bottom"></div>
                    <div class="text-white small fw-semibold mb-3">Translucent</div>

                    <div class="toast-container">
                      <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-primary"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-secondary"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-success"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-danger"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-warning"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-info"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>

                      <div
                        class="bs-toast toast fade show bg-dark"
                        role="alert"
                        aria-live="assertive"
                        aria-atomic="true"
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Bootstrap</div>
                          <small>11 mins ago</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Bootstrap Toasts Styles -->
            </div>
            <!-- / Content -->

            
<x-footer/>