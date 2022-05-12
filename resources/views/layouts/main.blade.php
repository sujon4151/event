<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/admin/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <title>{{ config('app.name', 'Event-Management') }}</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('admin/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />


    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ url('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ url('admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet"
        href="{{ url('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet"
        href="{{ url('admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
    <!-- Form Validation -->
    <link rel="stylesheet"
        href="{{ url('admin/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendor/libs/select2/select2.css') }}" />
    <!-- Helpers -->
    <script src="{{ url('admin/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('admin/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('admin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>icon</title>
                                <defs>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                                        <stop stop-color="#699AF9" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                        <stop stop-color="#FDAC41" offset="0%"></stop>
                                        <stop stop-color="#E38100" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                        <g id="Login" transform="translate(519.000000, 244.000000)">
                                            <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                <g id="icon" transform="translate(0.000000, 4.000000)">
                                                    <path
                                                        d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                        id="Combined-Shape" fill="#4880EA"></path>
                                                    <path
                                                        d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                        id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                    <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                        width="7.68181818" height="7.68181818"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">MICROXEN</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->

                    <li class="menu-item">
                        <a href="{{ url('/home') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>
                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">STUDENT &amp;
                            EVENT INFO</span>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('student.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                            <div data-i18n="Manage Student">Manage Student</div>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Event Management">Event Management</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Add Event">Add Event</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Ticket">Ticket</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">SETTINGS</span></li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Site Settings">Site Settings</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Basic Settings">Basic Settings</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="User Settings">User Settings</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="container-fluid">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item navbar-search-wrapper mb-0">
                                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                        <i class="bx bx-search-alt bx-sm"></i>
                                        <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">


                                <!-- Style Switcher -->
                                <li class="nav-item me-2 me-xl-0">
                                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                        <i class="bx bx-sm"></i>
                                    </a>
                                </li>
                                <!--/ Style Switcher -->

                                <!-- Quick links  -->
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-grid-alt bx-sm"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0">
                                        <div class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-shortcuts-list scrollable-container">
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-calendar fs-4"></i>
                                                    </span>
                                                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                    <small class="text-muted mb-0">Appointments</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-food-menu fs-4"></i>
                                                    </span>
                                                    <a href="app-invoice-list.html" class="stretched-link">Invoice
                                                        App</a>
                                                    <small class="text-muted mb-0">Manage Accounts</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-user fs-4"></i>
                                                    </span>
                                                    <a href="app-user-list.html" class="stretched-link">User App</a>
                                                    <small class="text-muted mb-0">Manage Users</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-check-shield fs-4"></i>
                                                    </span>
                                                    <a href="app-access-roles.html" class="stretched-link">Role
                                                        Management</a>
                                                    <small class="text-muted mb-0">Permission</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                                    </span>
                                                    <a href="index.html" class="stretched-link">Dashboard</a>
                                                    <small class="text-muted mb-0">User Profile</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-cog fs-4"></i>
                                                    </span>
                                                    <a href="pages-account-settings-account.html"
                                                        class="stretched-link">Setting</a>
                                                    <small class="text-muted mb-0">Account Settings</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-help-circle fs-4"></i>
                                                    </span>
                                                    <a href="pages-help-center-landing.html"
                                                        class="stretched-link">Help Center</a>
                                                    <small class="text-muted mb-0">FAQs & Articles</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-window-open fs-4"></i>
                                                    </span>
                                                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                    <small class="text-muted mb-0">Useful Popups</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Quick links -->



                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{ url('admin/assets/img/avatars/1.png') }}" alt
                                                class="rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ url('admin/assets/img/avatars/1.png') }}"
                                                                alt class="rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block lh-1">Faizul Islam</span>
                                                        <small>Admin</small>
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
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>



                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>

                        <!-- Search Small Screens -->
                        <div class="navbar-search-wrapper search-input-wrapper d-none">
                            <input type="text" class="form-control search-input container-fluid border-0"
                                placeholder="Search..." aria-label="Search..." />
                            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->
                @yield('content')


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="#" target="_blank" class="footer-link fw-semibold">Microxen Technology</a>
                        </div>
                        <div>

                            <a href="#" target="_blank" class="footer-link me-4">Contact Us</a>

                            <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Website</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ url('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ url('admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ url('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <script src="{{ url('admin/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>

    <script src="{{ url('admin/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/select2/select2.js') }}"></script>


    <!-- Flat Picker -->
    <script src="{{ url('admin/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- Row Group JS -->
    <script src="{{ url('admin/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ url('admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Row Group JS -->
    <script src="{{ url('admin/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ url('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('admin/assets/js/tables-datatables-basic.js') }}"></script>
    <script src="{{ url('admin/assets/js/dashboards-analytics.js') }}"></script>
    <script src="{{ url('admin/assets/js/form-layouts.js') }}"></script>
</body>

</html>