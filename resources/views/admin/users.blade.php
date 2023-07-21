@if (Auth::user()->userType == 'doctor')
    @foreach ($all as $item)
        <a href="{{ route('admin.conversations.show', $item->id) }}" class="text-body">
            <div class="d-flex align-items-start mt-1 p-2">
                <img src="@if ($item->photo == null) {{ asset('storage/images/6596121.png') }} @else {{ asset("storage/$item->photo") }} @endif"
                    class="me-2 rounded-circle" height="40" width="40" alt="{{ $item->name }}" />
                @if ($item->isUserOnline())
                    <iconify-icon class="bg-white" icon="mdi:circle"
                        style="color: rgb(17, 255, 17);position:absolute;border:2px solid white;border-radius:50%; font-size:10px; margin-left:0px; margin-bottom:-1px">
                    </iconify-icon>
                    <span>
                    @else
                        <iconify-icon class="bg-white font-11" icon="mdi:circle"
                            style="color: rgb(255, 112, 17);position:absolute;border:2px solid white;border-radius:50%; margin-left:0px; margin-bottom:-1px">
                        </iconify-icon>
                @endif
                <div class="w-100 overflow-hidden">
                    <h5 class="mt-0 mb-0 font-14">
                        <span
                            class="float-end text-muted font-12">{{ Carbon\Carbon::parse($item->created_at)->format('h:m') }} 
                        
                         
                        
                        </span>
                        {{ $item->name }}
                    </h5>
                    <p class="mt-1 mb-0 text-muted font-14">

                        <span class="w-25 float-end text-end font-10">
                            {{ Carbon\Carbon::parse($item->lastLogin)->diffForHumans() }}
                           
                        <span
        class="badge bg-danger">
        @if (isset($unread[$item->id]))
        {{ $unread[$item->id] }}
        @else
        @endif
        <span class="visually-hidden">unread messages</span>
    </span>
                        </span>




                        {{-- <span class="w-25 float-end text-end">
                                                      {{ $item->lastLogin >=now()->subMinutes(2) ? '<span><iconify-icon icon="mdi:circle" style="color: rgb(17, 255, 17);background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%;margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                      </span>' :'<iconify-icon icon="mdi:circle" style="color: rgb(255, 112, 17); font-size:12px; margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                            <span></span>
                                                          '}}                                     
                                                        </span> --}}
                        <span class="w-75">How are you today?</span>
                       
                        </span>
                    </p>
                </div>
            </div>
        </a>
        <hr>
    @endforeach
@else
    @foreach ($all as $item)
        @if ($item->userType == 'doctor')
            <a href="{{ route('admin.conversations.show', $item->id) }}" class="text-body">
                <div class="d-flex align-items-start mt-1 p-2">
                    <img src="@if ($item->photo == null) {{ asset('storage/images/6596121.png') }} @else {{ asset("storage/$item->photo") }} @endif"
                        class="me-2 rounded-circle" height="40" width="40" alt="{{ $item->name }}" />
                    @if ($item->isUserOnline())
                        <iconify-icon class="bg-white" icon="mdi:circle"
                            style="color: rgb(17, 255, 17);position:absolute;border:2px solid white;border-radius:50%; font-size:10px; margin-left:0px; margin-bottom:-1px">
                        </iconify-icon>
                        <span>
                        @else
                            <iconify-icon class="bg-white font-11" icon="mdi:circle"
                                style="color: rgb(255, 112, 17);position:absolute;border:2px solid white;border-radius:50%; margin-left:0px; margin-bottom:-1px">
                            </iconify-icon>
                    @endif
                    <div class="w-100 overflow-hidden">
                        <h5 class="mt-0 mb-0 font-14">
                            <span
                                class="float-end text-muted font-12">{{ Carbon\Carbon::parse($item->created_at)->format('h:m') }}  <span class="text-danger">
                                    
                                    
                                  
                                    @if (isset($unread[$item->id]))
                                    {{ $unread[$item->id] }}
                                    @else
                                    {{ $unread[$item->id] }}
                                @endif</span>


                            {{ $item->name }}
                        </h5>
                        <p class="mt-1 mb-0 text-muted font-14">

                            <span class="w-25 float-end text-end font-10">
                                {{ Carbon\Carbon::parse($item->lastLogin)->diffForHumans() }}

                            </span>
                            </span>




                            {{-- <span class="w-25 float-end text-end">
                                                          {{ $item->lastLogin >=now()->subMinutes(2) ? '<span><iconify-icon icon="mdi:circle" style="color: rgb(17, 255, 17);background:white; font-size:10px; border:3px solid white; padding:0;  border-radius:50%;margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                          </span>' :'<iconify-icon icon="mdi:circle" style="color: rgb(255, 112, 17); font-size:12px; margin-left:-13px; margin-bottom:-15px"></iconify-icon></i>
                                                                <span></span>
                                                              '}}                                     
                                                            </span> --}}
                            <span class="w-75">How are you today?</span>
                           
                        </span>
                        </p>
                    </div>
                </div>
            </a>
            <hr>
        @else
        @endif
    @endforeach
@endif
