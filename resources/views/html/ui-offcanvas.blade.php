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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Offcanvas</h4>

              <div class="card mb-4">
                <h5 class="card-header">Placements</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Default Offcanvas -->
                    <div class="col-lg-3 col-md-6">
                      <small class="text-light fw-semibold mb-3">Start (Default)</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasStart"
                          aria-controls="offcanvasStart"
                        >
                          Toggle Start
                        </button>
                        <div
                          class="offcanvas offcanvas-start"
                          tabindex="-1"
                          id="offcanvasStart"
                          aria-labelledby="offcanvasStartLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasStartLabel" class="offcanvas-title">Offcanvas Start</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- End Offcanvas -->
                    <div class="col-lg-3 col-md-6">
                      <small class="text-light fw-semibold mb-3">End</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd"
                        >
                          Toggle End
                        </button>
                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="offcanvasEnd"
                          aria-labelledby="offcanvasEndLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">Offcanvas End</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Top Offcanvas -->
                    <div class="col-lg-3 col-md-6">
                      <small class="text-light fw-semibold mb-3">Top</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasTop"
                          aria-controls="offcanvasTop"
                        >
                          Toggle Top
                        </button>
                        <div
                          class="offcanvas offcanvas-top"
                          tabindex="-1"
                          id="offcanvasTop"
                          aria-labelledby="offcanvasTopLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasTopLabel" class="offcanvas-title">Offcanvas Top</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body">
                            <p>
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary me-2">Continue</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Bottom Offcanvas -->
                    <div class="col-lg-3 col-md-6">
                      <small class="text-light fw-semibold mb-3">Bottom</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBottom"
                          aria-controls="offcanvasBottom"
                        >
                          Toggle Bottom
                        </button>
                        <div
                          class="offcanvas offcanvas-bottom"
                          tabindex="-1"
                          id="offcanvasBottom"
                          aria-labelledby="offcanvasBottomLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasBottomLabel" class="offcanvas-title">Offcanvas Bottom</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body">
                            <p>
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary me-2">Continue</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <h5 class="card-header">Backdrop</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Enable Body Scrolling Offcanvas -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold mb-3">Enable Body Scrolling</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasScroll"
                          aria-controls="offcanvasScroll"
                        >
                          Enable Body Scrolling
                        </button>
                        <div
                          class="offcanvas offcanvas-end"
                          data-bs-scroll="true"
                          data-bs-backdrop="false"
                          tabindex="-1"
                          id="offcanvasScroll"
                          aria-labelledby="offcanvasScrollLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasScrollLabel" class="offcanvas-title">Offcanvas Scroll</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Enable backdrop (default) Offcanvas -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold mb-3">Enable backdrop (default)</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBackdrop"
                          aria-controls="offcanvasBackdrop"
                        >
                          Enable backdrop
                        </button>
                        <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="offcanvasBackdrop"
                          aria-labelledby="offcanvasBackdropLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasBackdropLabel" class="offcanvas-title">Enable backdrop</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Enable Scrolling & Backdrop Offcanvas -->
                    <div class="col-lg-4 col-md-6">
                      <small class="text-light fw-semibold mb-3">Enable Scrolling & Backdrop</small>
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBoth"
                          aria-controls="offcanvasBoth"
                        >
                          Enable both scrolling & backdrop
                        </button>
                        <div
                          class="offcanvas offcanvas-end"
                          data-bs-scroll="true"
                          tabindex="-1"
                          id="offcanvasBoth"
                          aria-labelledby="offcanvasBothLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both scrolling & backdrop</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            
<x-footer/>