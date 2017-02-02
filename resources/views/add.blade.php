@extends('layouts.parent')

@section('killer')

    <div class="col-md-offset-3">
        <div class="col-md-6">
            {!! Form::open() !!}

            {!! Form::label('Name of Task') !!}

            {!! Form::text('name_of_task',null,['class'=>'form-control']) !!}

            {!! Form::label('Status') !!}

            {!! Form::select('status',['completed'=>'Completed','uncompleted'=>'Un-completed'],'uncompleted',['class'=>'form-control']) !!}
            <br>
            {!! Form::submit('Save',['class'=>'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

        </div>

    </div>



    @endsection