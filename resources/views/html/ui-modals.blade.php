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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Modals</h4>

              <!-- Bootstrap modals -->
              <div class="card mb-4">
                <h5 class="card-header">Bootstrap modals</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Default</small>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Name</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Email</label>
                                    <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">DOB</label>
                                    <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Vertically Centered Modal -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Vertically centered</small>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                        >
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Name"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Email</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">DOB</label>
                                    <input
                                      type="text"
                                      id="dobWithTitle"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Slide from Top Modal -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Slide from Top</small>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop">
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      id="nameSlideTop"
                                      class="form-control"
                                      placeholder="Enter Name"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailSlideTop" class="form-label">Email</label>
                                    <input
                                      type="text"
                                      id="emailSlideTop"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobSlideTop" class="form-label">DOB</label>
                                    <input
                                      type="text"
                                      id="dobSlideTop"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Modal with YouTube Video -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">YouTube Video</small>
                      <div class="mt-3">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#youTubeModal"
                          data-theVideo="https://www.youtube.com/embed/EngW7tLk6R8"
                        >
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="youTubeModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <iframe height="350" src="https://www.youtube.com/embed/EngW7tLk6R8"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Toggle Between Modals -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Toggle Between Modals</small>
                      <div class="mt-3">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalToggle"
                        >
                          Launch modal
                        </button>

                        <!-- Modal 1-->
                        <div
                          class="modal fade"
                          id="modalToggle"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Modal 1</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">Show a second modal and hide this one with the button below.</div>
                              <div class="modal-footer">
                                <button
                                  class="btn btn-primary"
                                  data-bs-target="#modalToggle2"
                                  data-bs-toggle="modal"
                                  data-bs-dismiss="modal"
                                >
                                  Open second modal
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal 2-->
                        <div
                          class="modal fade"
                          id="modalToggle2"
                          aria-hidden="true"
                          aria-labelledby="modalToggleLabel2"
                          tabindex="-1"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel2">Modal 2</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">Hide this modal and show the first with the button below.</div>
                              <div class="modal-footer">
                                <button
                                  class="btn btn-primary"
                                  data-bs-target="#modalToggle"
                                  data-bs-toggle="modal"
                                  data-bs-dismiss="modal"
                                >
                                  Back to first
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Fullscreen Modal -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Fullscreen</small>
                      <div class="mt-3">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#fullscreenModal"
                        >
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalFullTitle">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                                <p>
                                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                  facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                  at eros.
                                </p>
                                <p>
                                  Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                  lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>
                                  Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                  scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                  auctor fringilla.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Modal Sizes -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold">Sizes</small>
                      <!-- Small Modal -->
                      <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="nameSmall" class="form-label">Name</label>
                                  <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name" />
                                </div>
                              </div>
                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label class="form-label" for="emailSmall">Email</label>
                                  <input type="text" class="form-control" id="emailSmall" placeholder="xxxx@xxx.xx" />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobSmall" class="form-label">DOB</label>
                                  <input id="dobSmall" type="text" class="form-control" placeholder="DD / MM / YY" />
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Large Modal -->
                      <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="nameLarge" class="form-label">Name</label>
                                  <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
                                </div>
                              </div>
                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailLarge" class="form-label">Email</label>
                                  <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobLarge" class="form-label">DOB</label>
                                  <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Extra Large Modal -->
                      <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="nameExLarge" class="form-label">Name</label>
                                  <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" />
                                </div>
                              </div>
                              <div class="row g-2">
                                <div class="col mb-0">
                                  <label for="emailExLarge" class="form-label">Email</label>
                                  <input type="text" id="emailExLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                                </div>
                                <div class="col mb-0">
                                  <label for="dobExLarge" class="form-label">DOB</label>
                                  <input type="text" id="dobExLarge" class="form-control" placeholder="DD / MM / YY" />
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="demo-inline-spacing">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#smallModal"
                        >
                          Small
                        </button>

                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#largeModal"
                        >
                          Large
                        </button>

                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#exLargeModal"
                        >
                          Extra Large
                        </button>
                      </div>
                    </div>

                    <!-- Modal Scroll long content -->
                    <div class="col-lg-4 col-md-3">
                      <small class="text-light fw-semibold">Scrolling long content</small>
                      <!-- Modal -->
                      <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalLongTitle">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="demo-inline-spacing">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalLong"
                        >
                          Option 1
                        </button>

                        <!-- Button ModalScrollable -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalScrollable"
                        >
                          Option 2
                        </button>
                      </div>
                    </div>

                    <!-- Modal Backdrop -->
                    <div class="col-lg-4 col-md-3">
                      <small class="text-light fw-semibold">Backdrop</small>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#backDropModal"
                        >
                          Launch modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Modal title</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBackdrop" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      id="nameBackdrop"
                                      class="form-control"
                                      placeholder="Enter Name"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBackdrop" class="form-label">Email</label>
                                    <input
                                      type="text"
                                      id="emailBackdrop"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBackdrop" class="form-label">DOB</label>
                                    <input
                                      type="text"
                                      id="dobBackdrop"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Bootstrap modals -->
            </div>
            <!-- / Content -->

           
<x-footer/>