
@if($model->status == 0)
	{!! Form::model($model, ['url' => $konfirmasi_url, 'method' => 'get','class'=>'form-inline js-confirm','data-confirm' =>$confirm_message]) !!} 
		{!! Form::submit('Iya',['class'=>'btn btn-sm btn-primary js-confirm']) !!}
	{!! Form::close() !!} 
@elseif($model->status == 1)
	{!! Form::model($model, ['url' => $no_konfirmasi_url, 'method' => 'get','class'=>'form-inline js-confirm','data-confirm' =>$no_confirm_message]) !!} 
		{!! Form::submit('Tidak',['class'=>'btn btn-sm btn-danger js-confirm']) !!}
	{!! Form::close() !!}  
@endif 