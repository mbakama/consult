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
                                                @foreach ($all as $item)
                                                    <a href="javascript:void(0);"
                                                        onclick="getUserDetail({{ $item->id }})" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                class="me-2 rounded-circle" height="48"
                                                                alt="Brandon Smith" />

                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">4:30am</span>
                                                                    {{ $item->name }}
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">

                                                                    <span class="w-25 float-end text-end">
                                                                        {{-- {{ Carbon\Carbon::parse($item->lastLogin)->diffForHumans() }} --}}
                                                                        @if ($item->isUserOnline())
                                                                            <iconify-icon icon="mdi:circle"
                                                                                style="color: rgb(17, 255, 17);background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%;margin-left:-13px; margin-bottom:-15px">
                                                                            </iconify-icon><span>
                                                                            @else
                                                                                <iconify-icon icon="mdi:circle"
                                                                                    style="color: rgb(255, 112, 17); font-size:12px; margin-left:-13px; margin-bottom:-15px">
                                                                                </iconify-icon>
                                                                        @endif
                                                                    </span></span>





                                                                    {{-- <span class="w-25 float-end text-end">
                                                              {{ $item->lastLogin >=now()->subMinutes(2) ? '<span><iconify-icon icon="mdi:circle" style="color: rgb(17, 255, 17);background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%;margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                              </span>' :'<iconify-icon icon="mdi:circle" style="color: rgb(255, 112, 17); font-size:12px; margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                                    <span></span>
                                                                  '}}                                     
                                                                </span> --}}
                                                                    <span class="w-75">How are you today?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <hr>
                                                @endforeach

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
                    <div class="col-xxl-6 col-xl-12 order-xl-2" style="">
                        <div class="card" id="discusion">
                            <div class="card-body px-0 pb-0">
                            <ul class="conversation-list px-3" data-simplebar style="max-height: 554px">
                            {{-- <div class="font-20">{{ $id->name }}</div> --}}
                            
                            <li class="text-center font-23" style="font-weight: bold">Cliquez sur un utilisateur pour voir votre conversation</li>
                            </ul>
                        </div>
                            <!-- end card-body -->
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="mt-2 bg-light p-3">
                                            <form class="needs-validation" novalidate="" name="chat-form"
                                                id="chat-form">
                                                <div class="row">
                                                    <div class="col mb-2 mb-sm-0">
                                                        <input type="text" class="form-control border-0"
                                                            placeholder="Enter your text" required="" />
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-light"><i>
                                                                    <iconify-icon icon="uil:paperclip"></iconify-icon>
                                                                </i></a>
                                                            <a href="#" class="btn btn-light">
                                                                <i>
                                                                    <iconify-icon icon="uil:smile"></iconify-icon>
                                                                </i>
                                                            </a>
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-success chat-send">
                                                                    <i>
                                                                        <iconify-icon icon="uil:message"></iconify-icon>
                                                                    </i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row-->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end col-->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end chat area-->

                    <!-- start user detail -->
                    <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-2">
                        <div class="card" id="user_detail">

                            <!-- end card-body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                    <!-- end user detail -->
                </div>
                <!-- end row-->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
    </div>
@endsection
