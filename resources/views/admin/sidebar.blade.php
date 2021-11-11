<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <div class="user-profile px-20 pt-15 pb-10">
            <div class="d-flex align-items-center">
                <div class="image">
                    <img src="{{ asset('main/images/avatar/avatar-13.png')}}"
                        class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
                </div>
                <div class="info">
                    <a class="dropdown-toggle px-20" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>

                    </div>
                </div>
            </div>

        </div>
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                    <i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
                    <span>Jobs Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('category.create')}}">
                    <i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
                    <span>Create New Categories</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
                    <span>Jobs</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-File"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></i>
                    <span>Applications</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
                    <span>Candidates</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-Credit-card"><span class="path1"></span><span class="path2"></span></i>
                    <span>Shortlisted</span>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                    <span>Employers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                    <span>Profile</span>
                </a>
            </li>
          
        </ul>
    </section>
</aside>
