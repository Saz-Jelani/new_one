

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Mar 2024 12:09:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('/')}}admin-assets-index/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/')}}admin-assets-index/assets/images/favicon.png" type="image/x-icon">
    <title>Fastkart - @yield('title')</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets-index/assets/css/linearicon.css">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/datatables.css">


    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/ratio.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets-index/assets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin-assets-index/assets/css/style.css">
</head>
<body>

<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h1>NDUB</h1>
                                    <form class="d-inline-flex">
                                        <a href="{{route('dashboard')}}"
                                           class="align-items-center btn btn-theme d-flex">
                                            Back to Portal Page <i data-feather="arrow-right"></i>
                                        </a>
                                    </form>
                                </div>

                                <div class="title-header ">
                                    <h5>Create New Book Info</h5>
                                </div>



                                <p class="text-muted">{{session('message')}}</p>

                                <form class="form-horizontal" action="{{route('dashboard.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Book Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="firstname" type="text"
                                                       placeholder="Book Title" name="book_title"/>
                                            </div>
                                        </div>
                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Author</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="firstname" type="text"
                                                           placeholder="Author" name="author"/>
                                                </div>
                                            </div>
                                            <div class="theme-form theme-form-2 mega-form">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Publisher</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="firstname" type="text"
                                                               placeholder="Publisher" name="publisher"/>
                                                    </div>
                                                </div>
                                                <div class="theme-form theme-form-2 mega-form">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-3 mb-0">Edition</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" id="firstname" type="text"
                                                                   placeholder="Edition" name="edition"/>
                                                        </div>
                                                    </div>


                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-3 col-form-label form-label-title">Cover design</label>
                                                        <div class="form-group col-sm-9">
                                                            <form class="theme-form theme-form-3 mega-form">
                                                                <div class="mb-9 row align-items-center">
                                                                    <label>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control " type="file"
                                                                               id="formFile" name="iconimg"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    {{--                                            <div class="row">--}}
                                                    {{--                                                <label class="col-md-3 form-label">Publication Status</label>--}}
                                                    {{--                                                <div class="col-md-9">--}}
                                                    {{--                                                    <label><input type="radio" name="status" value="1"> Published</label>--}}
                                                    {{--                                                    <label><input type="radio" name="status" value="0"> Unpublished</label>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                            </div>--}}

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-3 col-form-label form-label-title">Stock</label>
                                                        <div class="col-sm-9">
                                                            <label class="switch">
                                                                <input type="hidden" name="stock"  value="Unavailable"> <span class="switch-state"></span>
                                                                <input type="checkbox" name="stock"  value="Available"> <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Create New Category</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">

                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->
</div>
<!-- Container-fluid End -->
</div>



</body>



<!-- latest js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- scrollbar simplebar js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/scrollbar/simplebar.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/scrollbar/custom.js"></script>

<!-- Sidebar jquery -->
<script src="{{asset('/')}}admin-assets-index/assets/js/config.js"></script>

<!-- tooltip init js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/tooltip-init.js"></script>

<!-- Plugins JS -->
<script src="{{asset('/')}}admin-assets-index/assets/js/sidebar-menu.js"></script>
{{--<script src="{{asset('/')}}admin-assets-index/assets/js/notify/bootstrap-notify.min.js"></script>--}}
<script src="{{asset('/')}}admin-assets-index/assets/js/notify/index.js"></script>

<!-- Apexchar js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/chart/apex-chart/apex-chart1.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/chart/apex-chart/moment.min.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/chart/apex-chart/chart-custom1.js"></script>


<!-- ck editor js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/ckeditor.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/ckeditor-custom.js"></script>

<!-- slick slider js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/slick.min.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/custom-slick.js"></script>

<!-- customizer js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/customizer.js"></script>

<!-- ratio js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/ratio.js"></script>

<!-- sidebar effect -->
<script src="{{asset('/')}}admin-assets-index/assets/js/sidebareffect.js"></script>

<!-- Data table js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/jquery.dataTables.js"></script>
<script src="{{asset('/')}}admin-assets-index/assets/js/custom-data-table.js"></script>

<!-- Theme js -->
<script src="{{asset('/')}}admin-assets-index/assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Mar 2024 12:09:28 GMT -->
</html>
