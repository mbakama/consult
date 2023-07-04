
        {{-- <div class="card-body px-0 pb-0">
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
                    {{-- <li class="clearfix odd">
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
        </div> --}}
        <!-- end card-body --> --}}
        {{-- <div class="card-body p-0">
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
   --}}