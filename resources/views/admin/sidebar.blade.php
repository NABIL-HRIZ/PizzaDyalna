<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <x-app-layout>
    
        </x-app-layout>
        
      <li class="nav-item">
        <a class="nav-link" href="{{url('show_users')}}">
          <i class="ti-shield menu-icon"></i>
          <span class="menu-title">Show Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="ti-palette menu-icon"></i>
          <span class="menu-title">Galery </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('add_galery')}}">Add Galery </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('show_galery')}}">Show Galeries</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('table_reservation')}}">
          <i class="ti-layout-list-post menu-icon"></i>
          <span class="menu-title">Table Reservation </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="ti-palette menu-icon"></i>
          <span class="menu-title">Chefs </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('add_chef')}}">Add Chef </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('show_chefs')}}">Show Chefs</a></li>
          </ul>
        </div>
      </li>
   

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="ti-view-list-alt menu-icon"></i>
          <span class="menu-title">Orders </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('orders_view')}}">All Orders </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('orders_completed')}}">Orders completed</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('orders_incomplete')}}">Orders incompleted</a></li>
          
          </ul>
        </div>
      </li>


     
    </ul>
  </nav>