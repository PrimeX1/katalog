
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img/default.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:#fff">{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview @yield('ac-laptop')">
        <a href="{{ url('/laptop') }}"><i class="fa fa-laptop"></i> <span>Laptop</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu ">
          <li><a href="{{ url('/laptop') }}">Data Laptop</a></li>
          @if(Auth::user()->level==1)
          <li><a href="{{ url('/merk') }}">Data Merk Laptop</a></li>
          <li><a href="{{ url('/procesor') }}">Data processor Laptop</a></li>
          <li><a href="{{ url('/ram') }}">Data Ram Laptop</a></li>
          <li><a href="{{ url('/vga') }}">Data VGA Laptop</a></li>
          <li><a href="{{ url('/hardisk') }}">Data Hardisk Laptop</a></li>
          <li><a href="{{ url('/os') }}">Data OS Laptop</a></li>
          @endif
        </ul>
      </li>
   </ul>
     
    
   @if(Auth::user()->level==1)
   <ul class="sidebar-menu" data-widget="tree">
   <li class="treeview @yield('ac-user')">
      <a href="#"><i class="fa fa-user"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('user/add') }}" target="blank">Add New</a></li>
        <li><a href="{{ url('user') }}">Data User</a></li>
      </ul>
    </li>    
  </ul>
  @endif
  </section>
    <!-- /.sidebar -->
  </aside>