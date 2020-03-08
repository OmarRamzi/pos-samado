@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div style="background-color:white;border:none;" class="panel-heading">قائمة بجميع المستخدمين المسجلين</div>

					<div class="panel-body" >
						
						<table class="table table-striped">
							<thead>
							  <tr>
								<th>الرقم</th>
								<th>الاسم</th>
								<th>الايميل</th>
								<th>تعديل</th>
								<th>حذف</th>
							  </tr>
							</thead>
							<tbody>
						  	  @foreach($users as $user)
								  <tr>
								    <td>{!! $user->id !!}</td>
									<td>{!! $user->name !!}</td>
									<td>{!! $user->email !!}</td>
									<td>
										
										{!! Form::open(array('url' => "/users/$user->id/edit" , 'method' => 'GET')) !!}
											{!! Form::hidden('id', $user->id) !!}
												<button type="submit" class="btn btn-default">تعديل</button>
										{!! Form::close() !!}
									</td>
									<td>
										{!! Form::open(array('url' => '/users/destroy' ,  'method' => 'delete')) !!}
											{!! Form::hidden('id', $user->id) !!}
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