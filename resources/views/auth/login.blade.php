@extends ('layouts/login')

@section ('title', '登录')

@section ('css')
    @parent

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/css/login.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
@endsection

@section ('content')
    <div class="col-md-6 login-container bs-reset">
            <div class="login-content">
                <h1>lfs日常开发</h1>
                <p>此软件主要用于lfs自己对新技术的尝试和一些生活琐事的记录。<br>各种想做的事情，甚至谋划的事情。</p>
                <form action="{{route('login')}}" class="login-form" method="post">
                    @error('email') || error('password')
                    <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="随便输入" name="email" required/>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="看着来" name="password" required/>
                        </div>
                        {{ csrf_field() }}
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="rem-password">
                                <p>记住我
                                    <input type="checkbox"  name="remember" class="rem-checkbox" {{ old('remember') ? 'checked' : '' }} />
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-8 text-right pull-right">
                            <div class="forgot-password">
                                <a href="javascript:;" id="forget-password" class="forget-password">忘记密码?</a>
                            </div>
                            <button class="btn blue" type="submit">登录</button>
                        </div>
                    </div>
                </form>
                <!-- BEGIN FORGOT PASSWORD FORM -->
                <form class="forget-form" action="javascript:;" method="post">
                    <h3 class="font-green">忘记密码?</h3>
                    <p>请输入邮箱</p>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn grey btn-default">返回</button>
                        <button type="submit" class="btn blue btn-success uppercase pull-right">找回</button>
                    </div>
                </form>
                <!-- END FORGOT PASSWORD FORM -->
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; lfs 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section ('javascript')
@parent

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/vendor/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/vendor/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/vendor/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/vendor/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/js/app-public.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/js/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
@endsection