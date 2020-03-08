@extends('layouts.app')
@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="background-color:white;border:none;" class="panel-heading">كل الفئات</div>

                <div class="panel-body">
                   
                    <table class="table table-striped">
							<thead>
							  <tr>
								<th>الرقم</th>
								<th>اسم الفئه</th>
								<th>الكود</th>
								<th>صوره</th>
								<th>تعديل</th>
								<th>جذف</th>
							  </tr>
							</thead>
							<tbody>
						  	  @foreach($categories as $category)
								  <tr>

								    <td>{!! $category->id !!}</td>
									<td>{!! $category->name !!}</td>
									<td>{!! $category->code !!}</td>
									<td>{!! Html::image($category->image ,$category->title, array('width'=>'50','height' =>'50')) !!}</td>
									
									<td>
										
										{!! Form::open(array('url' => "/category/$category->id/edit" , 'method' => 'GET')) !!}
											{!! Form::hidden('id', $category->id) !!}
												<button type="submit" class="btn btn-default">تعديل</button>
										{!! Form::close() !!}
									</td>
									<td>
										{!! Form::open(array('url' => '/category/destroy' ,  'method' => 'delete')) !!}
											{!! Form::hidden('id', $category->id) !!}
												<button type="submit" class="btn btn-default">حذف</button>
										{!! Form::close() !!}
									</td>
								  </tr>
							  @endforeach
							  <a type="submit" style=" border:none; background-color:#2E86C1; font-wieght:15px" class="btn btn-default" href="http://localhost/pos/category/create"><span style="color:white;">اضافه فئه جديده</span></a>
							</tbody>
						  </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection