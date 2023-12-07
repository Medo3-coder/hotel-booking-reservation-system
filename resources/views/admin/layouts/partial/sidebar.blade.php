	<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Rocker</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
            </div>
         </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li>
                <a href="{{route('admin.dashboard')}}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>


            <li>
                <a href="{{route('admin.admins')}}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Admins</div>
                </a>
            </li>


            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Default</a>
                    </li>
                    <li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Alternate</a>
                    </li>
                    <li> <a href="index3.html"><i class='bx bx-radio-circle'></i>Graphical</a>
                    </li>
                </ul>
            </li> --}}
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Application</div>
                </a>
                <ul>
                    <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
                    </li>
                    <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
                    </li>
                    <li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
                    </li>
                    <li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
                    </li>
                    <li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
                    </li>
                    <li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
                    </li>
                    <li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">UI Elements</li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">eCommerce</div>
                </a>
                <ul>
                    <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                    </li>
                    <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                    </div>
                    <div class="menu-title">Components</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
                    </li>
                    <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>

                </ul>
            </li>







            {{-- <li>
                <a href="https://codervent.com/rocker/documentation/index.html" target="_blank">
                    <div class="parent-icon"><i class="bx bx-folder"></i>
                    </div>
                    <div class="menu-title">Documentation</div>
                </a>
            </li> --}}
            <li>
                <a href="#" target="_blank">
                    <div class="parent-icon"><i class="bx bx-support"></i>
                    </div>
                    <div class="menu-title">Support</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
