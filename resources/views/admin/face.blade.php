@extends ('layouts/admin')

@section ('title', '人脸融合')

@section('css')
@parent
<link href="/vendor/webuploader-master/css/webuploader.css" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div id="uploader-demo">
                <!--用来存放item-->
                <div id="fileList" class="uploader-list"></div>
                <div id="filePicker">选择图片</div>
            </div>
        </div>
        <div id="img-list" class="col-md-8">
            <h2>合成图片墙</h2>
            <div class="row align-items-md-center margin-bottom-10">
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="/images/avatar/avatar1.jpg">
                </div>
                <div class="col-md-1">
                    <span style="text-align: center">+</span>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="/images/avatar/avatar1.jpg">
                </div>
                <div class="col-md-1">
                    <span style="text-align: center">=</span>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="/images/avatar/avatar1.jpg">
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection

@section('javascript')
@parent
<script type="text/javascript" src="/vendor/webuploader-master/dist/webuploader.js"></script>
<script type="application/javascript">
    var BASE_URL = "/vendor/webuploader-master/dist";
    var token = "{{csrf_token()}}";
    var $list = $('#fileList');

    // 初始化Web Uploader
    var uploader = WebUploader.create({

        // 选完文件后，是否自动上传。
        auto: true,

        // swf文件路径
        swf: BASE_URL + '/js/Uploader.swf',

        // 文件接收服务端。
        server: '/admin/function/face',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        },

        formData: {
            _token: token,
        },

        disableGlobalDnd:false,

        compress:{
            width: 1600,
            height: 1600,

            // 图片质量，只有type为`image/jpeg`的时候才有效。
            quality: 90,

            // 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
            allowMagnify: true,

            // 是否允许裁剪。
            crop: false,

            // 是否保留头部meta信息。
            preserveHeaders: true,

            // 如果发现压缩后文件大小比原来还大，则使用原来图片
            // 此属性可能会影响图片自动纠正功能
            noCompressIfLarger: false,

            // 单位字节，如果图片大小小于此值，不会采用压缩。
            compressSize: 0
        },

        method:'POST',

    });

    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
        var $li = $(
            '<div id="' + file.id + '" class="file-item thumbnail">' +
            '<img>' +
            '<div class="info">' + file.name + '</div>' +
            '</div>'
            ),
            $img = $li.find('img');


        // $list为容器jQuery实例
        $list.append( $li );

        // 创建缩略图
        // 如果为非图片文件，可以不用调用此方法。
        // thumbnailWidth x thumbnailHeight 为 100 x 100
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, 100, 100 );
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress span');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<p class="progress"><span></span></p>')
                .appendTo( $li )
                .find('span');
        }

        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).addClass('upload-state-done');

    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        var $li = $( '#'+file.id ),
            $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').remove();
    });

</script>
@parent

@endsection