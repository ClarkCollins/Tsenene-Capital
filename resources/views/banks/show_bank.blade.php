@extends('layouts.admin_app')

    @section('content')
     <div class="container">

        <h2>Bank Details</h2>
        <br>
        <a href="/banks" class="btn btn-default pull-right">Back</a>
        <br><hr>

        <div class="col-md-offset-1 col-md-10">

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('bank_name', 'Bank Name')}}
                        {{Form::text('bank_name',$banks->bank_name,['class'=>'form-control', 'readonly'])}}
                </div>
            <br><br><br><br><br><br>
        </div>

    </div>

@endsection
