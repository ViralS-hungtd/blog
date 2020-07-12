<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> Trang chủ</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-newspaper-o"></i>Tin tức</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon fa fa-newspaper-o"></i> Bài viết/Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('post') }}"><i class="nav-icon fa fa-newspaper-o"></i> Tin tức/ Sự kiện</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon fa fa-list"></i> Danh mục</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon fa fa-list"></i> Tag</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('customer') }}'><i class='nav-icon la la-question'></i>Khách hàng</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('comment') }}'><i class='nav-icon la la-question'></i> Bình Luận</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('userexam') }}'><i class='nav-icon la la-question'></i> Kết quả người dùng</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>