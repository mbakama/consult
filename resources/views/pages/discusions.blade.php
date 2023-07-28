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
                                        @if (Auth::user()->userType=="doctor")
                                           {{ __("Patients") }}
                                        @else
                                        {{ __("Docteur") }}
                                       @endif
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
                                <li class="clearfic mb-4">
                                    <div class="chat-avatar">
                                       <img style="margin-bottom:-10px; position: relative;" src="@if ($user->photo==null) {{ asset("storage/images/6596121.png")}} @else {{ asset("storage/$user->photo")}} @endif" class="rounded"
                                           alt="Shreyu N" /> 
                                           <span style="position:absolute; padding-left:5px">{{ $user->prenom }} {{ $user->name }}</span> 
                                   </div>
                                  
                                 </li>
                                 <hr>
                                 @if ($messages->hasMorePages())
                                     <div class="text-center">
                                        <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">voir anciens messages</a>
                                     </div>
                                 @endif
                                @forelse ($messages as $message) 
                                
                                <li class="@if($message->user_received == Auth::id()) clearfix @elseif ($message->user_sent == Auth::id()) clearfix odd @endif">
                                   
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>{{ $message->from->prenom }}</i>
                                            
                                            <p> 
                                                {!! nl2br(e($message->contenu)) !!} </p>
                                                <i class="time pt-1" style="margin-bottom: -10px; font-size:8px"> {{ $message->created_at->format('h:m:s') }}</i>
                                        </div>
                                    </div>
                                    <div class="conversation-actions dropdown">
                                        <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i><iconify-icon icon="uil:ellipsis-v"></iconify-icon></i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy Message</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                           
                                                <form action="{{ route('delete',$message->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">delete</button>
                                                </form>
                                               
                                        </div>
                                    </div>
                                </li>
                               
                                @empty

                                @if (Auth::user()->userType=="doctor")
                                <p class="font-15 text-center" style="font-weight:900; font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif">
                                    Demarrer la nouvelle conversation avec votre patient
                                </p>
                                @else
                                <p class="font-15 text-center" style="font-weight:900; font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif">
                                    Demarrer la nouvelle conversation avec votre Docteur
                                </p>
                                @endif
                                
                                @endforelse 
                                @if ($messages->previousPageUrl())
                                <div class="text-center">
                                   <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light"><i class="fa-solid fa-chevron-down"></i></a>
                                </div>
                            @endif
                            </ul>
                        </div>
                        <!-- end card-body -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 bg-light p-3">
                                        <form class="needs-validation" action="" novalidate="" name="chat-form" id="chat-form" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <div class="row">
                                                <div class="col mb-2 mb-sm-0">
                                                    
                                                        <textarea name="message" id="" placeholder="votre message" class="form-control border-0" cols="30" rows="4" required=""></textarea>
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
                    <div class="card" >

                        <div class="card-body">
                           @if (Auth::user()->userType=="doctor")
                           <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i><iconify-icon style="cursor: pointer" icon="mdi:dots-horizontal"></iconify-icon></i>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="{{ route('admin.list-patient',$user->id) }}" class="dropdown-item">View full</a>
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item">Edit Contact Info</a> --}}
                                <!-- item-->
                                {{-- <a href="" class="dropdown-item">Status</a> --}}
                                <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalId">
                                    Status
                                </a>
                            </div>
                        </div>
                           @else
                            
                        @endif
                        <!-- Modal trigger button -->
                       
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    @if (!empty($user->consul->id))
                                    <form action="{{ route('update_status_user',$user->consul->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <div class="modal-body">
                                       
                                        <select name="status" id="" name="status" class="form-control">
                                            <option value="0">Encours</option>
                                            <<option value="1">Terminée</option>
                                        </select>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                 @else
                                 @endif

                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
                            <div class="mt-3 text-center">
                                <img src="@if ($user->photo==null) {{ asset("storage/images/6596121.png")}} @else {{ $user->url_image()}} @endif" alt="shreyu"
                                    class="img-thumbnail avatar-lg rounded-circle" />

                                <h4>{{ $user->prenom }} {{ $user->postnom }} {{ $user->name }} </h4>
                                <button class="btn btn-primary btn-sm mt-1">
                                    <i class="me-1"><iconify-icon icon="uil:envelope-add"></iconify-icon></i>Send Email
                                </button>
                                <p class="text-muted mt-2"> 
                                    @if (empty($user->consul->debut_consultation) || empty($user->consul->fin_consultation) || empty($user->consul->numero_consultation))
                                        
                                    @else
                                    <span style="font-size: 12px">Début Consulatation: <strong>{{ $user->consul->debut_consultation }}</strong></span> <br>
                                    <span style="font-size: 12px">Fin Consulatation: <strong>{{ $user->consul->fin_consultation }}</strong></span> <br>
                                        <span class="pt-2" style="font-size: 12px">Code: <strong>{{ $user->consul->numero_consultation }}</strong></span>

                                    @endif 
                                </p>
                            </div>
                        
                            <div class="mt-3">
                                <hr class="" />
                        
                                <p class="mt-4 mb-1">
                                    <strong><i><iconify-icon icon="uil:at"></iconify-icon></i> Email: {{ $user->email }}</strong>
                                </p>
                                <p></p>
                        
                                <p class="mt-3 mb-1">
                                    <strong><i><iconify-icon icon="uil:phone"></iconify-icon></i> Phone Number: </strong>
                                </p>
                                <p>{{ $user->formatPhoneNumber() }}</p>
                        
                                <p class="mt-3 mb-1">
                                    <strong><i><iconify-icon icon="uil:location"></iconify-icon></i> Adresse:</strong>
                                </p>
                                <p>{{ $user->adresse }}</p>
                        
                                <p class="mt-3 mb-1">
                                    <strong><i><iconify-icon icon="uil:globe"></iconify-icon></i> Status:</strong>
                                </p>
                                <p>{{ $user->userType }}</p>
                        
                               
                               
                            </div>
                        </div>
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