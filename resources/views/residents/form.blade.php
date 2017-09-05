<div class='form-group'>
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>
{!! Form::text('user_id', auth()->id(), ['class'=> 'hidden']) !!}
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}