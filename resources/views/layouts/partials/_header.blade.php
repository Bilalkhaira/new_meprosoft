<header class="wrapper bg-light pt-1 nav_main">
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container-fluid flex-lg-row flex-nowrap align-items-center">
            <div class="w-100">
                <a href="{{ route('home') }}">
                    <img style="width: 60% !important; margin-top: -10px !important" src="{{ asset('img/logo-dark.png') }}" srcset="{{ asset('img/logo-dark.png') }}" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                <a href="{{ route('home') }}">
                    <img style="width: 60% !important; margin-top: -10px !important" src="{{ asset('img/logo-dark.png') }}" srcset="{{ asset('img/logo-dark.png') }}" alt="" />
                </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown hdr_dropdown">
                            <a class="nav-link dropdown-toggle" id="home_route" href="#" data-bs-toggle="dropdown">HOME</a>
                            <a class="nav-link dropdown-toggle" id="on_mobile" href="#" data-bs-toggle="dropdown">HOME</a>
                            <div class="dropdown-menu dropdown-lg" id="menu">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="display-7 mb-5">HOME</h3>
                                        <p>Mesprosoft, a leader in business process automation, aims to improve all business activities.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('home.about') }}">About Mesprosoft</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('home.managementTeam') }}">Management Team</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('home.coreValues') }}">Core Values</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('home.whyMesprosoft') }}">Why Mesprosoft</a>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown hdr_dropdown">
                            <a class="nav-link dropdown-toggle" id="service_route" href="#" data-bs-toggle="dropdown">SERVICES</a>
                            <a class="nav-link dropdown-toggle" id="on_mobile" href="#" data-bs-toggle="dropdown">SERVICES</a>
                            <div class="dropdown-menu dropdown-lg" id="menu">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="display-7 mb-5">SERVICES</h3>
                                        <p>Trust our dedicated team to provide ongoing maintenance and assistance, ensuring your systems run smoothly and efficiently.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.businessConsulting') }}">Business Consulting</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.digitalTransformationWithCloud') }}">Digital Transformation With Cloud</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.hanaConversion') }}">S/4 Hana Conversion</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.applicationSupport') }}">Application Support</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.specificConsulting') }}">Specific Consulting</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.IPOCompliance') }}">IPO Compliance</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.PLCMESWeighBridgeIntegration') }}">PLC MES Weighbridge Integration</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('services.resourceArgumentation') }}">Resource Augmentation</a>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item dropdown hdr_dropdown">
                            <a class="nav-link dropdown-toggle" id="product_route" href="#" data-bs-toggle="dropdown">PRODUCTS &
                                SOLUTIONS</a>
                                <a class="nav-link dropdown-toggle" id="on_mobile" href="#" data-bs-toggle="dropdown">PRODUCTS &
                                SOLUTIONS</a>
                            <div class="dropdown-menu dropdown-lg" id="menu">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="display-7 mb-5">PRODUCTS & SOLUTIONS</h3>
                                        <p>Efficiency, Integration, and Growth: Harnessing the Power of Our Product and Solutions.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.dispatchAutomation') }}">Dispatch Automation</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.dynamicMachineScheduling') }}">Dynamic Machine Scheduling </a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a data-toggle="tooltip" title="Electronic Batch Manufacturing ( Pharmaceuticals & Chemicals )" href="{{ route('productAndSolution.electronicBatchManufacturing') }}">Electronic Batch Manufacturing</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.handheldMobileBarCode') }}">Handheld Mobile Bar Code</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.loanManagementSolution') }}">Loan Management Solution</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.mesproGPSPreconfiguredAnalytics') }}">Mespro GPS Preconfigured Analytics</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.mesproLifeScienceCFRPart11') }}">Mespro Life Science CFR Part 11</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.TS16949CompliantKAPA') }}">TS 16949 Compliant KAPA </a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.mesproOptimizedMRP') }}">Mespro Optimized MRP</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.mesproPaperessManufacturing') }}">Mespro Paperless Manufacturing</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.MesproX-Steps') }}">Mespro X-Steps</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.O2CAutomation') }}">O2C Automation</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.purchaseBudgetCheckAndApproval') }}">Purchase Budget Check & Approval</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.smartFoundry') }}">Smart Foundry</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.BTP') }}">BTP</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('productAndSolution.IOT') }}">IOT</a>
                                    </div>
                                </div>
                            </div>

                        </li>



                        <li class="nav-item dropdown hdr_dropdown">
                            <a class="nav-link dropdown-toggle ss" href="#" data-bs-toggle="dropdown">CASE STUDIES</a>
                            <div class="dropdown-menu dropdown-lg" id="menu">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="display-7 mb-5">CASE STUDIES</h3>
                                        <p>From Challenges to Solutions: Inspiring Case Studies from Our Portfolio.</p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.foodIndustry') }}">Food Industry</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.machineToolIndustry') }}">Machine Tool Industry</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.SAPHospitalsCapability') }}">SAP Hospitals Capability</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.SAPNBFC') }}">SAP NBFC</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.foodProcessingConsumerWare') }}">Food Processing & Consumer Ware</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.manufacturing') }}">Manufacturing</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.pharmaceuticals') }}">Pharmaceuticals</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.automotiveComponents') }}">Automotive Components</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.foamPackagingProducts') }}">Foam Packaging Products</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.rubberandPolymers') }}">Rubber and Polymers</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.AIRCRAFTIndustries') }}">Aerospace Industries</a>
                                    </div>

                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.realEstateIndustries') }}">Real Estate Industries</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('caseStudy.UTILITIESIndustries') }}">Utilities Industries</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown hdr_dropdown">
                            <a class="nav-link dropdown-toggle" id="event_route" href="#" data-bs-toggle="dropdown">NEWS & EVENTS</a>
                            <a class="nav-link dropdown-toggle" id="on_mobile" href="#" data-bs-toggle="dropdown">NEWS & EVENTS</a>
                            <div class="dropdown-menu dropdown-lg" id="menu">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3 class="display-7 mb-5">NEWS & EVENTS</h3>
                                        <p>Stay updated on the trade shows, conferences, and industry events where Mesprosoft will be present.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2 text-center">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('eventAndNews.event') }}">Events</a>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <img src="{{ asset('img/new_design_img/header.png') }}" width="15px" alt="">
                                        <a href="{{ route('eventAndNews.index') }}">News</a>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{ route('careers.index') }}"> CAREERS</a>

                        </li>

                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{ route('contactUs') }}">CONTACT US</a>
                        </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <!-- <a href="/cdn-cgi/l/email-protection#8bede2f9f8ffa5e7eaf8ffcbeee6eae2e7a5e8e4e6" class="link-inverse"><span class="__cf_email__" data-cfemail="2e474048416e4b434f4742004d4143">[email&#160;protected]</span></a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav> -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li style="display:none" class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item d-none d-md-block">
                        <a style="display:none" href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-signin">Sign In</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Welcome Back</h2>
                    <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                    <form class="text-start mb-3">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating password-field mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            <label for="loginPassword">Password</label>
                        </div>
                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                    </form>
                    <!-- /form -->
                    <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                    <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
                    <div class="divider-icon my-4">or</div>
                    <nav class="nav social justify-content-center text-center">
                        <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                    </nav>
                    <!--/.social -->
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
    <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
                    <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                    <form class="text-start mb-3">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Name" id="loginName">
                            <label for="loginName">Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating password-field mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="form-floating password-field mb-4">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            <label for="loginPasswordConfirm">Confirm Password</label>
                        </div>
                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
                    </form>
                    <!-- /form -->
                    <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
                    <div class="divider-icon my-4">or</div>
                    <nav class="nav social justify-content-center text-center">
                        <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                    </nav>
                    <!--/.social -->
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
    <script>
        $('#service_route').on('click', function() {
            window.location.href = "{{ route('services.index') }}";
        })

        $('#product_route').on('click', function() {
            window.location.href = "{{ route('productsAndSolutions.index') }}";
        })

        $('#event_route').on('click', function() {
            window.location.href = "{{ route('eventAndNews.index') }}";
        })
        $('#home_route').on('click', function() {
            window.location.href = "{{ route('home') }}";
        })

        
    </script>
</header>