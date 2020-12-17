<?php
    echo view('templates/_header.php');
?>

    <body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-left">
                    <div class="navbar-brand">
                        <a class="small_menu_btn" href="javascript:void(0);"><i class="fa fa-align-left"></i></a>
                        <a href="index.html"><span>Qubes</span></a>
                    </div>
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                </div>

                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="icon-menu reports">Reports</a></li>
                            <li><a href="#" class="icon-menu project">Project</a></li>
                            <li><a href="#" class="icon-menu settings">Settings</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-envelope"></i>
                                    <span class="notification-dot bg-green"></span>
                                </a>
                                <ul class="dropdown-menu right_chat email vivify fadeIn">
                                    <li class="header">You have 4 New eMail</li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="avtar-pic w35 lbg-indigo"><span>FC</span></div>
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie <small class="float-right">12min ago</small></span>
                                                    <span class="message">New Messages</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="float-right">38min ago</small></span>
                                                    <span class="message">Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="avtar-pic w35 lbg-red"><span>FC</span></div>
                                                <div class="media-body">
                                                    <span class="name">James Wert <small class="float-right">Just now</small></span>
                                                    <span class="message">It is a long established fact that a reader will be distracted</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="avtar-pic w35 lbg-green"><span>FC</span></div>
                                                <div class="media-body">
                                                    <span class="name">James Wert <small class="float-right">Just now</small></span>
                                                    <span class="message">The point of using Lorem Ipsum is that it has a more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media mb-0">
                                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="float-right">2hr ago</small></span>
                                                    <span class="message">Nullam vel sem. Nullam vel sem.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-bell"></i>
                                    <span class="notification-dot bg-azura"></span>
                                </a>
                                <ul class="dropdown-menu feeds_widget vivify fadeIn">
                                    <li class="header">You have 4 New Notifications</li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-left lbg-red"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-left lbg-info"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-left lbg-orange"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-left lbg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="fa fa-comments"></i><span class="notification-dot bg-pink"></span></a></li>
                            <li><a href="<?=site_url('logout'); ?>" class="icon-menu"><i class="fa fa-power-off"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="rightbar" class="rightbar">
            <div class="slim_scroll">
                <div class="chat_detail vivify fadeIn delay-100">
                    <ul class="chat-widget clearfix">
                        <li class="left float-left">
                            <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                            <div class="chat-info">
                                <span class="message">Hello, John<br>What is the update on Project X?</span>
                            </div>
                        </li>
                        <li class="right">
                            <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                            <div class="chat-info">
                                <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                            </div>
                        </li>
                        <li class="left float-left">
                            <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                            <div class="chat-info">
                                <span class="message">That's great. Will catch you in evening.</span>
                            </div>
                        </li>
                        <li class="right">
                            <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                            <div class="chat-info">
                                <span class="message">Sure we'will have a blast today.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="input-group p-t-15">
                        <textarea rows="3" class="form-control" placeholder="Enter text here..."></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div id="left-sidebar" class="sidebar">
            <div class="sidebar_icon">
                <ul class="nav nav-tabs">

                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Home-icon"><i class="fa fa-dashboard"></i></a></li>
