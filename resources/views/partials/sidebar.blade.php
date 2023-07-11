 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu">
     <!-- Brand Logo Light -->
     @if (Auth::user()->userType=="doctor")
     <a href="{{ route('dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo" />
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-sm.png') }}" alt="small logo" />
        </span>
    </a>
     @else
     <a href="{{ route('dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo" />
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-sm.png') }}" alt="small logo" />
        </span>
    </a>
     @endif
    

     <!-- Brand Logo Dark -->
     <a href="index.html" class="logo logo-dark">
         <span class="logo-lg">
             <img src="{{ url('assets/images/logo-dark.png') }}" alt="dark logo" />
         </span>
         <span class="logo-sm">
             <img src="{{ url('assets/images/logo-dark-sm.png') }}" alt="small logo" />
         </span>
     </a>

     <!-- Sidebar Hover Menu Toggle Button -->
     <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
         <i class="ri-checkbox-blank-circle-line align-middle"></i>
     </div>

     <!-- Full Sidebar Menu Close Button -->
     <div class="button-close-fullsidebar">
         <i class="ri-close-fill align-middle"></i>
     </div>

     <!-- Sidebar -left -->
     <div class="h-100" id="leftside-menu-container" data-simplebar>
         <!-- Leftbar User -->
         <div class="leftbar-user">
             <a href="pages-profile.html">
                 <img src="{{ url('assets/images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                     class="rounded-circle shadow-sm" />
                 <span class="leftbar-user-name mt-2">Dominic Keller</span>
             </a>
         </div>

         <!--- Sidemenu -->
         <ul class="side-nav">
             <li class="side-nav-title">Navigation</li>
             <li class="side-nav-item">
                 <a href="{{ route('dashboard') }}" class="side-nav-link">
                     <i class="uil uil-estate"></i>
                    
                     <span> Tableau de bord </span>
                 </a>
                 
             </li>
             @if (Auth::user()->userType=='patient.e')
                 
             @else
             <li class="side-nav-item">
                <a href="{{ route('admin.files') }}" class="side-nav-link">
                    <i class="uil uil-folder-plus"></i>
                    <span>Gestion fichiers </span>
                </a>
            </li>
             @endif 
        
             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                     class="side-nav-link">
                     <i>
                         <iconify-icon icon="uil:copy-alt"></iconify-icon>
                     </i>
                     <span> Pages </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarPages">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="{{ route('admin.list-patients') }}">Gestion des patients</a>
                         </li>
                         <li>
                             <a href="pages-tva.html">Details TVA</a>
                         </li> 
                     </ul>
                 </div>
             </li>
             <li class="side-nav-item">
                 <a href="apps-calendar.html" class="side-nav-link">
                     <i>
                         <iconify-icon icon="uil:calender"></iconify-icon>
                     </i>
                     <span> Calendar </span>
                 </a>
             </li>

             <li class="side-nav-item">
                 <a href="{{ route('admin.messages') }}" class="side-nav-link">
                     <i>
                         <iconify-icon icon="uil:comments-alt"></iconify-icon>
                     </i>
                     <span> Chat </span>
                 </a>
             </li>
             @if (Auth::user()->userType=='patient.e')
                 
             @else
             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                    class="side-nav-link">
                    <i>
                        <iconify-icon icon="uil:envelope"></iconify-icon>
                    </i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-email-inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Read Email</a>
                        </li>
                    </ul>
                </div>
            </li>
             @endif 
            
             <!-- Help Box -->

             <!-- end Help Box -->
         </ul>
         <!--- End Sidemenu -->

         <div class="clearfix"></div>
     </div>
 </div>
 <!-- ========== Left Sidebar End ========== -->
