
       <div class="card-body px-0 pb-0">
           <ul class="conversation-list px-3" data-simplebar style="max-height: 554px">
            <li class="clearfic mb-5">
               <div class="chat-avatar">
                  <img style="margin-bottom:-10px; position: relative;" src="assets/images/users/avatar-5.jpg" class="rounded"
                      alt="Shreyu N" /> 
                      <span style="position:absolute; padding-left:5px">{{ $all->name }}</span>
                     
                      @if ($all->isUserOnline())
                      <iconify-icon icon="mdi:circle"
                          style="margin-top:35px; margin-left:-10px;color: rgb(17, 255, 17); font-size:12px;background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%; position:absolute;  ">
                      </iconify-icon><span>
                      @else
                          <iconify-icon icon="mdi:circle"
                              style="margin-top:35px; margin-left:-10px;color: rgb(255, 112, 17); font-size:12px;background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%; position:absolute;  ">
                          </iconify-icon>
                        @endif
                        
              </div>
              @if ($all->isUserOnline())
              <span style="position:absolute; margin-top:25px; margin-left:5px; font-family:Arial, Helvetica, sans-serif; font-size:10px">Online</span>

             @else
             <span style="position:absolute; margin-top:25px; margin-left:5px; font-family:Arial, Helvetica, sans-serif; font-size:10px">Online il y a </span>
         @endif
            </li>
            <hr>
            <div id="body-chat">
                @foreach ($cons as $message)
                {{-- @if ($message->user_received == Auth::user()->id)
                    <li class="clearfix">
                        
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                              
                               
                                <p>{{ $message->contenu }}</p>
                                <span class="mb-0 pt-2" style="font-size: 8px; float:right;">{{ $message->created_at->diffForHumans() }}</span>
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
               @endif --}}
               
                    <li class="clearfix  @if ($message->user_received !== Auth::user()->id)  odd @endif">
                        <div class="chat-avatar">
                            <img src="assets/images/users/avatar-1.jpg" class="rounded"
                                alt="dominic" />
                            <i>10:01</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>{{ Auth::user()->name }}</i>
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
               
            @endforeach
            </div>
              
           </ul>
       </div>
       <!-- end card-body -->
       <div class="card-body p-0">
           <div class="row">
               <div class="col">
                   <div class="mt-2 bg-light p-3">
                       <form class="needs-validation" novalidate="" id="chat-form" action="{{ route('envoi') }}" method="POST" name="chat-form"
                           id="chat-form">
                           @csrf
                           @method('POST')
                           <div class="row">
                               <div class="col mb-2 mb-sm-0">
                                <textarea name="message" id="" cols="30" class="form-control border-0" rows="3" required=""></textarea>
                               
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
