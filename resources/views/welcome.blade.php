@extends('layouts.app')

@section('content')
<style>

.main-btn
{

 height:150px;
 width:200px;
 margin:20px;
 background-color:#2E86C1;
 border:none;
 font-size:18px;
}



.panel-heading{

    text-align:center;
    font-weight:50px;
    font-size:24px; 
    
    
}
.panel{

    border:none;
}



</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            
                <div style="background-color:white;border:none;" class="panel-heading">الرئيسيه</div>
				
                <div class="panel-body">
      
                    @if(!Auth::guest() && Auth::user()->admin)




                    <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/orders') }}">
                        عمل طلب<br/>
                        
                        <img  src="img/order-512.png" width="100"; hieght="100"></img>
    
                            </a>   
                        </div>

                        <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/users/create') }}">
                        تسجيل مسؤول<br/>
                        <img  src="img/add.jpg" width="100"; hieght="100"></img>
                        </a>

                        </div>
                    
                        <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/users/') }}">
                        إظهار جميع المستخدمين<br/>
                        <img  src="img/users.png" width="100"; hieght="100"></img>

                        </a>
                        </div>


 
                    	<!-- <a class="btn btn-primary main-btn" href="{{ url('/shop') }}">المتجر</a> -->

                        <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/product') }}">
                        عرض جميع المنتجات<br/>
                        <img  src="img/inventory.png" width="100"; hieght="100"></img>

                        
                        </a>
                        </div>

                        <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/product/create') }}">
                        أضف منتج<br/>
                        <img  src="img/plus.png" width="100"; hieght="100"></img>

                        </a>
                        </div>

                        <div class="col-md-3">
                    	<a class="btn btn-primary main-btn" href="{{ url('/category/create') }}">
                        إضافة فئة <br/>
                        <img  src="img/addpakage.png" width="100"; hieght="100"></img>
                            </a>
                        </div>

                        <div class="col-md-3">
                    	<a class="btn btn-raised btn-primary main-btn" href="{{ url('/category') }}">
                        عرض جميع الفئات <br/>
                        <img  src="img/showall.png" width="100"; hieght="100"></img>

                       </a>
                        </div>
                        

                    	<hr>
                        </br>
                        </br>
                        <div class="col-md-12">
                    	<a style="margin-left:20px;" class="btn btn-raised btn-danger" href="{{ url('/settings') }}"> الإعدادات</a>
                            </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
