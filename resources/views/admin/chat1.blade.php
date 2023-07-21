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
                                            @include('admin.users',['all',$all,'unread'=>$unread])


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
                <div class="col-xxl-6 col-xl-12 order-xl-2">
                    <div class="card">
                        <div class="card-body px-0 pb-0">
                            <ul class="conversation-list px-3" data-simplebar style="max-height: 554px">
                              
                               
                            </ul>
                        </div>
                        <!-- end card-body -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 bg-light p-3">
                                        <form class="needs-validation" action="{{ route('envoi') }}" method="POST" novalidate="" name="chat-form"
                                            id="chat-form">
                                            @csrf
                                            @method('POST')
                                            {{-- <input type="hidden" name="user_id" value="{{ $item->id }}"> --}}
                                            <div class="row">
                                                <div class="col mb-2 mb-sm-0">
                                                    <input type="text" name="message" class="form-control border-0"
                                                        placeholder="Enter your text" required="" />
                                                    <div class="invalid-feedback">
                                                        Please enter your messsage
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-light"><i
                                                                ><iconify-icon icon="uil:paperclip"></iconify-icon></i></a>
                                                        <a href="#" class="btn btn-light">
                                                            <i><iconify-icon icon="uil:smile"></iconify-icon></i>
                                                        </a>
                                                        <div class="d-grid">
                                                            <button type="submit"
                                                                class="btn btn-success chat-send">
                                                                <i><iconify-icon icon="uil:message"></iconify-icon></i>
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