<!--                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Envelope-icon"><i class="fa fa-envelope"></i></a></li>-->
<!--                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Components-icon"><i class="icon-diamond"></i></a></li>-->

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="<?=site_url('logout'); ?>"><i class="fa fa-power-off"></i></i></a>
                        <a class="nav-link" data-toggle="tab" href="#Setting-icon"><i class="fa fa-cog"></i></a>
                    </li>
                </ul>
            </div>
            <div class="sidebar_list">
                <div class="tab-content" id="main-menu">
                    <div class="tab-pane active" id="Home-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <ul class="metismenu">
                                <li class="active"><a href="<?=site_url('dashboard'); ?>"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                                <li class="header">Menu</li>
                                <li><a href="<?= site_url('control_panel'); ?>"><i class="icon-paper-plane"></i><span>Control Panel</span></a></li>
                                <li>
                                    <a href="#" class="has-arrow"><i class="icon-lock"></i><span>House Keeping</span></a>
                                    <ul>
                                        <li><a href="<?=site_url('states') ?>">States</a></li>
                                        <li><a href="#">Bank</a></li>
                                        <li><a href="<?=site_url('departments') ?>">Departments</a></li>
                                        <li><a href="#">Location</a></li>
                                        <li><a href="#">Coop</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=site_url('policy_config') ?>"><i class="icon-calendar"></i><span>Policy Config</span></a></li>
                                <li>
                                    <a href="#" class="has-arrow"><i class="icon-lock"></i><span>Cooperators</span></a>
                                    <ul>
                                        <li><a href="<?=site_url('new_application') ?>">New Application</a></li>
                                        <li><a href="<?=site_url('state') ?>">Bank</a></li>
                                        <li><a href="<?=site_url('departments') ?>">Departments</a></li>
                                        <li><a href="<?=site_url('state') ?>">Location</a></li>
                                        <li><a href="#">Coop</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon-check"></i><span>Savings</span></a></li>
                                <li><a href="#"><i class="icon-earphones-alt"></i><span>Loans</span></a></li>
                                <li><a href="#"><i class="icon-list"></i><span>Payables</span></a></li>
                                <li><a href="#"><i class="icon-list"></i><span>Receivables</span></a></li>
                                <li><a href="#"><i class="icon-list"></i><span>Financial Accounts</span></a></li>



                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="Profile-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <div class="user-detail">
                                <div class="text-center mb-3">
                                    <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                                    <h6 class="mt-3 mb-0">Michelle Green</h6>
                                    <div class="text-center text-muted">Manager</div>
                                    <hr>
                                    <small class="text-muted">Address: </small>
                                    <p> San Francisco</p>
                                    <small class="text-muted">Email address: </small>
                                    <p>louispierce@example.com</p>
                                    <small class="text-muted">Mobile: </small>
                                    <p>+ 202-222-2121</p>
                                    <a href="page-profile.html" class="btn btn-block btn-success mb-2" title="">View Profile</a>
                                    <a href="../documentation/index.html" class="btn btn-block btn-info">Documentation</a>
                                </div>
                                <hr>
                                <div class="card-text">
                                    <div class="mt-0">
                                        <small class="float-right text-muted">10/200 GB</small>
                                        <span>Memory</span>
                                        <div class="progress progress-xxs">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <small class="float-right text-muted">40 MB</small>
                                        <span>Bandwidth</span>
                                        <div class="progress progress-xxs">
                                            <div style="width: 50%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <small class="float-right text-muted">73%</small>
                                        <span>Activity</span>
                                        <div class="progress progress-xxs">
                                            <div style="width: 40%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <small class="float-right text-muted">400 GB</small>
                                        <span>FTP</span>
                                        <div class="progress progress-xxs mb-0">
                                            <div style="width: 80%;" class="progress-bar bg-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-pane" id="Envelope-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <a href="app-compose.html" class="btn btn-danger btn-block mb-3">Compose</a>
                            <ul class="metismenu">
                                <li class="active"><a href="app-inbox.html"><i class="icon-drawer"></i><span>Inbox</span><span class="badge badge-primary float-right">6</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-cursor"></i><span>Sent</span><span class="badge badge-warning float-right">6</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i><span>Draft</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-action-redo"></i><span>Outbox</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-trash"></i><span>Trash</span></a></li>
                                <li class="header">Labels</li>
                                <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i><span>Workshop</span></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i><span>Private</span></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i><span>Paypal</span></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i><span>Comapny</span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="tab-pane" id="Components-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <ul class="metismenu">
                                <li><a href="ui-helper-class.html"><i class="icon-info"></i>Helper Classes</a></li>
                                <li><a href="ui-bootstrap.html"><i class="icon-key"></i>Bootstrap UI</a></li>
                                <li><a href="ui-typography.html"><i class="icon-target"></i>Typography</a></li>
                                <li><a href="ui-colors.html"><i class="icon-drop"></i>Colors</a></li>
                                <li><a href="ui-buttons.html"><i class="icon-tag"></i>Buttons</a></li>
                                <li><a href="ui-tabs.html"><i class="icon-tag"></i>Tabs</a></li>
                                <li><a href="ui-progressbars.html"><i class="icon-graph"></i>Progress Bars</a></li>
                                <li><a href="ui-modals.html"><i class="icon-tag"></i>Modals</a></li>
                                <li><a href="ui-notifications.html"><i class="icon-question"></i>Notifications</a></li>
                                <li><a href="ui-dialogs.html"><i class="icon-tag"></i>Dialogs</a></li>
                                <li><a href="ui-list-group.html"><i class="icon-list"></i>List Group</a></li>
                                <li><a href="ui-media-object.html"><i class="icon-tag"></i>Media Object</a></li>
                                <li><a href="ui-nestable.html"><i class="icon-loop"></i>Nestable</a></li>
                                <li><a href="ui-range-sliders.html"><i class="icon-equalizer"></i>Range Sliders</a></li>
                                <li>
                                    <a href="#Charts" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                                    <ul>
                                        <li><a href="chart-c3.html">C3 Charts</a></li>
                                        <li><a href="chart-chartjs.html">ChartJS</a></li>
                                        <li><a href="chart-morris.html">Morris Charts</a></li>
                                        <li><a href="chart-flot.html">Flot Charts</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                        <li><a href="chart-jquery-knob.html">Jquery Knob</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Forms" class="has-arrow"><i class="icon-layers"></i><span>Forms</span></a>
                                    <ul>
                                        <li><a href="forms-basic.html">Basic Elements</a></li>
                                        <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                        <li><a href="forms-validation.html">Form Validation</a></li>
                                        <li><a href="forms-wizard.html">Form Wizard</a></li>
                                        <li><a href="forms-summernote.html">Summernote</a></li>
                                        <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                        <li><a href="forms-editors.html">CKEditor</a></li>
                                        <li><a href="forms-markdown.html">Markdown</a></li>
                                        <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Tables" class="has-arrow"><i class="icon-film"></i><span>Tables</span></a>
                                    <ul>
                                        <li><a href="table-normal.html">Normal Tables</a></li>
                                        <li><a href="table-color.html">Tables Color</a></li>
                                        <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                                        <li><a href="table-editable.html">Editable Tables</a></li>
                                        <li><a href="table-filter.html">Table Filter</a></li>
                                        <li><a href="table-dragger.html">Table dragger</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div class="tab-pane" id="Setting-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <p>General Settings</p>
                            <ul class="setting-list list-unstyled">
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Report Panel Usag</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked="">
                                        <span>Email Redirect</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked="">
                                        <span>Notifications</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Offline</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Location Permission</span>
                                    </label>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Dark Menu
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" class="dark_menu_btn">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Dark version
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" class="light-btn">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <p>Choose Skin</p>
                            <ul class="choose-skin list-unstyled mb-0">
                                <li data-theme="blue" class="active"><div class="blue"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1><?= $this->renderSection('current_page') ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-cube"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $this->renderSection('page_crumb') ?></li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </div>

    </div>


 <?php echo view('templates/_footer'); ?>