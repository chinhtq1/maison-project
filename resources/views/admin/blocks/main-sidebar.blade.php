<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home')}}" class="brand-link">
      <img src="{{asset('admin-theme/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span><br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <li class="user-panel mt-3 pb-3 mb-3 d-flex has-treeview">
        <div class="image">
          <img src="{{asset('admin-theme/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </li>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Users -->
          <li class="nav-item">
            <a href="{{ route('admin_users')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                  Quản trị viên
              </p>
            </a>
          </li>

          <!-- Tin tuc -->
          <li class="nav-item">
            <a href="{{ route('admin_articles')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Tin tức
              </p>
            </a>
          </li>

          <!-- Slide -->
          <li class="nav-item">
            <a href="{{ route('admin_slides')}}" class="nav-link">
              <i class="nav-icon far fa-images"></i>
              <p>
                Slide
              </p>
            </a>
          </li>

          <!-- Slide -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin_settings_general')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chỉnh sửa chung</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin_settings_text_single')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Chỉnh Sửa Text Đơn</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="{{ route('admin_settings')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chỉnh sửa từng nội dung</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Quản lý đa phương tiện
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('image_manager')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý ảnh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('file_manager')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý File</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
