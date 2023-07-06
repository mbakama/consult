@extends('layouts.template')


@section('content')
<div class="content-page">
    <div class="content">                    

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                <li class="breadcrumb-item active">Widgets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Widgets</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            
                <div class="row">
                    <div class="col-md-4">
                        <!-- Portlet card -->
                        <div class="card mb-md-0 mb-3">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h5 class="card-title mb-0">Card title</h5>
                                                
                                <div id="cardCollpase1" class="collapse pt-3 show">
                                    <span class="float-start m-2 me-4">
                                        <img src="{{ url('assets/images/users/avatar-2.jpg') }}" style="height: 100px;" alt="avatar-2" class="rounded-circle img-thumbnail">
                                    </span>
                                    <div class="">
                                        <h4 class="mt-1 mb-1">{{ $all->name }}</h4>
                                        <p class="font-13"> Officer</p>
                                
                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item me-3">
                                                
                                                <h5 class="mb-1">No.phone</h5>
                                                
                                                @php
                                                    function number($phone_num){
                                                        global $phone_num;
                                                        $regex = '/^\d{3}-\d{3}-\d{4}$/';

                                                        if (preg_match($regex,$phone_num)) { 
                                                            $phone_num = preg_replace($regex, '($1) $2->$3', $phone_num);
                                                        }
                                                        return $phone_num;
                                                    }
                                                    $phone_num = "0814532227";
                                                  
                                                @endphp

                                                <p class="mb-0 font-13">{{ number($phone_num) }}</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-1"></h5>
                                                <p class="mb-0 font-13">Number of Orders</p>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div><!-- end col -->
                                                
                    <div class="col-md-4">
                        <!-- Portlet card -->
                        <div class="card bg-primary text-white mb-md-0 mb-3">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h5 class="card-title mb-0">Card title</h5>
                                                
                                <div id="cardCollpase2" class="collapse pt-3 show">
                                    ...
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div><!-- end col -->
                                                
                    <div class="col-md-4">
                        <!-- Portlet card -->
                        <div class="card bg-success text-white mb-0">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h5 class="card-title mb-0">Card title</h5>
                                                
                                <div id="cardCollpase3" class="collapse pt-3 show">
                                    ...
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
           
            <!-- end row--> 

<hr>

            <div class="row">
                <div class="col-xl-4">
                    <!-- Messages-->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Messages</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="inbox-widget">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item pb-0">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Adhamdannaway</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                            </div> <!-- end inbox-widget -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
                <!-- end col-->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Recent Activity</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body py-0 mb-3" data-simplebar style="max-height: 315px;">
                            <div class="timeline-alt py-0">
                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">5 minutes ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                        <small>Dave Gamache added
                                            <span class="fw-bold">Admin Dashboard</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">30 minutes ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                        <small>Send you message
                                            <span class="fw-bold">"Are you there?"</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">2 hours ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                        <small>Uploaded a photo
                                            <span class="fw-bold">"Error.jpg"</span>
                                        </small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">14 hours ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end timeline -->
                        </div> <!-- end slimscroll -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->  
                
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Transactions</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body py-0 mb-3" data-simplebar style="max-height: 315px;">
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Purchased Hyper Admin Template</a>
                                    <p class="mb-0 text-muted"><small>Today</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$489.30</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Payment received Bootstrap Marketplace</a>
                                    <p class="mb-0 text-muted"><small>Yesterday</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$1578.54</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Freelance work - Shane</a>
                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$247.5</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Hire new developer for work</a>
                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$185.14</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Money received from paypal</a>
                                    <p class="mb-0 text-muted"><small>28 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$684.45</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Zairo landing purchased</a>
                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$21.00</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Purchased Ubold admin template</a>
                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-danger fw-bold pe-2">-$32.89</span>
                                </div>
                            </div>
                            <div class="row py-1 align-items-center">
                                <div class="col-auto">
                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-body">Interest received</a>
                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                </div>
                                <div class="col-auto">
                                    <span class="text-success fw-bold pe-2">+$784.55</span>
                                </div>
                            </div>
                        </div> <!-- end slimscroll -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->  
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Sales Summary</h6>
                            <h3 class="mb-4 mt-2">259</h3>
                            <div id="spark1" class="apex-charts mb-3" data-colors="#734CEA"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0">358</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0">194</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
                <div class="col-xxl-3 col-md-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Revenue</h6>
                            <h3 class="mb-4 mt-2">$6,254</h3>
                            <div id="spark2" class="apex-charts mb-3" data-colors="#34bfa3"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0">$781.12</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0">$128.2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
                <div class="col-xxl-3 col-md-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Active Users</h6>
                            <h3 class="mb-4 mt-2">324</h3>
                            <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0 text-success">+15%</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0 text-danger">-6.87%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
                <div class="col-xxl-3 col-md-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Expense Summary</h6>
                            <h3 class="mb-4 mt-2">$4,745.2</h3>
                            <div id="spark4" class="apex-charts mb-3" data-colors="#00c5dc"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0">$7814</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0">$4782.8</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-bg-info overflow-hidden">
                        <div class="card-body">
                            <div class="toll-free-box text-center">
                                <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="card text-bg-danger overflow-hidden">
                        <div class="card-body">
                            <div class="toll-free-box text-center">
                                <h4> <i class="mdi mdi-headset"></i> Need help ? Just contact us</h4>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-4">
                    <div class="card text-bg-success">
                        <div class="card-body">
                            <div class="text-center">
                                <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                </div> <!-- end col-->
            </div>
            <!-- end row-->
            
        </div> <!-- container -->
     
    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection