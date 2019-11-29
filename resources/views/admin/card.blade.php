@extends ('layouts/admin')

@section ('title', '身份证查询')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">

                    <h4>身份证验证</h4>
                    <form class="form-horizontal" method="post" action="{{URL::to('/admin/father/card')}}" role="form">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">身份证号码</label>

                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-credit-card"></i></span>
                                <input type="text" class="form-control input-circle-right" name="number" id="inputEmail1" required placeholder="身份证号码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword12" class="col-md-2 control-label">姓名</label>
                            <div class="input-group col-md-4">
                                <span class="input-group-addon input-circle-left"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-circle-right" name="name" id="inputPassword12" required placeholder="姓名">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn blue">查询</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
@endsection