@extends('layouts.app1')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Company Profile</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
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
                    <div style="margin-left: 100px; margin-right: 100px;padding-bottom: 30px;padding-top: 30px" class="col-md-offset-1 col-md-10">

                        <h2>Business Tracking</h2>
                        <br>
                        <a href="/dashboard" class="btn btn-default pull-right">Back</a>
                        <br><hr>



                        <form action="/tracking_/<?php echo $id; ?>" enctype="multipart/form-data"  method="post">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend> 1. Executive Summary</legend>

                                <div class="form-group">
                                    {{Form::label('business_product_understandable', '1.1 Is the Business/ product understandable (Is the vision realistic) ? ')}}
                                    {{Form::select('business_product_understandable', array('Yes' => 'Yes', 'No' => 'No'))}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('business_product_understandable_detail', 'Provide Details')}}
                                    {{Form::textarea('business_product_understandable_detail','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.1'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('strategy_executable', ' 1.2 Is the strategy executable')}}
                                    {{Form::select('strategy_executable', array('Yes' => 'Yes', 'No' => 'No'))}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('strategy_executable_detail', 'Provide Details')}}
                                    {{Form::textarea('strategy_executable_detail','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.2'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('outstanding_founders', '1.3 Are Founder\'s & management outstanding')}}
                                    {{Form::select('outstanding_founders', array('Yes' => 'Yes', 'No' => 'No'))}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('outstanding_founders_detail', 'Provide Details')}}
                                    {{Form::textarea('outstanding_founders_detail','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.3'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('bbbee_requirements', '1.4 Is the business in-line with BBBEE requirements')}}
                                    {{Form::select('bbbee_requirements', array('Yes' => 'Yes', 'No' => 'No'))}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('bbbee_requirements_detail', 'Provide Details')}}
                                    {{Form::textarea('bbbee_requirements_detail','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.4'])}}
                                </div>
                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend> 2. Historical/situational/futuristic analysis</legend>

                                <div class="form-group">
                                    {{Form::label('project_background', '2.1 Project background & what happened/happening/going to happen with the project (investment project)')}}
                                    {{Form::textarea('project_background','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q2.1'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('institutional_imperative', ' 2.2 Is the project/investment influenced by institutional imperative')}}
                                    {{Form::textarea('institutional_imperative','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q2.2'])}}
                                </div>
                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend>3. Assessment of Operations</legend>

                                <div class="form-group">
                                    {{Form::label('technical_exellency', '2.1 What is the level of Technical Excellency - Talent/skills transferred ')}}
                                    {{Form::textarea('technical_excellency','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.1'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('efficiency_effectiveness', '2.2 Effeciency and Effectiveness of Management')}}
                                    {{Form::textarea('efficiency_effectiveness','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.2'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('strategy_execution_speed', '2.3 Speed of Strategy Execution')}}
                                    {{Form::textarea('strategy_execution_speed','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.3'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('optimization_framework', '2.4 Objectives and Key Results Optimization Framework')}}
                                    {{Form::textarea('optimization_framework','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.4'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('operational_excellency_activities', '2.5 Activities that drives operational excellency')}}
                                    {{Form::textarea('operational_excellency_activities','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.5'])}}
                                </div>

                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend>4. Market Assessment </legend>

                                <div class="form-group">
                                    {{Form::label('market_feasibility', '4.1. Feasibility and Viability of strategic focus on large markets or unserved market')}}
                                    {{Form::textarea('market_feasibility','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q4.1'])}}
                                </div>
                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend>5. Financial Assessment</legend>

                                <div class="form-group">
                                    {{Form::label('fund_effectiveness', '5.1 What is the Effectiveness of the fund received')}}
                                    {{Form::textarea('fund_effectiveness','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.1'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('allocation_efficiency', '5.2 What is the fffeciency of the fund received')}}
                                    {{Form::textarea('allocation_efficiency','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.2'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('positive_growth', '5.3 What is the Positive growth and value tha the fund has')}}
                                    {{Form::textarea('positive_growth','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.3'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('gdp_contribution', '5.4 What is the GDP contribution')}}
                                    {{Form::textarea('gdp_contribution','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.4'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('business_profitable', '5.5 Is the business profitable/has a potential')}}
                                    {{Form::textarea('business_profitable','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.5'])}}
                                </div>
                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend>6. Summary </legend>

                                <div class="form-group">
                                    {{Form::label('sound_allocation', '6.1 1. Was it a sound allocation of capital by the state')}}
                                    {{Form::textarea('sound_allocation','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q4.1'])}}
                                </div>
                            </fieldset><br><hr><br>

                            <fieldset>
                                <legend>7. Recommendation </legend>

                                <div class="form-group">
                                    {{Form::label('findings', '7.1. Findings')}}
                                    {{Form::textarea('finding','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'findings'])}}
                                </div>
                            </fieldset><br><hr><br>


                            <fieldset>
                                <legend>Administrative</legend>
                                <div class="form-group col-md-offset-2 col-md-8">
                                    {{Form::label('assessed_by', 'Assessed by')}}

                                    <select name="assessed_by" class="form-control" id="assessed_by">
                                        <option value="">Select an Assessor</option>
                                        @foreach ($users as $user)
                                        <option value="{!!$user->id!!}"> {!!$user->name!!} </option>
                                        @endforeach
                                    </select>
                                </div><hr>

                            </fieldset>

                            {{Form::submit('Submit',['class'=>'btn btn-xl btn-dark '])}}

                        </form>

                    </div>   
                </div>
            </div>
        </div>
    </div>
    @include('layouts.inc.new_footer')
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->


<!-- ============================================================== -->
@endsection
