<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <title>Form Validation | Veltrix - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">



    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include 'navbar.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6 class="page-title">Form Validation</h6>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                                </ol>
                            </div>
                            <div class="col-md-4">
                                <div class="float-end d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-cog me-2"></i> Settings
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Validation type</h4>
                                    <p class="card-title-desc">Parsley is a javascript form validation
                                        library. It helps you provide your users with feedback on their form
                                        submission before sending it to your server.</p>
                                    <form class="custom-validation row" action="#" novalidate="">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <h4>Shipper</h4>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Company Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Shipper Name</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Shipper Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text" class="form-control" required="" placeholder="Enter Your number without +">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Address">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" required="" placeholder="Type City">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Country">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Posatal/ZipCode</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Posatal/ZipCode">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter a valid email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tax id</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Tax id">
                                            </div>

                                            
                                        </div>
                                        <div class="col-6">
                                        <div class="mb-3">
                                                <h4>Reciver</h4>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" class="form-control" required="" placeholder="Company Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Reciver Name</label>
                                                <input type="text" class="form-control" required="" placeholder="Reciver Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text" class="form-control" required="" placeholder="Enter Your number without +">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Address">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" required="" placeholder="Type City">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Country">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Posatal/ZipCode</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Posatal/ZipCode">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter a valid email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tax id</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Tax id">
                                            </div>
                                            
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <h4>Shipment DETAILS</h4>
                                            </div>
                                            <div class="mb-3">
                                                <label  class="form-label">Type of Shipment</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                               
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Waybill Total Pieces</label>
                                                <input type="text" class="form-control" required="" placeholder="Company Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Volume Weight</label>
                                                <input type="text" class="form-control" required="" placeholder="Reciver Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Courier</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text" class="form-control" required="" placeholder="Enter Your number without +">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Dimension</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Address">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Carrier</label>
                                                <input type="text" class="form-control" required="" placeholder="Type City">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Departure Time</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Country">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Destination</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Posatal/ZipCode">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Reason For Export</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter a valid email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Other Changes</label>
                                                <input type="text" class="form-control" required="" placeholder="Type Tax id">
                                            </div>
                                            
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>

                                            </div>
                                        </div>
                                        
                                    </form><!-- end form -->
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include 'footer.php'; ?>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>

            <!-- JAVASCRIPT -->
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <script src="assets/libs/parsleyjs/parsley.min.js"></script>

            <script src="assets/js/pages/form-validation.init.js"></script>

            <script src="assets/js/app.js"></script>

</body>

</html>