@extends ('layouts/login')

@section ('title', '注册｜不一定通过')

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
        <div class="register-content">
            <h1>lfs日常开发</h1>
            <p>此软件主要用于lfs自己对新技术的尝试和一些生活琐事的记录。<br>各种想做的事情，甚至谋划的事情。</p>
            <form action="{{route('register')}}" class="register-form" method="post">

                <div class="form-body">
                    <div class="form-group @if(!empty($errors->get('email'))) has-error @endif">
                        <label>电子邮箱：</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control" name="email" autocomplete="off" placeholder="电子邮箱" required>
                        </div>
                        @if(!empty($errors->get('email')))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group @if(!empty($errors->get('name'))) has-error @endif">
                        <label>名称：</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="昵称名称" required>
                        </div>
                        @if(!empty($errors->get('name')))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group @if(!empty($errors->get('password'))) has-error @endif">
                        <label for="exampleInputPassword1">密码：</label>
                        <div class="input-group">
                             <span class="input-group-addon input-circle-left">
                                <i class="fa fa-asterisk"></i>
                            </span>
                            <input type="password" class="form-control" name="password" autocomplete="off" id="exampleInputPassword1" placeholder="密码" required>
                        </div>
                        @if(!empty($errors->get('password')))
                            <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">确认密码：</label>
                        <div class="input-group">
                             <span class="input-group-addon input-circle-left">
                                <i class="fa fa-asterisk"></i>
                            </span>
                            <input type="password" class="form-control" name="password_confirmation" autocomplete="off" id="exampleInputPassword1" placeholder="再次输入密码" required>
                        </div>
                    </div>

                    {{ csrf_field() }}
                </div>

                <div class="row">
                    <div class="col-sm-8 text-right pull-right">
                        <div class="forgot-password">
                            <a href="{{route('login')}}" class="forget-password">去登录</a>
                        </div>
                        <button class="btn blue" type="submit">快快注册</button>
                    </div>
                </div>
            </form>
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
    <script src="/js/register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
@endsection