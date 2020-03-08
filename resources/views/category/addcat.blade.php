@extends('layouts.app')

@section('content')
<style>
.control-label{

font-size:20px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="background-color:white;border:none;" class="panel-heading">اضافه فئه</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/category') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
								<div class="col-md-8">
                               		 <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            	</div>
                                <label class="col-md-4 control-label">اسم الفئه</label>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="code" value="{{ old('email') }}">
                               
                            </div>
                            <label class="col-md-4 control-label">الكود</label>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                
                                {!! Form::label('image','اختر صوره') !!}
						  		{!! Form::file('image') !!}
                           
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>اضافه فئه
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
