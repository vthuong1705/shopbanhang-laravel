<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right"></span> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> danh mục sản phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('category.index')}}">danh sách danh mục</a></li>
                        <li><a href="{{route('category.create')}}">thêm danh mục</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> thương hiệu <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('brand.index')}}">danh sách thương hiệu</a></li>
                        <li><a href="{{route('brand.create')}}">thêm thương hiệu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> sản phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('product.index')}}">danh sách sản phẩm</a></li>
                        <li><a href="{{route('product.create')}}">thêm sản phẩm</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
