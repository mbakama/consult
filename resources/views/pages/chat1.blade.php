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
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Hyper</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Apps</a>
                                </li>
                                <li class="breadcrumb-item active">Chat</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Chat</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- start chat users-->
                <div class="col-xxl-3 col-xl-6 order-xl-1">
                    <div class="card">
                        <div class="card-body p-0">
                            <ul class="nav nav-tabs nav-bordered">
                                <li class="nav-item">
                                    <a href="#allUsers" data-bs-toggle="tab" aria-expanded="false"
                                        class="nav-link active py-2">
                                        Patients
                                    </a>
                                </li>

                                {{-- <li class="nav-item">
                                <a href="#friendUsers" data-bs-toggle="tab" aria-expanded="true"
                                    class="nav-link py-2">
                                    Friends
                                </a>
                            </li> --}}
                            </ul>
                            <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active card-body pb-0" id="newpost">
                                    <!-- start search box -->
                                    <div class="app-search">
                                        <form>
                                            <div class="mb-2 w-100 position-relative">
                                                <input type="search" id="search" class="form-control"
                                                    placeholder="People, groups & messages..." />
                                                <span class="search-icon">
                                                    <iconify-icon icon="mdi:magnify"></iconify-icon>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end search box -->
                                </div>

                                <!-- users -->
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body py-0 mb-3" data-simplebar style="max-height: 546px">
                                            @include('admin.users',['all',$all])

                                        </div>
                                        <!-- end slimscroll-->
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- end users -->
                            </div>
                            <!-- end tab content-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end chat users-->

                <!-- chat area -->
                <div class="col-xxl-9 col-xl-12 order-xl-2">
                    <div class="card">
                        <div class="card-body px-0 pb-0">
                            <p class="conversation-list px-3 text-center" data-simplebar style="max-height: 554px" style="font-family: 'Times New Roman', Times, serif">
                              @if (Auth::user()->userType=="patient.e")
                              Bienvenue dans notre portail de consultation <br>

                              nous avons l'honneur de vous avoir comme membres de cette plateforme. nous avons le plaisir de vous informer que les informations qui seront echangé tout au long de la conversation, resterons confidaciel entre vous et le docteur. nous vous prions de bien vouloir respecter les conditions d'utilisation. <br>
                              Cette application est un lieu sûr que vous pouvez soumettre votre probleme chez le docteur et vous aurez le feedback quand celui-ci sera disponible

                              @else
                              Bienvenue dans notre portail de consultation <br>

                              nous avons l'honneur de vous avoir comme membres de cette plateforme. nous avons le plaisir de vous informer que les informations qui seront echangé tout au long de la conversation, resterons confidaciel entre vous et le docteur. nous vous prions de bien vouloir respecter les conditions d'utilisation. <br>
                              Cette application est un lieu sûr que vous pouvez consulter vos patients a tout moment que vous le vouliez

                              @endif
                               
                               
                            </p>
                        </div>
                       
                    </div>
                    <!-- end card -->
                </div>
                <!-- end chat area--> 
                <!-- end user detail -->
            </div>
            <!-- end row-->
        </div>
        <!-- container -->
    </div>
    <!-- content -->
</div>
@endsection
