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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Liste de patients</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 

        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title text-muted text-center">List des patients</h4>
                           
                          <!-- Signup modal content -->
                          <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"> 
                                    <div class="modal-body">
                                        <div class="auth-brand text-center mt-2 mb-4 position-relative top-0">
                                            <a href="index.html" class="logo-dark">
                                                <span><img src="assets/images/logo-dark.png" alt="dark logo" height="22"></span>
                                            </a>
                                            <a href="index.html" class="logo-light">
                                                <span><img src="assets/images/logo.png" alt="logo" height="22"></span>
                                            </a>
                                        </div>

                                        <form class="ps-3 pe-3" action="#">

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Name</label>
                                                <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                            </div> 

                                            <div class="mb-3 text-center">
                                                <button class="btn btn-primary" type="submit">Ajouter</button>
                                            </div>

                                        </form>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal --> 
                        <div class="d-flex flex-wrap gap-2">
                            <!-- Sign Up modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Create un associe</button> --}}
                            <!-- Log In modal -->
                            <!-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In Modal</button> -->
                        </div> 
                           <hr>
                           
                           <div class="tab-content">
                                <div class="table-responsive-sm">
                                    <table class="table table-centered mb-0">
                                       
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom complet</th>
                                                    <th scope="col">No.Consult</th>
                                                    <th scope="col">Occupation</th>
                                                    <th scope="col">No.Phone ou Email</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Date d'enreg.</th>
                                                    <th scope="col">Debut Consult.</th>
                                                    <th scope="col">Fin Consult.</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th> 
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($all as $item) 
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $item->name }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><div>
                                                        <input type="checkbox" id="switch01" checked data-switch="success"/>
                                                        <label for="switch01" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class=""><iconify-icon icon="mdi:dots-horizontal"></iconify-icon></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <!-- <a class="dropdown-item" href="#"><i class="me-2 text-muted vertical-middle"><iconify-icon icon="mdi:share-variant"></iconify-icon></i>Share</a> -->
                                                            <!-- <a class="dropdown-item" href="#"><i class="me-2 text-muted vertical-middle"><iconify-icon icon="mdi:link"></iconify-icon></i>Get Sharable Link</a> -->
                                                            <a class="dropdown-item" href="#"><i class="me-2 text-success vertical-middle"><iconify-icon icon="mdi:pencil"></iconify-icon></i>Rename</a>
                                                            <a class="dropdown-item" href="{{ route('admin.list-patient',$item->id) }}"><i class="me-2 text-muted vertical-middle"><iconify-icon icon="mdi:eye"></iconify-icon></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="me-2 text-danger vertical-middle"><iconify-icon icon="mdi:delete"></iconify-icon></i>Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        
                                    </table>
                                </div>
                           </div>
                           
                           
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->

        
           
        </div> <!-- container -->

    </div> <!-- content -->

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