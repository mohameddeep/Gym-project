<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @if ((auth('admin')->check()))
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('front')}}/images/admin/{{  Auth::guard('admin')->user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{  Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
  


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('dashbord_admin.index')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all admins</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('dashbord_admin.create')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create admins</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_user.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_user.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create user</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                classes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_class.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_class.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create class</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                trainers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_trainer.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all trainers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_trainer.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create trainer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                offers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_offer.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all offers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_offer.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create offer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_order.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_order.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create order</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                partners
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_partner.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all partners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_partner.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create partner</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                galleries
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_gallery.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all galleries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_gallery.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                contacts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_contact.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_contact.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashbord_event.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashbord_event.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create events</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    @endif
    <!-- /.sidebar -->
  </aside>
