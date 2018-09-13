@extends('layouts.app1')

@section('content')
<div class="page-wrapper"><br>
    @include('layouts.inc.messages')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Uploads</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Uploads</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Upload documents</h4>
                    </div>
                    <div class="container" style="padding-bottom: 50px; padding-top: 30px">
        <a href="/dashboard" class="btn btn-default pull-right">Back</a>
        <br><hr>

        


                <form action="/upload_/<?php echo $id; ?>" enctype="multipart/form-data"  method="post">
                {{ csrf_field() }}                <div class="form-group">
                        {{Form::label('has_bee_certificate', 'Do you have a BEE Certificate ? ')}}
                        {{Form::select('has_bee_certificate', array('Yes' => 'Yes', 'No' => 'No'))}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('bee_certificate', 'If present, please upload yourBEE Certificate')}}
                        {{Form::file('bee_certificate',['class'=>'btn btn-sl btn-light  pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('standard_mou', 'Do you have a standard MOU')}}
                        {{Form::select('standard_mou', array('Yes' => 'Yes', 'No' => 'No'))}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('non_standard_mou', 'If you have modified a standard MOU, please upload your version')}}
                        {{Form::file('non_standard_mou',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div>
                <hr>

                <div class="form-group">
                        {{Form::label('start_of_operations', 'When did you start operating ?')}}
                        {{Form::date('start_of_operations','',['class'=>'btn btn-sl btn-light pull-right' ])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('qtr_fin_statement', 'If applicable, upload the current quarters financial statement')}}
                        {{Form::file('qtr_fin_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('qtr_cashflow_statement', 'If applicable, upload the current quarters cashflow statement')}}
                        {{Form::file('qtr_cashflow_statement',['class'=>'btn btn-sl btn-light pull-right' ])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_fin_statement', 'If applicable, upload the current years financial statement')}}
                        {{Form::file('year_fin_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_cashflow_statement', 'If applicable, upload the current years cashflow statement')}}
                        {{Form::file('year_cashflow_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_2_fin_statement', 'If applicable, upload last years financial statement')}}
                        {{Form::file('year_2_fin_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_2_cashflow_statement', 'If applicable, upload last years cashflow statement')}}
                        {{Form::file('year_2_cashflow_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_3_fin_statement', 'If applicable, upload any other recent financial statement (last year but one)')}}
                        {{Form::file('year_3_fin_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group">
                        {{Form::label('year_3_cashflow_statement', 'If applicable, If applicable, upload any other recent cashflow statements (last year but one)')}}
                        {{Form::file('year_3_cashflow_statement',['class'=>'btn btn-sl btn-light pull-right'])}}
                </div><hr>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('assessed_at', 'Date of Assessment')}}
                        {{Form::date('assessed_at','',['class'=>'form-control','placeholder'=>'assessed_at', 'required'=>'true' ])}}
                </div>


                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('assessment_status', 'Assessment Status')}}
                        {{Form::select('assessment_status', array('pending' => 'pending', 'complete' => 'complete' , 'action_required' =>'action_required'))}} 
                </div>
                
               
                
                {{Form::submit('Submit',['class'=>'btn btn-xl btn-dark '])}}

                
                </form>
     
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

