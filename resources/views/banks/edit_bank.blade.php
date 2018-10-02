@extends('layouts.admin_app')

    @section('content')
    <div class="container">

        <h2>Edit Bank</h2>
        <br>
        <a href="/banks" class="btn btn-default pull-right">Back</a>
        <br><hr>

        <div class="col-md-offset-1 col-md-10">


                {!! Form::open(['action' => ['BanksController@update',$banks->id], 'method' =>'POST']) !!}

                <div class="form-group">
                        {{Form::label('bank_name', 'Enter the name of the bank')}}
                        {{Form::text('bank_name',$banks->bank_name,['class'=>'form-control','placeholder'=>'Enter the name of the bank'])}}
                </div>
                {!! Form::hidden('_method', 'PUT') !!}

                {{Form::submit('Save',['class'=>'btn bnt-primary'])}}

                
                {!! Form::close() !!}
        </div><br><br><br><br><br><br>
    </div>
    @endsection
