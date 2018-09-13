@extends('layouts.app')

    @section('content')
    <div class="container">


        <h2>Create Bank</h2>
        <br>
        <a href="/home" class="btn btn-default pull-right">Back</a>
        <br><hr>

        <div class="col-md-offset-1 col-md-10">


                {!! Form::open(['action' => 'BanksController@store', 'method' =>'POST']) !!}

                <div class="form-group">
                        {{Form::label('bank_name', 'Enter the name of the bank')}}
                        {{Form::text('bank_name', '',['class'=>'form-control','placeholder'=>'Enter the name of the bank'])}}
                </div>

                {{Form::submit('Save',['class'=>'btn bnt-primary'])}}

                
                {!! Form::close() !!}
        </div>
</div>
    @endsection