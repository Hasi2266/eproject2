<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.png">

    <title>Category</title>

    <!-- vendor css -->
    <link href="<?php echo base_url();?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

	<link href="<?php echo base_url();?>/lib/prismjs/themes/prism-tomorrow.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cassie.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">



</head>

<div class="sidebar">
    <div class="sidebar-header">
        <div>
            <a href="../index.html" class="sidebar-logo"><span>cassie</span></a>
            <small class="sidebar-logo-headline">Responsive Dashboard Template</small>
        </div>
    </div>
    <!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">Template Pages</label></li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="box"></i> Dashboard</a>
                <nav class="nav nav-sub">
                    <a href="dashboard-one.html" class="nav-sub-link">Analytics &amp; Monitoring</a>
                    <a href="dashboard-two.html" class="nav-sub-link">Projects &amp; Web Services</a>
                    <a href="dashboard-three.html" class="nav-sub-link">Blog &amp; Social Media</a>
                </nav>
            </li>
			<li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i> Package</a>
                <nav class="nav nav-sub">                                        
                    <a href="<?php echo base_url();?>index.php/AdminPackage" class="nav-sub-link">Add Package</a>
                    <a href="app-chat.html" class="nav-sub-link">Chat</a>
                    <a href="app-mail.html" class="nav-sub-link">Mail</a>
                </nav>
            </li>
			<li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i> Categories</a>
                <nav class="nav nav-sub">                                        
                    <a href="<?php echo base_url();?>index.php/AdminCategory" class="nav-sub-link">Add Category</a>
                    <a href="app-chat.html" class="nav-sub-link">Chat</a>
                    <a href="app-mail.html" class="nav-sub-link">Mail</a>
                </nav>
            </li>
			<li class="nav-item">
                    <a href="" class="nav-link with-sub"><i data-feather="layout"></i> Service</a>
                    <nav class="nav nav-sub">
                        <a href="<?php echo base_url();?>index.php/AdminService" class="nav-sub-link">Cretae Service</a>
                        <a href="app-chat.html" class="nav-sub-link">Chat</a>
                        <a href="app-mail.html" class="nav-sub-link">Mail</a>
                    </nav>
                </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i> App Pages</a>
                <nav class="nav nav-sub">                                        
                    <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
                    <a href="app-chat.html" class="nav-sub-link">Chat</a>
                    <a href="app-mail.html" class="nav-sub-link">Mail</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="lock"></i> Authentication</a>
                <nav class="nav nav-sub">
                    <a href="page-signin.html" class="nav-sub-link">Sign In</a>
                    <a href="page-signup.html" class="nav-sub-link">Sign Up</a>
                    <a href="page-forgot.html" class="nav-sub-link">Forgot Password</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="x-circle"></i> Error Pages</a>
                <nav class="nav nav-sub">
                    <a href="page-404.html" class="nav-sub-link">Page Not Found</a>
                    <a href="page-500.html" class="nav-sub-link">Internal Server Error</a>
                    <a href="page-503.html" class="nav-sub-link">Service Unavailable</a>
                    <a href="page-505.html" class="nav-sub-link">Forbidden Access</a>
                </nav>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link with-sub "><i data-feather="user"></i> User Pages</a>
                <nav class="nav nav-sub">
                    <a href="page-profile.html" class="nav-sub-link">User Profile</a>
                    <a href="page-timeline.html" class="nav-sub-link">Timeline</a>
                    <a href="page-people.html" class="nav-sub-link">People</a>
                    <a href="page-settings.html" class="nav-sub-link ">Profile Settings</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="file-text"></i> Extras</a>
                <nav class="nav nav-sub">
                    <a href="page-invoice.html" class="nav-sub-link">Invoice</a>
                    <a href="page-pricing.html" class="nav-sub-link">Pricing</a>
                </nav>
            </li>
            <li class="nav-item show">
                <a href="" class="nav-link with-sub active"><i data-feather="file-text"></i> Services</a>
                <nav class="nav nav-sub">
                    <a href="services.html" class="nav-sub-link active">Create Service</a>
                    <a href="page-pricing.html" class="nav-sub-link  ">Pricing</a>
                </nav>
            </li>
            <li class="nav-label"><label class="content-label">UI Design Library</label></li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="book"></i> Content</a>
                <nav class="nav nav-sub">
                    <a href="../components/con-grid.html" class="nav-sub-link">Grid System</a>
                    <a href="../components/con-icons.html" class="nav-sub-link">Icons</a>
                    <a href="../components/con-images.html" class="nav-sub-link">Images</a>
                    <a href="../components/con-typography.html" class="nav-sub-link">Typography</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layers"></i> Components</a>
                <nav class="nav nav-sub">
                    <a href="../components/com-accordion.html" class="nav-sub-link">Accordion</a>
                    <a href="../components/com-alerts.html" class="nav-sub-link">Alerts</a>
                    <a href="../components/com-avatar.html" class="nav-sub-link">Avatar</a>
                    <a href="../components/com-badge.html" class="nav-sub-link">Badge</a>
                    <a href="../components/com-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a>
                    <a href="../components/com-buttons.html" class="nav-sub-link">Buttons</a>
                    <a href="../components/com-button-groups.html" class="nav-sub-link">Button Groups</a>
                    <a href="../components/com-cards.html" class="nav-sub-link">Cards</a>
                    <a href="../components/com-carousel.html" class="nav-sub-link">Carousel</a>
                    <a href="../components/com-collapse.html" class="nav-sub-link">Collapse</a>
                    <a href="../components/com-dropdown.html" class="nav-sub-link">Dropdown</a>
                    <a href="../components/com-list-group.html" class="nav-sub-link">List Group</a>
                    <a href="../components/com-marker.html" class="nav-sub-link">Marker</a>
                    <a href="../components/com-media-object.html" class="nav-sub-link">Media Object</a>
                    <a href="../components/com-modal.html" class="nav-sub-link">Modal</a>
                    <a href="../components/com-navs.html" class="nav-sub-link">Navs</a>
                    <a href="../components/com-navbar.html" class="nav-sub-link">Navbar</a>
                    <a href="../components/com-off-canvas.html" class="nav-sub-link">Off-Canvas</a>
                    <a href="../components/com-pagination.html" class="nav-sub-link">Pagination</a>
                    <a href="../components/com-placeholder.html" class="nav-sub-link">Placeholder</a>
                    <a href="../components/com-popovers.html" class="nav-sub-link">Popovers</a>
                    <a href="../components/com-progress.html" class="nav-sub-link">Progress</a>
                    <a href="../components/com-steps.html" class="nav-sub-link">Steps</a>
                    <a href="../components/com-scrollbar.html" class="nav-sub-link">Scrollbar</a>
                    <a href="../components/com-scrollspy.html" class="nav-sub-link">Scrollspy</a>
                    <a href="../components/com-spinners.html" class="nav-sub-link">Spinners</a>
                    <a href="../components/com-tab.html" class="nav-sub-link">Tab</a>
                    <a href="../components/com-toast.html" class="nav-sub-link">Toast </a>
                    <a href="../components/com-tooltips.html" class="nav-sub-link">Tooltips</a>
                    <a href="../components/com-table-basic.html" class="nav-sub-link">Table Basic</a>
                    <a href="../components/com-table-advanced.html" class="nav-sub-link">Table (Datatable)</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="monitor"></i> Utilities</a>
                <nav class="nav nav-sub">
                    <a href="../components/util-animation.html" class="nav-sub-link">Animation</a>
                    <a href="../components/util-background.html" class="nav-sub-link">Background</a>
                    <a href="../components/util-border.html" class="nav-sub-link">Border</a>
                    <a href="../components/util-display.html" class="nav-sub-link">Display</a>
                    <a href="../components/util-divider.html" class="nav-sub-link">Divider</a>
                    <a href="../components/util-flex.html" class="nav-sub-link">Flex</a>
                    <a href="../components/util-height.html" class="nav-sub-link">Height</a>
                    <a href="../components/util-margin.html" class="nav-sub-link">Margin</a>
                    <a href="../components/util-padding.html" class="nav-sub-link">Padding</a>
                    <a href="../components/util-position.html" class="nav-sub-link">Position</a>
                    <a href="../components/util-typography.html" class="nav-sub-link">Typography</a>
                    <a href="../components/util-width.html" class="nav-sub-link">Width</a>
                    <a href="../components/util-extras.html" class="nav-sub-link">Extras</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="life-buoy"></i> Forms</a>
                <nav class="nav nav-sub">
                    <a href="../components/form-elements.html" class="nav-sub-link">Form Elements</a>
                    <a href="../components/form-input-group.html" class="nav-sub-link">Input Group</a>
                    <a href="../components/form-input-tags.html" class="nav-sub-link">Input Tags</a>
                    <a href="../components/form-input-masks.html" class="nav-sub-link">Input Masks</a>
                    <a href="../components/form-validation.html" class="nav-sub-link">Form Validation</a>
                    <a href="../components/form-wizard.html" class="nav-sub-link">Form Wizard</a>
                    <a href="../components/form-text-editor.html" class="nav-sub-link">Text Editor</a>
                    <a href="../components/form-rangeslider.html" class="nav-sub-link">Range Slider</a>
                    <a href="../components/form-datepicker.html" class="nav-sub-link">Date Pickers</a>
                    <a href="../components/form-select2.html" class="nav-sub-link">Select2</a>
                    <a href="../components/form-search.html" class="nav-sub-link">Search</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="pie-chart"></i> Charts</a>
                <nav class="nav nav-sub">
                    <a href="../components/chart-flot.html" class="nav-sub-link">Flot</a>
                    <a href="../components/chart-chartjs.html" class="nav-sub-link">ChartJS</a>
                    <a href="../components/chart-peity.html" class="nav-sub-link">Peity</a>
                    <a href="../components/chart-sparkline.html" class="nav-sub-link">Sparkline</a>
                    <a href="../components/chart-morris.html" class="nav-sub-link">Morris</a>
                </nav>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="map-pin"></i> Maps</a>
                <nav class="nav nav-sub">
                    <a href="../components/map-google.html" class="nav-sub-link">Google Maps</a>
                    <a href="../components/map-leaflet.html" class="nav-sub-link">Leaflet Maps</a>
                    <a href="../components/map-vector.html" class="nav-sub-link">Vector Maps</a>
                </nav>
            </li>
        </ul>

        <hr class="mg-t-30 mg-b-25">

        <ul class="nav nav-sidebar">
            <li class="nav-item"><a href="themes.html" class="nav-link"><i data-feather="aperture"></i> Themes</a></li>
            <li class="nav-item"><a href="../docs.html" class="nav-link"><i data-feather="help-circle"></i> Documentation</a></li>
        </ul>


    </div>
    <!-- sidebar-body -->
