<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Projetin Delivery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body id="body" class="dark-sidebar">

        <div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('assets/images/logo/logo-small.png') }}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{ asset('assets/images/logo/logolar.png') }}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ asset('assets/images/logo/logolaravel.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">                    
                <div class="position-relative mx-auto">
                    <img src="{{ asset('assets/images/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">Mr. Michael Hill </h5>  
                    <p class="opacity-50 mb-0">michael.hill@exemple.com</p>          
                </div>                    
            </div>
            <div class="border-end">
                <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->
    
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>                    
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span>Analytics</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="#" class="nav-link ">Customers</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="#" class="nav-link ">Reports</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAnalytics-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">
                                    <i class="ti ti-currency-bitcoin menu-icon"></i>
                                    <span>Crypto</span>
                                </a>
                                <div class="collapse " id="sidebarCrypto">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Exchange</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Wallet</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Crypto News</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ICO List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Settings</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarCrypto-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">
                                    <i class="ti ti-brand-asana menu-icon"></i>
                                    <span>Projects</span>
                                </a>
                                <div class="collapse " id="sidebarProjects">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Clients</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Team</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Project</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Task</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Kanban Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Chat</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Users</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Project Create</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarProjects-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEcommerce">
                                    <i class="ti ti-shopping-cart menu-icon"></i>
                                    <span>Ecommerce</span>
                                </a>
                                <div class="collapse " id="sidebarEcommerce">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Products</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product Detail</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cart</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Checkout</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->

                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>pps</span><br><span class="font-10 text-secondary fw-normal">Morder Applications</span></li>

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail">
                                    <i class="ti ti-mail menu-icon"></i>
                                    <span>Email</span>
                                </a>
                                <div class="collapse " id="sidebarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Inbox</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Read Email</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmail-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="ti ti-brand-hipchat menu-icon"></i><span>Chat</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="ti ti-headphones menu-icon"></i><span>Contact List</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="ti ti-calendar menu-icon"></i><span>Calendar</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="ti ti-file-invoice menu-icon"></i><span>Invoice</span></a>
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>omponents</span><br><span class="font-10 text-secondary fw-normal">Bootstrap & Custom</span></li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarElements">
                                    <i class="ti ti-planet menu-icon"></i>
                                <span>UI Elements</span>
                                </a>
                                <div class="collapse " id="sidebarElements">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Alerts</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Avatar</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Buttons</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Badges</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cards</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Carousels</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dropdowns</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Grids</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Images</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">List</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Modals</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Navs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Navbar</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Paginations</a>
                                        </li><!--end nav-item-->   
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Popover & Tooltips</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Progress</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Spinners</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tabs & Accordions</a>
                                        </li><!--end nav-item-->                               
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Typography</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Videos</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarElements-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                    <i class="ti ti-chart-bubble menu-icon"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <div class="collapse " id="sidebarAdvancedUI">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Animation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Clip Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dragula</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">File Manager</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Highlight</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Range Slider</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ratings</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ribbons</a>
                                        </li><!--end nav-item-->                                  
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Sweet Alerts</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Toasts</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAdvancedUI-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ti ti-forms menu-icon"></i>
                                    <span>Forms</span>
                                </a>
                                <div class="collapse " id="sidebarForms">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Basic Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Advance Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Validation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Wizard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Editors</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">File Upload</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Image Crop</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarForms-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCharts">
                                    <i class="ti ti-chart-donut menu-icon"></i>
                                <span>Charts</span>
                                </a>
                                <div class="collapse " id="sidebarCharts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Apex</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">JustGage</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Chartjs</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Toast</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarCharts-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="ti ti-table menu-icon"></i>
                                    <span>Tables</span>
                                </a>
                                <div class="collapse " id="sidebarTables">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Basic</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Datatables</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Editable</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarTables-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="ti ti-parachute menu-icon"></i>
                                <span>Icons</span>
                                </a>
                                <div class="collapse " id="sidebarIcons">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Material Design</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Font awesome</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tabler</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Feather</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarIcons-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ti ti-map menu-icon"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="collapse " id="sidebarMaps">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Google Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Leaflet Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Vector Maps</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarMaps-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                    <i class="ti ti-target menu-icon"></i>
                                    <span>Email Templates</span>
                                </a>
                                <div class="collapse " id="sidebarEmailTemplates">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Basic Action Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Alert Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Billing Email</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmailTemplates-->
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>rafted</span><br><span class="font-10 text-secondary fw-normal">Unique Extra Pages</span></li>  
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ti ti-file-diff menu-icon"></i>
                                    <span>Pages</span>
                                </a>
                                <div class="collapse " id="sidebarPages">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="#">Profile</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tour</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Timeline</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Treeview</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Starter Page</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pricing</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blogs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">FAQs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gallery</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarPages-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuthentication">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                    <span>Authentication</span>
                                </a>
                                <div class="collapse " id="sidebarAuthentication">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="#">Log in</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Register</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Re-Password</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lock Screen</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Error 404</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Error 500</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAuthentication-->
                            </li><!--end nav-item-->
                        </ul>
                        <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                            <li>
                                <div class="update-msg text-center position-relative">
                                    <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                                    <img src="assets/images/speaker-light.png" alt="" class="" height="110">
                                    <h5 class="mt-0">Mannat Themes</h5>
                                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                                </div>
                            </li>
                        </ul><!--end navbar-nav--->
                    </div><!--end sidebarCollapse-->
                </div>
            </div>    
        </div>

        <div class="topbar">            
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="" class="thumb-xxs rounded">
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/spain_flag.jpg') }}" alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/germany_flag.jpg') }}" alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/french_flag.jpg') }}" alt="" height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->
            
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Emails <span class="badge bg-soft-primary badge-pill">3</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="{{ asset('assets/images/user-4.jpg') }}" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-chart-arcs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-device-computer-camera"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">                                                    
                                            <i class="ti ti-diamond"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-drone"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-users"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/user-4.jpg') }}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">Admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">Maria Gibson <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="pages-profile.html"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                        <a class="dropdown-item" href="crypto-settings.html"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="auth-login.html"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                    </div>
                    </li><!--end topbar-profile-->
                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li>   
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li> 
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>                       
                </ul>
            </nav>
            <!-- end navbar-->
        </div>

        {{ $slot }}

        <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/crypto-wallet.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>