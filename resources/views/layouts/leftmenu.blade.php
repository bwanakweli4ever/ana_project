<div id="menu" role="navigation">
    <ul class="navigation list-unstyled" id="demo">
        <li><span class="close-icon d-xl-none d-lg-block">ANA RW</span></li>

        <a href="{{ URL::to('index') }}" class="logo navbar-brand mr-0">
            <h1 class="text-center">ANA RWANDA NM</h1>
        </a>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('') }}">
                <span class="mm-text ">Dashboard</span>
                <span class="menu-icon"><i class="im im-icon-Home"></i></span>
            </a>
        </li>

       <!--  <li {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('builder') }}">
                <span class="mm-text ">Crud Builder</span>
                <span class="menu-icon"><i class="im im-icon-Gift-Box"></i></span>
            </a>
        </li>
 -->
       
      

        

      <!--   <li {!! (Request::is('advanced_select') || Request::is('toastr') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Pages</span>
                <span class="menu-icon "> <i class="im im-icon-Books"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('advanced_select') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('advanced_select') }}">
                        Advanced Form Elements
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('toastr') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('toastr') }}">
                        Toastr Notification
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('sweetalert') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('sweetalert') }}">
                        Advanced Alerts
                    </a>
                </li>
            </ul>
        </li>
 -->






        @include("layouts/menu")
    </ul>
    <!-- / .navigation -->
</div>