</div>
<!-- sidebar -->

<div class="content">
    <div class="header">
        <div class="header-left">
            <a href="" class="burger-menu"><i data-feather="menu"></i></a>

            <div class="header-search">
                <i data-feather="search"></i>
                <input type="search" class="form-control" placeholder="What are you looking for?">
            </div>
            <!-- header-search -->
        </div>
        <!-- header-left -->

        <div class="header-right">
            <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>
            <div class="dropdown dropdown-notification">
                <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <h6>Notifications</h6>
                        <a href=""><i data-feather="more-vertical"></i></a>
                    </div>
                    <!-- dropdown-menu-header -->
                    <div class="dropdown-menu-body">
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                                <span>5 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                                <span>8 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                                <span>a day ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                                <span>2 days ago</span>
                            </div>
                        </a>
                    </div>
                    <!-- dropdown-menu-body -->
                    <div class="dropdown-menu-footer">
                        <a href="">View All Notifications</a>
                    </div>
                </div>
                <!-- dropdown-menu -->
            </div>
            <div class="dropdown dropdown-loggeduser">
                <a href="" class="dropdown-link" data-toggle="dropdown">
                    <div class="avatar avatar-sm">
                        <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                    </div>
                    <!-- avatar -->
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                            </div>
                            <!-- avatar -->
                            <div class="media-body mg-l-10">
                                <h6>Louise Kate Lumaad</h6>
                                <span>Administrator</span>
                            </div>
                        </div>
                        <!-- media -->
                    </div>
                    <div class="dropdown-menu-body">
                        <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                        <a href="" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
                        <a href="" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a>
                        <a href="" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
                    </div>
                </div>
                <!-- dropdown-menu -->
            </div>
        </div>
        <!-- header-right -->
    </div>
    <!-- header -->
    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                </ol>
            </nav>
            <!-- <h4 class="content-title content-title-sm">Create Service</h4> -->
        </div>
    </div>
    <!-- content-header -->
    <div class="content-body">
        <div class="row row-xs " style="margin: 20px 100px 0px 100px;">

            <div class=" col-md-12">
        
		<div class="component-section">
			<h5 id="section1" class="tx-semibold">Customers</h5>
                <table id="example2" class="table">
                    <thead>
                        <tr>
							<th class="wd-20p">Name</th>
                            <th class="wd-25p">User Name</th>
                            <th class="wd-20p">Email</th>
                            <th class="wd-15p">Projects</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($customers as $item){?>
                        <tr>
                            
							<td><?php echo $item->name?></td>
							<td><?php echo $item->username?></td>
							<td><?php echo $item->email?></td>
							<td><?php echo $item->projects?></td>
							<td><a href="<?php echo base_url();?>index.php/AdminRiders/update/<?php echo $item->customer_id;?> ">Update</a></td>
                        </tr>
					<?php } ?>
					<!-- <tr><td></td>
                            <td></td>
                           
                            <td></td></tr>   -->
                    </tbody>
                </table>
            </div>
            
                </div>
            </div>


        </div>




        <!-- component-section -->
        <!-- row -->
    </div>
    <!-- content-body -->
</div>
<!-- content -->

<script src="<?php echo base_url();?>/lib/jquery/jquery.min.js "></script>
<script src="<?php echo base_url();?>/lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="<?php echo base_url();?>/lib/feather-icons/feather.min.js "></script>
<script src="<?php echo base_url();?>/lib/perfect-scrollbar/perfect-scrollbar.min.js "></script>
<script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js "></script>

<script src="<?php echo base_url();?>/assets/js/cassie.js "></script>
<script src="<?php echo base_url();?>/lib/prismjs/prism.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/select2/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js"></script>
<!-- <script>
    $(function() {

        'use strict'

    })
</script> -->

<script>
        $(function() {
            'use strict'

            $('#example1').DataTable({
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#example2').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#example3').DataTable({
                'ajax': '../assets/data/datatable-arrays.txt',
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#example4').DataTable({
                'ajax': '../assets/data/datatable-objects.txt',
                "columns": [{
                    "data": "name"
                }, {
                    "data": "position"
                }, {
                    "data": "office"
                }, {
                    "data": "extn"
                }, {
                    "data": "salary"
                }],
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>
</body>

</html>
