@extends ('layouts/admin')

@section ('title', '身份证结果')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">

                    <h4>身份证验证</h4>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputPassword12" class="col-md-2 control-label">姓名</label>
                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-circle-right" name="name" value="{{$data['name']}}" disabled placeholder="姓名">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">身份证号码</label>

                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control input-circle-right" name="number" value="{{$data['number']}}" disabled placeholder="身份证号码">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">地址</label>

                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control input-circle-right" name="number" value="{{$data['address']}}" disabled placeholder="地址">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">结果</label>

                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control input-circle-right" name="number" value="{{$data['message']}}" disabled placeholder="结果">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
@endsection