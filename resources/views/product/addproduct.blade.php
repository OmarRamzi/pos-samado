@extends('layouts.app')

@section('content')
<style>
.panel-heading{

text-align:center;
font-weight:50px;
font-size:24px; 
}
.control-label{

    font-size:20px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="background-color:white;border:none;" class="panel-heading">اضافه منتج</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/product') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            </div>
                            <label class="col-md-4 control-label">اسم المنتج</label>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="desc" value="{{ old('email') }}">
                               
                            </div>
                            <label class="col-md-4 control-label">وصف المنتج</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="price">

                               
                            </div>
                            <label class="col-md-4 control-label">السعر</label>
                        </div>

                        <div class="form-group">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="quantity">

                            </div>
                            <label class="col-md-4 control-label">الكميه</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style=" background-color:#2E86C1; height:40px;width:100px;margin-left:30px" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>اضافه
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
