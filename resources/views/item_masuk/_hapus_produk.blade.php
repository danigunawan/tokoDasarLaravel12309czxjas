{!! Form::model($model, ['url' => $form_url, 'method' => 'post', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!} 

{!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger js-confirm']) !!}
{!! Form::close() !!}