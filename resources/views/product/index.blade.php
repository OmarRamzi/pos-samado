@extends('layouts.app')
@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="background-color:white;border:none;" class="panel-heading">Products</div>

                <div class="panel-body">
                   
                    <table class="table table-striped">
							<thead>
							  <tr>
								<th>الرقم</th>
								<th>اسم المنتج</th>
								<th>وصف المنتج</th>
								<th>سعر المنتج</th>
								<th>الكميه</th>
								<th>تعديل</th>
								<th>حذف</th>
							  </tr>
							</thead>
							<tbody>
						  	  @foreach($products as $product)
								  <tr>
								    <td>{!! $product->id !!}</td>
									<td>{!! $product->name !!}</td>
									<td>{!! $product->desc !!}</td>
									<td>{!! $product->price !!}</td>
									<td>{!! $product->quantity !!}</td>
									<td>
										
										{!! Form::open(array('url' => "/product/$product->id/edit" , 'method' => 'GET')) !!}
											{!! Form::hidden('id', $product->id) !!}
												<button type="submit" class="btn btn-default">تعديل</button>
										{!! Form::close() !!}
									</td>
									<td>
										{!! Form::open(array('url' => '/product/destroy' ,  'method' => 'delete')) !!}
											{!! Form::hidden('id', $product->id) !!}
												<button type="submit" class="btn btn-default">حذف</button>
										{!! Form::close() !!}
									</td>
								  </tr>
							  @endforeach
							</tbody>
						  </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection