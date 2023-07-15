<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag

        Tip 3: the {{Request::is('dashboard') ? 'active' : '' }} is for coloured that field if we click on that
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal" >
          E-Commerce
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="nav-item {{Request::is('dashboard') ? 'active' : '' }} ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li> -->
          <li class="nav-item {{Request::is('categories') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('categories')}}">
              <i class="material-icons">person</i>
              <p>Cetegories</p>
            </a>
          </li>


          <li class="nav-item {{Request::is('add') ? 'active' : '' }} ">
            <a class="nav-link" href="{{url('add')}}">
              <i class="material-icons">person</i>
              <p>Add Cetegories</p>
            </a>
          </li>


          <li class="nav-item {{Request::is('products') ? 'active' : '' }} ">
            <a class="nav-link" href="{{url('products')}}">
              <i class="material-icons">person</i>
              <p>Products</p>
            </a>
          </li>

          
          <li class="nav-item {{Request::is('add_products') ? 'active' : '' }} ">
            <a class="nav-link" href="{{url('add_products')}}">
              <i class="material-icons">person</i>
              <p>Add Products</p>
            </a>
          </li>

          <!-- <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
            <a class="" style="text-align:center;"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <h3>{{ __('Logout') }}</h3>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </ul>
      </div>
    </div>