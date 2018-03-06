<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/skins/_all-skins.min.css">
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper" >
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding: 10px;">

        <div id="page-content">
            <form method="POST" action="http://127.0.0.1/hotelprice/public/admin/setting" accept-charset="UTF-8" class="form-horizontal vn-form"><input name="_token" type="hidden" value="SXVY00QB1P7wCMxwepJYxBsyUqHFYPcorIofu52I">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="title" placeholder=" " name="title" type="text" value="HotelPrice - Tìm kiếm, so sánh và đặt phòng phòng khách sạn">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="name" placeholder=" " name="name" type="text" value="HOTELPRICE">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <div class="col-md-12 input-group mar-btm ">
                            <textarea class="form-control" id="description" placeholder=" " rows="2" name="description" cols="50">HotelPrice giúp bạn đưa ra lựa chọn tốt nhất về phòng Khách sạn,Căn hộ và Nhà trọ từ các nhà cung cấp uy tín trong và ngoài nước.</textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="keywords" placeholder=" " name="keywords" type="text" value="kỳ nghỉ, gói kỳ nghỉ, gói du lịch, du lịch, lên kế hoạch, khách sạn, khách sạn bên đường, giường và bữa sáng, nhà trọ, sách hướng dẫn, đánh giá, nổi tiếng, chương trình, vé máy bay, rẻ, giảm giá, bản đồ, chơi gôn, trượt tuyết, bài viết, điểm du lịch, lời khuyên, nhà hàng">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <div class="col-md-12 input-group mar-btm ">
                            <input class="form-control file-preview" id="photo" placeholder=" " data-toggle="popover" data-container="body" data-trigger="hover" data-placement="bottom" data-content="<img src='http://laravel.dev/uploads/default/hotel-price-photo.jpg' style='width:100%;' />" name="photo" type="text" value="http://laravel.dev/uploads/default/hotel-price-photo.jpg" data-original-title="" title="">
                            <span class="input-group-btn"><a href="http://127.0.0.1/hotelprice/public/admin/manager/dialog.php?akey=BWuewbu8zqIjJWNzdlAkqk0laPGVOaSF&amp;type=1&amp;field_id=photo" class="iframe-btn btn btn-mint"><i class="fa fa-upload"></i> Upload</a></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="favicon">Favicon</label>
                        <div class="col-md-12 input-group mar-btm ">
                            <input class="form-control file-preview" id="favicon" placeholder=" " data-toggle="popover" data-container="body" data-trigger="hover" data-placement="bottom" data-content="<img src='http://laravel.dev/uploads/default/favicon.png' style='width:100%;' />" name="favicon" type="text" value="http://laravel.dev/uploads/default/favicon.png" data-original-title="" title="">
                            <span class="input-group-btn"><a href="http://127.0.0.1/hotelprice/public/admin/manager/dialog.php?akey=BWuewbu8zqIjJWNzdlAkqk0laPGVOaSF&amp;type=1&amp;field_id=favicon" class="iframe-btn btn btn-mint"><i class="fa fa-upload"></i> Upload</a></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="col-md-12 input-group mar-btm ">
                            <input class="form-control file-preview" id="logo" placeholder=" " data-toggle="popover" data-container="body" data-trigger="hover" data-placement="bottom" data-content="<img src='http://laravel.dev/uploads/default/logo.png' style='width:100%;' />" name="logo" type="text" value="http://laravel.dev/uploads/default/logo.png" data-original-title="" title="">
                            <span class="input-group-btn"><a href="http://127.0.0.1/hotelprice/public/admin/manager/dialog.php?akey=BWuewbu8zqIjJWNzdlAkqk0laPGVOaSF&amp;type=1&amp;field_id=logo" class="iframe-btn btn btn-mint"><i class="fa fa-upload"></i> Upload</a></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <div class="col-md-12 input-group mar-btm ">
                            <textarea class="form-control" id="about" placeholder=" " rows="2" name="about" cols="50">&lt;span class="text"&gt;Website &lt;b&gt;DORE.VN&lt;/b&gt; cung cấp thông tin về giá của sản phẩm tốt nhất, rẻ nhất được cập nhật theo thời gian thực từ nhiều của hàng khác nhau cho từng mặt hàng giúp bạn tìm ngay được giá tốt nhất và tiết kiệm thời gian cũng như chất lượng sản phẩm.&lt;/span&gt;</textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="copyright">Copyright</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="copyright" placeholder=" " name="copyright" type="text" value="Copyrights © 2017 DORE.VN. All Rights Reserved. Xây dựng và phát triển bởi GXTeam 2015">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="address" placeholder=" " name="address" type="text" value="Tầng 4, tòa A, Chung cư T608 - Tổng cục V, Ngõ 643A Phạm Văn Đồng, Phường Cổ Nhuế 1, Quận Bắc Từ Liêm, Hà Nội">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_facebook">Link Facebook</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="link_facebook" placeholder=" " name="link_facebook" type="text" value="http://facebook.com/hotelprice.vn">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_twitter">Link Twitter</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="link_twitter" placeholder=" " name="link_twitter" type="text" value="https://twitter.com/phamcuongt2">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_instagram">Link Instagram</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="link_instagram" placeholder=" " name="link_instagram" type="text" value="https://www.instagram.com/hotelprice.vn">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_google">Link Google</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="link_google" placeholder=" " name="link_google" type="text" value="https://plus.google.com/+PhamDinhCuong">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link_wikipedia">Link Wikipedia</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="link_wikipedia" placeholder=" " name="link_wikipedia" type="text" value="https://vi.wikipedia.org/wiki/Hotel_Price">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="telephone" placeholder=" " name="telephone" type="text" value="+84947212290">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="author" placeholder=" " name="author" type="text" value="Cương Phạm">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kinh-nghiem-du-lich">Kinh-nghiem-du-lich</label>
                        <div class="col-md-12 input-group mar-btm  ">
                            <input class="form-control" id="kinh-nghiem-du-lich" placeholder=" " name="kinh-nghiem-du-lich" type="text" value="">

                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>

</html>
