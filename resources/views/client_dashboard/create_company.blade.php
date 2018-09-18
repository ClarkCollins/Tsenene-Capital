@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Company</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Company</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
    @include('layouts.inc.messages')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Company</h4>
                    </div>
                    <div class="container" style="padding-bottom: 50px; padding-top: 8px">
                        <a href="/dashboard" class="btn btn-default pull-right">Back</a>
                        <br><br><hr>

                        <div class="col-md-offset-1 col-md-10">


                            {!! Form::open(['action' => 'CompaniesController@store', 'method' =>'POST']) !!}

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('company_name', 'Company Name')}}
                                {{Form::text('company_name','',['class'=>'form-control','placeholder'=>'Company Name'])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('registration_number', 'Registration Number')}}
                                {{Form::text('registration_number','',['class'=>'form-control','placeholder'=>'Registration Number'])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('website_url', 'Website')}}
                                {{Form::text('website_url','',['class'=>'form-control','placeholder'=>'Website'])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('industry', 'Industry')}}
                                {{Form::text('industry','',['class'=>'form-control','placeholder'=>'Industry' ])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('has_bank_account', 'Bank Account ?')}}
                                {{Form::select('has_bank_account', array('Yes' => 'Yes', 'No' => 'No'))}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-6">
                                {{Form::label('bank_id', 'Bank List')}}

                                <select name="bank_id" class="form-control" id="bank_id">
                                    <option value="">Select a Bank</option>
                                    @foreach ($banks as $bank)
                                    <option value="{!!$bank->id!!}"> {!!$bank->bank_name!!} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-offset-1 col-md-10">
                                {{Form::label('mission_statement', 'Mission Statement')}}
                                {{Form::textarea('mission_statement','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Mission Statement'])}}
                            </div>

                            <div class="form-group col-md-offset-1 col-md-10">
                                {{Form::label('activity_description', 'Activity description')}}
                                {{Form::textarea('activity_description','',['id'=>'article-ckeditor1','class'=>'form-control','placeholder'=>'Activity Description'])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('primary_contact_number', 'Primary Contact Number')}}
                                {{Form::number('primary_contact_number','',['class'=>'form-control','placeholder'=>'Primary Contact Number'])}}
                            </div>

                            <div class="form-group col-md-offset-2 col-md-8">
                                {{Form::label('primary_contact_email', 'Primary Contact Email')}}
                                {{Form::text('primary_contact_email','',['class'=>'form-control','placeholder'=>'Primary Contact Email'])}}
                            </div>


                            {{Form::submit('Submit',['class'=>'btn btn-xl btn-dark col-md-offset-4 col-md-4','id'=>'create_btn2'])}}


                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>

    @include('layouts.inc.new_footer')
    <!-- ============================================================== -->
</div>
@endsection
