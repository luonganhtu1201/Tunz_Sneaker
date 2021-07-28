
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tunz Sneaker | Đổi Mật Khẩu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/register/images/logo-15.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/register/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/frontend/register/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/frontend/register/css/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/frontend/register/css/style.css">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/frontend/register/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper" class="wrapper">
    <div class="fxt-template-animation fxt-template-layout13">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12 order-md-2 fxt-bg-wrap">
                    <div class="fxt-bg-img" data-bg-image="/frontend/register/images/sneaker_banner.jpg">
                        <div class="fxt-header">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <a href="" class="fxt-logo"><img src="/frontend/register/images/logo-14.png" alt="Logo"></a>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <h1>Tun<span style="color: red;">z </span>Sneaker</h1>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-3">
                                <p>Chào mừng bạn đến với cửa hàng giày sneaker độc quyền tại Miền Bắc. Đội ngũ của chúng tôi chắc chắn sẽ mang đến cho bạn những đôi giày hot nhất trên thị trường, được cập nhật liên tục với những dịch vụ và ưu đãi chưa từng có.
                                    Còn chờ gì nữa mà không đăng nhập để có những trải nghiệm tuyệt vời ...</p>
                            </div>
                        </div>
                        <ul class="fxt-socials">
                            <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="fxt-youtube fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-12 order-md-1 fxt-bg-color">
                    <div class="fxt-content">
                        <h2><span style="color: red">Đổi </span>Mật khẩu</h2>
                        <div class="fxt-form">
                            <form action="{{Route('client.change.password.success')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="password" class="input-label">Mật khẩu mới</label>
                                    <input id="password" type="password" class="form-control" name="newpassword" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                @error('newpassword')
                                <i class="messcolor">{{ $message }}</i>
                                @enderror
                                <div class="form-group">
                                    <label for="password" class="input-label">Xác nhận lại mật khẩu mới</label>
                                    <input id="password" type="password" class="form-control" name="enterpass" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                @error('enterpass')
                                <i class="messcolor">{{ $message }}</i>
                                @enderror
                                <input type="hidden" value="{{$tokenPass}}" name="tokenPass">
                                <input type="hidden" value="{{$emailPass}}" name="emailPass">
                                <div class="form-group">
                                    <button type="submit" class="fxt-btn-fill">Thay đổi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jquery-->
<script src="/frontend/register/js/jquery-3.5.0.min.js"></script>
<!-- Popper js -->
<script src="/frontend/register/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/frontend/register/js/bootstrap.min.js"></script>
<!-- Imagesloaded js -->
<script src="/frontend/register/js/imagesloaded.pkgd.min.js"></script>
<!-- Validator js -->
<script src="/frontend/register/js/validator.min.js"></script>
<!-- Custom Js -->
<script src="/frontend/register/js/main.js"></script>
@include('sweetalert::alert')

</body>

</html>
