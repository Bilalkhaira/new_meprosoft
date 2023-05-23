<header class="wrapper bg-light pt-1">
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container-fluid flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('home') }}">
                    <img style="width: 170px !important; margin-top: -22px !important" src="{{ asset('img/logo-dark.png') }}" srcset="{{ asset('img/logo-dark@2x.png 2x') }}" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                            <div class="dropdown-menu dropdown-lg">
                            <ul class="list-unstyled">
                                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" style="margin-right: 15px">Corporate Overview</a>
                                    <div class="dropdown-menu dropdown-lg">
                                        <ul class="list-unstyled">
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('home.about') }}">About
                                                    Mesprosoft</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('home.managementTeam') }}">Management
                                                    Team</a>
                                            </li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('home.coreValues') }}">Core
                                                    Values</a>
                                            </li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('home.whyMesprosoft') }}">Why
                                                    Mesprosoft</a>
                                                </liv>

                                        </ul>
                                    </div>
                            </ul>
                        </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu dropdown-lg">
                                <ul class="list-unstyled">
                                   
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.businessConsulting') }}">Business Consulting</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.digitalTransformationWithCloud') }}">Digital Transformation With Cloud</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.hanaConversion') }}">S/4 Hana Conversion</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.applicationSupport') }}">Application Support</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.specificConsulting') }}">Specific Consulting</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.IPOCompliance') }}">IPO Compliance</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.PLCMESWeighBridgeIntegration') }}">PLC MES Weigh Bridge Integration</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('services.resourceArgumentation') }}">Resource Argumentation</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products &
                                Solutions</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.dispatchAutomation') }}">Dispatch Automation</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.dynamicMachineScheduling') }}">Dynamic Machine Scheduling </a>
                                            </li>
                                            <li><a class="dropdown-item" data-toggle="tooltip" title="Electronic Batch Manufacturing ( Pharmaceuticals & Chemicals )" href="{{ route('productAndSolution.electronicBatchManufacturing') }}">Electronic Batch Manufacturing</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.handheldMobileBarCode') }}">Handheld Mobile Bar Code</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.loanManagementSolution') }}">Loan Management Solution</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.mesproGPSPreconfiguredAnalytics') }}">Mespro GPS Preconfigured Analytics</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.mesproLifeScienceCFRPart11') }}">Mespro Life Science CFR Part 11</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.TS16949CompliantKAPA') }}">TS 16949 Compliant KAPA </a></li>
                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                    <div>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.mesproOptimizedMRP') }}">Mespro Optimized MRP</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.mesproPaperessManufacturing') }}">Mespro Paper Less Manufacturing</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.MesproX-Steps') }}">Mespro X-Steps</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.O2CAutomation') }}">O2C Automation</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.purchaseBudgetCheckAndApproval') }}">Purchase Budget Check & Approval</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.smartFoundry') }}">Smart Foundry</a></li>

                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.BTP') }}">BTP</a></li>
                                            <li><a class="dropdown-item" href="{{ route('productAndSolution.IOT') }}">IOT</a></li>
                                            

                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Case Study</a>
                            <div class="dropdown-menu dropdown-lg">
                                <ul class="list-unstyled">
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('caseStudy.foodIndustry') }}">Food Industry</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('caseStudy.digitalManufacturing') }}">Digital Manufacturing</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('caseStudy.mesproPaperlessManufacturing') }}">Mespro Paperless Manufacturing</a></li>

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{ route('eventAndNews.index') }}">News & Events</a>

                        </li>

                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{ route('careers.index') }}">Careers</a>

                        </li>
                    
                        <li class="nav-item dropdown dropdown-mega" id="getInTouch">
                            <a class="nav-link btn btn-primary" href="{{ route('contactUs') }}">Get In Touch</a>
                        </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="/cdn-cgi/l/email-protection#8bede2f9f8ffa5e7eaf8ffcbeee6eae2e7a5e8e4e6" class="link-inverse"><span class="__cf_email__" data-cfemail="2e474048416e4b434f4742004d4143">[email&#160;protected]</span></a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
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
</header>