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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Mon profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">My profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
<style> 


.file-upload {
    display: none;
} 

.p-image {
    position: absolute;
    top: 167px;
    left: 90px;
    color: #666666;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}

.p-image:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  
}

.upload-button {
    font-size: 1.2em;
  cursor:pointer
}

.upload-button:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    color: #999;
}</style>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="card text-center">
                        <div class="card-body">
                           
                                <img src="{{ $profile->url_image()}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"> 
                                <div style="margin-top:-10px; margin-left:10px">
                                   
                                    <span style="border:none"  data-bs-toggle="modal" data-bs-target="#modalId"></button>

                                    </div> 
                                    
                                    <!-- Modal trigger button -->
                                    {{-- <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                      Launch
                                    </button> --}}
                                    
                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header"> 
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data"> 
                                                    @csrf
                                                    @method('PUT')
                                                <div class="modal-body">
                                <img src="{{ $profile->url_image() }}" style="width: 100%; height:50%" class="avatar-lg img-thumbnail" alt="profile-image"> 
                                                <div style="margin-top:-10px; margin-left:10px">
                                                    <i class="fa fa-camera upload-button"></i>
                                                    </div>

                                                </div>
                                                <div class="p-image">          
                                                    {{-- <input class="file-upload" type="file" id="file-upload" name="photo" accept="image/*" />  --}}
                                                    
                                                    <input type="file" class="file-upload" name="photo" accept="image/*">
                                                    <input type="hidden" name="name" id="" value="{{ $profile->name }}">
                                                    <input type="hidden" name="prenom" id="" value="{{ $profile->prenom }}">
                                                    <input type="hidden" name="postnom" id="" value="{{ $profile->postnom }}">
                                                    <input type="hidden" name="Occupation" id="" value="{{ $profile->Occupation }}">
                                                    <input type="hidden" name="phone" id="" value="{{ $profile->phone }}">
                                                    <input type="hidden" name="dateNaissance" id="" value="{{ $profile->dateNaissance }}">
                                                    <input type="hidden" name="sexe" id="" value="{{ $profile->sexe }}">
                                                    <input type="hidden" name="adresse" id="" value="{{ $profile->adresse }}">
                                                    <input type="hidden" name="bio" value="{{ $profile->bio }}"> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                    
                                    </script>
                               
                                        <button style="border: none" type="submit" data-bs-toggle="modal" data-bs-target="#modalId"><i class="fa fa-camera"></i></button>
                                       
                                            <div id="res"></div>

                                        
                            
                                
                               
                                    
                            <h4 class="mb-0 mt-2">{{ Str::ucfirst($profile->name) }} {{ Str::ucfirst($profile->prenom) }}</h4>
                            <p class="text-muted font-14">{{ $profile->Occupation }}</p>

                            <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm mb-2">Message</button>

                            <div class="text-start mt-3">
                                <h4 class="font-13 text-uppercase">About Me :</h4>
                                <p class="text-muted font-13 mb-3">
                                   {{ $profile->bio }}
                                </p>
                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span
                                        class="ms-2 uppercase">{{ $profile->getNameInUppercase() }} {{ Str::upper($profile->prenom)  }}  {{ Str::upper($profile->postnom )}}
                                    
                                    </span>
                                </p>

                                <p class="text-muted mb-2 font-13"><strong>Mobile : {{ $profile->formatPhoneNumber() }}</strong><span class="ms-2"></span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                        class="ms-2 ">{{ $profile->email }}</span></p>

                                <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span
                                        class="ms-2">{{ $profile->adresse }}</span></p>
                            </div>

                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);"
                                        class="social-list-item border-primary text-primary"><i
                                            class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                            class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                            class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);"
                                        class="social-list-item border-secondary text-secondary"><i
                                            class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                    <!-- Messages-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="header-title">Messages</h4>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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

                            <div class="inbox-widget">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Adhamdannaway</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                            </div> <!-- end inbox-widget -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

                </div> <!-- end col-->

                <div class="col-xl-8 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                <li class="nav-item">
                                    <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false"
                                        class="nav-link rounded-0">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#timeline" data-bs-toggle="tab" aria-expanded="true"
                                        class="nav-link rounded-0 active">
                                        Timeline
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="false"
                                        class="nav-link rounded-0">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="aboutme">

                                    <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                        Experience</h5>

                                    <div class="timeline-alt pb-0">
                                        <div class="timeline-item">
                                            <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                                <p class="font-14">websitename.com <span class="ms-2 font-12">Year:
                                                        2015 - 18</span></p>
                                                <p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common
                                                    language
                                                    would be desirable: one could refuse to pay expensive translators.
                                                    To achieve this, it would be necessary to have uniform grammar,
                                                    pronunciation and more common words.</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i
                                                class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                                <p class="font-14">Software Inc. <span class="ms-2 font-12">Year: 2012
                                                        - 15</span></p>
                                                <p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the
                                                    grammar
                                                    of the resulting language is more simple and regular than that of
                                                    the individual languages. The new common language will be more
                                                    simple and regular than the existing European languages.</p>

                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                                <p class="font-14">Coderthemes Design LLP <span
                                                        class="ms-2 font-12">Year: 2010 - 12</span></p>
                                                <p class="text-muted mt-2 mb-0 pb-2">The European languages are members
                                                    of
                                                    the same family. Their separate existence is a myth. For science
                                                    music sport etc, Europe uses the same vocabulary. The languages
                                                    only differ in their grammar their pronunciation.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end timeline -->

                                    <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                        Projects</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Clients</th>
                                                    <th>Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><img src="assets/images/users/avatar-2.jpg" alt="table-user"
                                                            class="me-2 rounded-circle" height="24"> Halette Boivin
                                                    </td>
                                                    <td>App design and development</td>
                                                    <td>01/01/2015</td>
                                                    <td>10/15/2018</td>
                                                    <td><span class="badge badge-info-lighten">Work in Progress</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                                            class="me-2 rounded-circle" height="24"> Durandana
                                                        Jolicoeur</td>
                                                    <td>Coffee detail page - Main Page</td>
                                                    <td>21/07/2016</td>
                                                    <td>12/05/2018</td>
                                                    <td><span class="badge badge-danger-lighten">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                            class="me-2 rounded-circle" height="24"> Lucas Sabourin
                                                    </td>
                                                    <td>Poster illustation design</td>
                                                    <td>18/03/2018</td>
                                                    <td>28/09/2018</td>
                                                    <td><span class="badge badge-success-lighten">Done</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><img src="assets/images/users/avatar-6.jpg" alt="table-user"
                                                            class="me-2 rounded-circle" height="24"> Donatien
                                                        Brunelle</td>
                                                    <td>Drinking bottle graphics</td>
                                                    <td>02/10/2017</td>
                                                    <td>07/05/2018</td>
                                                    <td><span class="badge badge-info-lighten">Work in Progress</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                                            class="me-2 rounded-circle" height="24"> Karel Auberjo
                                                    </td>
                                                    <td>Landing page design - Home</td>
                                                    <td>17/01/2017</td>
                                                    <td>25/05/2021</td>
                                                    <td><span class="badge badge-warning-lighten">Coming soon</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end tab-pane -->
                                <!-- end about me section content -->

                                <div class="tab-pane show active" id="timeline">

                                    <!-- comment box -->
                                    <div class="border rounded mt-2 mb-3">
                                        <form action="#" class="comment-area-box">
                                            <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                            <div
                                                class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                            class="mdi mdi-account-circle"></i></a>
                                                    <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                            class="mdi mdi-map-marker"></i></a>
                                                    <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                            class="mdi mdi-camera"></i></a>
                                                    <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                            class="mdi mdi-emoticon-outline"></i></a>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-sm btn-dark waves-effect">Post</button>
                                            </div>
                                        </form>
                                    </div> <!-- end .border-->
                                    <!-- end comment box -->

                                    <!-- Story Box-->
                                    <div class="border border-light rounded p-2 mb-3">
                                        <div class="d-flex">
                                            <img class="me-2 rounded-circle" src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                alt="Generic placeholder image" height="32">
                                            <div>
                                                <h5 class="m-0">Jeremy Tomlinson</h5>
                                                <p class="text-muted"><small>about 2 minuts ago</small></p>
                                            </div>
                                        </div>
                                        <p>Story based around the idea of time lapse, animation to post soon!</p>

                                        <img src="{{ asset('assets/images/small/small-1.jpg') }}" alt="post-img"
                                            class="rounded me-1" height="60" />
                                        <img src="{{ asset('assets/images/small/small-2.jpg') }}" alt="post-img"
                                            class="rounded me-1" height="60" />
                                        <img src="{{ asset('assets/images/small/small-3.jpg') }}" alt="post-img" class="rounded"
                                            height="60" />

                                        <div class="mt-2">
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-reply"></i> Reply</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-heart-outline"></i> Like</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-share-variant"></i> Share</a>
                                        </div>
                                    </div>

                                    <!-- Story Box-->
                                    <div class="border border-light rounded p-2 mb-3">
                                        <div class="d-flex">
                                            <img class="me-2 rounded-circle" src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                alt="Generic placeholder image" height="32">
                                            <div>
                                                <h5 class="m-0">Thelma Fridley</h5>
                                                <p class="text-muted"><small>about 1 hour ago</small></p>
                                            </div>
                                        </div>
                                        <div class="font-16 text-center fst-italic text-dark">
                                            <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh
                                            libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                            sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                            porta. Mauris massa.
                                        </div>

                                        <div class="mx-n2 p-2 mt-3 bg-light">
                                            <div class="d-flex">
                                                <img class="me-2 rounded-circle"
                                                    src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                    alt="Generic placeholder image" height="32">
                                                <div>
                                                    <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3
                                                            hours ago</small></h5>
                                                    Nice work, makes me think of The Money Pit.

                                                    <br />
                                                    <a href="javascript: void(0);"
                                                        class="text-muted font-13 d-inline-block mt-2"><i
                                                            class="mdi mdi-reply"></i> Reply</a>

                                                    <div class="d-flex mt-3">
                                                        <a class="pe-2" href="#">
                                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                                class="rounded-circle" alt="Generic placeholder image"
                                                                height="32">
                                                        </a>
                                                        <div>
                                                            <h5 class="mt-0">Thelma Fridley <small
                                                                    class="text-muted">5 hours ago</small></h5>
                                                            i'm in the middle of a timelapse animation myself! (Very
                                                            different though.) Awesome stuff.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-2">
                                                <a class="pe-2" href="#">
                                                    <img src="{{ asset('storage/'. $profile->photo) }}" class="rounded-circle"
                                                        alt="Generic placeholder image" height="32" width="32">
                                                </a>
                                                <div class="w-100">
                                                    <input type="text" id="simpleinput"
                                                        class="form-control border-0 form-control-sm"
                                                        placeholder="Add comment">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i
                                                    class="mdi mdi-heart"></i> Like (28)</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-share-variant"></i> Share</a>
                                        </div>
                                    </div>

                                    {{-- <!-- Story Box-->
                                    <div class="border border-light p-2 mb-3">
                                        <div class="d-flex">
                                            <img class="me-2 rounded-circle" src="assets/images/users/avatar-6.jpg"
                                                alt="Generic placeholder image" height="32">
                                            <div>
                                                <h5 class="m-0">Martin Williamson</h5>
                                                <p class="text-muted"><small>15 hours ago</small></p>
                                            </div>
                                        </div>
                                        <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                        <iframe src='https://player.vimeo.com/video/87993762' height='300'
                                            class="img-fluid border-0"></iframe>
                                    </div> --}}

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="text-danger"><i
                                                class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                                    </div>

                                </div>
                                <!-- end timeline content-->
                                       
                                <div class="tab-pane" id="settings">
                                    <form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>
                                            Personal Info</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="prenom" class="form-label">First Name</label>
                                                    <input type="text" name="prenom" class="form-control" id="prenom"
                                                        placeholder="Enter first name" value="{{ old('prenom', $profile->prenom) }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="prenom" class="form-label">Name</label>

                                                    <input id="name" type="text"
                                                                 class="form-control @error('name') is-invalid @enderror" name="name"
                                                                 value="{{ old('name',$profile->name)}}" placeholder="inserer ton nom" required autocomplete="name" autofocus>
                     
                                                             @error('name')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                        
                                                     </div>
                                            </div> <!-- end col -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="postnom" class="form-label">Post nom</label>
                                                    <input type="text" name="postnom" class="form-control" id="postnom"
                                                        placeholder="Enter post nom" value="{{ old('postnom',$profile->postnom) }}">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Tel:</label>
                                                    <input type="number" name="phone" class="form-control" id="phone"
                                                        placeholder="081453227" value="{{ old('phone',$profile->phone) }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="Occupation" class="form-label">Occupation</label>
                                                    <input type="text" name="Occupation" class="form-control" id="Occupation"
                                                        placeholder="Avocat" value="{{ old('Occupation',$profile->Occupation) }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="Occupation" class="form-label">Sexe</label>
                                                        <input type="text" name="sexe" class="form-control @error('sexe')
                                                            
                                                        @enderror" id="sexe" value="{{ old('sexe', $profile->sexe) }}">
                                                        
                                                                 @error('sexe')
                                                                     <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                     </span>
                                                                 @enderror 
                                                </div>
                                            </div>
                                        </div> 
                                      <div class="row">
                                        {{-- <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="photo" class="form-label">Photo</label>
                                                <input type="file" name="photo" class="form-control" id="photo"
                                                 value="{{ old('photo',$profile->photo) }}">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="dateNaissance" class="form-label">Date de Naissance</label>
                                                <input type="date" name="dateNaissance" class="form-control" id="dateNaissance"
                                                 value="{{ old('dateNaissance',$profile->dateNaissance) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="dateNaissance" class="form-label">Adresse</label>
                                                <input type="adresse" name="adresse" class="form-control" id="adresse"
                                                 value="{{ old('adresse',$profile->adresse) }}">
                                            </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="userbio" class="form-label">Bio</label>
                                                    <textarea name="bio" class="form-control" id="userbio" rows="4" placeholder="Write something...">
                                                        {{ $profile->bio }}
                                                    </textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="useremail"
                                                        placeholder="Enter email" value="{{ old('email',$profile->email) }}">
                                                    <span class="form-text text-muted"><small>If you want to change
                                                            email please <a href="javascript: void(0);">click</a>
                                                            here.</small></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="userpassword"
                                                        placeholder="Enter password" value="{{ $profile->password }}">
                                                    <span class="form-text text-muted"><small>If you want to change
                                                            password please <a href="javascript: void(0);">click</a>
                                                            here.</small></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success mt-2"><i
                                                    class="mdi mdi-content-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end settings content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div> 
    
@endsection