<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lfs(刘方硕)｜高级php开发者</title>
    <meta name="description" content="lfs,简历">
    <meta name="author" content="lfs">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{ asset('/resume/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('/resume/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/resume/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/resume/img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('/resume/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resume/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('/resume/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/resume/css/prettyPhoto.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('/resume/js/modernizr.custom.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="intro-text">
                    <h1>这是<span class="name">刘方硕</span></h1>
                    <p>PHP开发者 & 基本运维工作也可以做</p>
                    <a href="#about" class="btn btn-default btn-lg page-scroll">更多了解</a> </div>
            </div>
        </div>
    </div>
</header>
<!-- Navigation -->
<div id="nav">
    <nav class="navbar navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
                <a class="navbar-brand page-scroll" href="#page-top">刘方硕</a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"> <a href="#page-top"></a> </li>
                    <li> <a class="page-scroll" href="#about">我是谁</a> </li>
                    <li> <a class="page-scroll" href="#skills">我会什么</a> </li>
                    <li> <a class="page-scroll" href="#portfolio">我做了哪些产品</a> </li>
                    <li> <a class="page-scroll" href="#resume">我经历了什么</a> </li>
                    <li> <a class="page-scroll" href="#contact">期待联系我</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>这是我</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"><img src="{{ asset('/resume/img/about.jpg') }}" class="img-responsive"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="about-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                    <p class="text-center"><a class="btn btn-primary" href="#"><i class="fa fa-download"></i>下载简历</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>技术使用</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
                <h4>PHP</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
                <h4>Redis</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                <h4>Mysql</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
                <h4>Elastaticsearch</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
                <h4>Docker</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
                <h4>Vue</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
                <h4>git|svn</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
                <h4>Jquery</h4>
            </div>
            <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
                <h4>Js</h4>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2>作品</h2>
            <hr>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".app">App Development</a></li>
                        <li><a href="#" data-filter=".branding">Branding</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/resume/img/portfolio/01-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>Web Design</small>
                            </div>
                            <img src="/resume/img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/resume/img/portfolio/02-large.jpg" title="Project description" rel="prettyPhoto">
                                <div class="hover-text">
                                    <h4>Project Title</h4>
                                    <small>App Development</small> </div>
                                <img src="/resume/img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/resume/img/portfolio/03-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>Web Design</small> </div>
                            <img src="/resume/img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="img/portfolio/04-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>Web Design</small> </div>
                            <img src="/resume/img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/resume/img/portfolio/05-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>App Development</small> </div>
                            <img src="/resume/img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/resume/img/portfolio/06-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>Branding</small> </div>
                            <img src="/resume/img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 branding app">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="/resume/img/portfolio/07-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>App Development, Branding</small> </div>
                            <img src="/resume/img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="/resume/img/portfolio/08-large.jpg" title="Project description" rel="prettyPhoto">
                            <div class="hover-text">
                                <h4>Project Title</h4>
                                <small>Web Design</small> </div>
                            <img src="/resume/img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<!-- Achievements Section -->
<div id="achievements" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Some Stats</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
                <div class="achievement-box"> <span class="count">310</span>
                    <h4>Happy Clients</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
                <div class="achievement-box"> <span class="count">4700</span>
                    <h4>Hours of Work</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
                <div class="achievement-box"> <span class="count">30</span>
                    <h4>Awards Won</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
                <div class="achievement-box"> <span class="count">8</span>
                    <h4>Years of Experience</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resume Section -->
<div id="resume" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>经历</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <h4> 2015.06 <br>
                                （石家庄学院）<br>
                                本科毕业</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Creative Agency</h4>
                                <h4 class="subheading">UX Developer</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4> 2015.06 <br>
                                （北京云测）<br>
                                第一份工作 </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Creative Agency</h4>
                                <h4 class="subheading">Front-end Developer</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <h4>2017.10<br>
                                人民日报<br>
                                媒体技术股份有限公司</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Creative Agency</h4>
                                <h4 class="subheading">UX Designer</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-title center">
            <h2>教育经历</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <!-- Education Section-->
                    <li>
                        <div class="timeline-image">
                            <h4>2011 <br>
                                - <br>
                                2015 </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>石家庄学院</h4>
                                <h4 class="subheading">全日制本科学士</h4>
                            </div>
                            <div class="timeline-body">
                                <p>计算机科学与技术专业，在学校跟随导师做了2年嵌入式开发，正赶上2014年php崛起，在导师的推荐下和室友一起学习php开发1年，使用了laravel框架并且在石家庄软件公司做微信开发使用tp3。在校期间一致是校足球队的边后。参与举办了石家庄学院第一届校内联赛。</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Contact</h2>
            <hr>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
                <p>4321 California St,<br>
                    San Francisco, CA 12345</p>
            </div>
            <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
                <p>info@company.com</p>
            </div>
            <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
                <p> +1 123 456 1234</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3>Leave me a message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-default">Send Message</button>
            </form>
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container text-center">
        <div class="fnav">
            <p>Copyright &copy; 2016 John Doe. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/resume/js/jquery.1.11.1.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/easypiechart.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/jqBootstrapValidation.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/contact_me.js')}}"></script>
<script type="text/javascript" src="{{asset('/resume/js/main.js')}}"></script>
</body>
</html>