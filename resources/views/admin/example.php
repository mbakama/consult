<div class="card-body px-0 pb-0">
    <ul class="conversation-list px-3" data-simplebar style="max-height: 554px">

        @foreach ($cons as $message)
            @if ($message->user_sent != Auth::user()->id)
                <li class="clearfix">
                    <div class="chat-avatar">
                        <img src="assets/images/users/avatar-5.jpg" class="rounded"
                            alt="Shreyu N" />
                        <i>10:00</i>
                    </div>
                    <div class="conversation-text">
                        <div class="ctext-wrap-left">
                            <i></i>
                            <p>{{ $message->contenu }}</p>
                        </div>
                    </div>
                    <div class="conversation-actions dropdown">
                        <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i>
                                <iconify-icon icon="uil:ellipsis-v"></iconify-icon>
                            </i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Copy Message</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </li>
            @else
                <li class="clearfix odd">
                    <div class="chat-avatar">
                        <img src="assets/images/users/avatar-1.jpg" class="rounded"
                            alt="dominic" />
                        <i>10:01</i>
                    </div>
                    <div class="conversation-text">
                        <div class="ctext-wrap">
                            {{-- <i>{{ Auth::user->name }}</i> --}}
                            <p>{{ $message->contenu }}</p>
                        </div>
                    </div>
                    <div class="conversation-actions dropdown">
                        <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i>
                                <iconify-icon icon="uil:ellipsis-v"></iconify-icon>
                            </i>
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Copy Message</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
        {{-- <li class="clearfix">
<div class="chat-avatar">
<img src="assets/images/users/avatar-5.jpg" class="rounded"
alt="Shreyu N" />
<i>10:01</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap-left">
<i>Shreyu N</i>
<p>Yeah everything is fine</p>
</div>
</div>
<div class="conversation-actions dropdown">
<button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
aria-expanded="false">
<i><iconify-icon icon="uil:ellipsis-v"></iconify-icon></i>
</button>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Copy Message</a>
<a class="dropdown-item" href="#">Edit</a>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix odd">
<div class="chat-avatar">
<img src="assets/images/users/avatar-1.jpg" class="rounded"
alt="dominic" />
<i>10:02</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap">
<i>Dominic</i>
<p>Wow that's great</p>
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
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix">
<div class="chat-avatar">
<img src="assets/images/users/avatar-5.jpg" alt="Shreyu N"
class="rounded" />
<i>10:02</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap-left">
<i>Shreyu N</i>
<p>Let's have it today if you are free</p>
</div>
</div>
<div class="conversation-actions dropdown">
<button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
aria-expanded="false">
<i><iconify-icon icon="uil:ellipsis-v"></iconify-icon></i>
</button>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Copy Message</a>
<a class="dropdown-item" href="#">Edit</a>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix odd">
<div class="chat-avatar">
<img src="assets/images/users/avatar-1.jpg" alt="dominic"
class="rounded" />
<i>10:03</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap">
<i>Dominic</i>
<p>Sure thing! let me know if 2pm works for you</p>
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
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix">
<div class="chat-avatar">
<img src="assets/images/users/avatar-5.jpg" alt="Shreyu N"
class="rounded" />
<i>10:04</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap-left">
<i>Shreyu N</i>
<p>
Sorry, I have another meeting scheduled at 2pm. Can we
have it at 3pm instead?
</p>
</div>
</div>
<div class="conversation-actions dropdown">
<button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
aria-expanded="false">
<i><iconify-icon icon="uil:ellipsis-v"></iconify-icon></i>
</button>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Copy Message</a>
<a class="dropdown-item" href="#">Edit</a>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix">
<div class="chat-avatar">
<img src="assets/images/users/avatar-5.jpg" alt="Shreyu N"
class="rounded" />
<i>10:04</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap-left">
<i>Shreyu N</i>
<p>
We can also discuss about the presentation talk format
if you have some extra mins
</p>
</div>
</div>
<div class="conversation-actions dropdown">
<button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
aria-expanded="false">
<i><iconify-icon icon="uil:ellipsis-v"></iconify-icon></i>
</button>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Copy Message</a>
<a class="dropdown-item" href="#">Edit</a>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li>
<li class="clearfix odd">
<div class="chat-avatar">
<img src="assets/images/users/avatar-1.jpg" alt="dominic"
class="rounded" />
<i>10:05</i>
</div>
<div class="conversation-text">
<div class="ctext-wrap">
<i>Dominic</i>
<p>
3pm it is. Sure, let's discuss about presentation
format, it would be great to finalize today. I am
attaching the last year format and assets here...
</p>
</div>
<div class="card mt-2 mb-1 shadow-none border text-start">
<div class="p-2">
<div class="row align-items-center">
    <div class="col-auto">
        <div class="avatar-sm">
            <span class="avatar-title rounded"> .ZIP </span>
        </div>
    </div>
    <div class="col ps-0">
        <a href="javascript:void(0);"
            class="text-muted fw-bold">Hyper-admin-design.zip</a>
        <p class="mb-0">2.3 MB</p>
    </div>
    <div class="col-auto">
        <!-- Button -->
        <a href="javascript:void(0);"
            class="btn btn-link btn-lg text-muted">
            <i class="ri-download-2-line"></i>
        </a>
    </div>
</div>
</div>
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
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
</li> --}}

    </ul>
</div>



<div class="col-xxl-6 col-xl-12 order-xl-2">
    <div class="card">
        <div class="card-body px-0 pb-0">
            <ul class="conversation-list px-3" data-simplebar style="max-height: 554px">
                @foreach ($cons as $message)
                @if ($message->user_sent != Auth::user()->id)
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="assets/images/users/avatar-5.jpg" class="rounded"
                                alt="Shreyu N" />
                            <i>10:00</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap-left">
                                <i></i>
                                <p>{{ $cons->contenu }}</p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i>
                                    <iconify-icon icon="uil:ellipsis-v"></iconify-icon>
                                </i>
                            </button>
    
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                {{-- @else --}}
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="assets/images/users/avatar-1.jpg" class="rounded"
                                alt="dominic" />
                            <i>10:01</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>{{ Auth::user->name }}</i>
                                <p>{{ $cons->contenu }}</p>
                            </div>
                        </div>
                        <div class="conversation-actions dropdown">
                            <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i>
                                    <iconify-icon icon="uil:ellipsis-v"></iconify-icon>
                                </i>
                            </button>
    
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy Message</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
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