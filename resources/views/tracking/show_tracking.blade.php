@extends('layouts.app')

@section('content')
<div class="container" style="padding-bottom: 50px; padding-top: 30px">
        <h2>Business Tracking</h2>
        <br>
         <form action="/tracking_d/{{$tracking->id}}" enctype="multipart/form-data"  method="post">
                {{ csrf_field() }}
                @foreach($companies as $company)
                @if($company->id == $tracking->company_id)
                <input type="text" hidden  value="{{$company->id}}" name="company_id">
                @endif
                @endforeach
        <button type="submit" class="btn btn-danger pull-right">Delete</button>
</form>
        <a href="/companies/" class="btn btn-default pull-right">Back</a>
        <br><hr>


               
                   <fieldset>
                    <legend> 1. Executive Summary</legend>
                  
                        <div class="form-group">
                                {{Form::label('business_product_understandable', '1.1 Is the Business/ product understandable (Is the vision realistic) ? ')}}
                                @if($tracking->business_product_understandable == "Yes")
                                {{Form::select('business_product_understandable', array('Yes' => 'Yes', 'No' => 'No'))}}
                                @else
                                {{Form::select('business_product_understandable', array('No' => 'No', 'Yes' => 'Yes'))}}
                                @endif
                        </div>

                        <div class="form-group">
                                {{Form::label('business_product_understandable_detail', 'Provide Details')}}
                                {{Form::textarea('business_product_understandable_detail',$tracking->business_product_understandable_detail,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.1','readonly' => 'true'])}}
                        </div>

                        <div class="form-group">
                                {{Form::label('strategy_executable', ' 1.2 Is the strategy executable')}}
                                @if($tracking->strategy_executable == "Yes")
                                {{Form::select('strategy_executable', array('Yes' => 'Yes', 'No' => 'No'))}}
                                @else
                                {{Form::select('strategy_executable', array('No' => 'No', 'Yes' => 'Yes'))}}
                                @endif
                        </div>

                        <div class="form-group">
                                {{Form::label('strategy_executable_detail', 'Provide Details')}}
                                {{Form::textarea('strategy_executable_detail',$tracking->strategy_executable_detail,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.2','readonly' => 'true'])}}
                        </div>

                        <div class="form-group">
                                {{Form::label('outstanding_founders', '1.3 Are Founder\'s & management outstanding')}}
                                @if($tracking->outstanding_founders == "Yes")
                                {{Form::select('outstanding_founders', array('Yes' => 'Yes', 'No' => 'No'))}}
                                @else
                                {{Form::select('outstanding_founders', array('No' => 'No', 'Yes' => 'Yes'))}}
                                @endif
                        </div>

                        <div class="form-group">
                                {{Form::label('outstanding_founders_detail', 'Provide Details')}}
                                {{Form::textarea('outstanding_founders_detail',$tracking->outstanding_founders_detail,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.3','readonly' => 'true'])}}
                        </div>

                        <div class="form-group">
                                {{Form::label('bbbee_requirements', '1.4 Is the business in-line with BBBEE requirements')}}
                                @if($tracking->bbbee_requirements == "Yes")
                                {{Form::select('bbbee_requirements', array('Yes' => 'Yes', 'No' => 'No'))}}
                                @else
                                {{Form::select('bbbee_requirements', array('No' => 'No', 'Yes' => 'Yes'))}}
                                @endif
                        </div>

                        <div class="form-group">
                                {{Form::label('bbbee_requirements_detail', 'Provide Details')}}
                                {{Form::textarea('bbbee_requirements_detail',$tracking->bbbee_requirements_detail,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q1.4','readonly' => 'true'])}}
                        </div>
                </fieldset><br><hr><br>

                <fieldset>
                    <legend> 2. Historical/situational/futuristic analysis</legend>

                    <div class="form-group">
                            {{Form::label('project_background', '2.1 Project background & what happened/happening/going to happen with the project (investment project)')}}
                            {{Form::textarea('project_background',$tracking->project_background,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q2.1','readonly' => 'true'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('institutional_imperative', ' 2.2 Is the project/investment influenced by institutional imperative')}}
                            {{Form::textarea('institutional_imperative',$tracking->institutional_imperative,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q2.2','readonly' => 'true'])}}
                    </div>
                </fieldset><br><hr><br>

                <fieldset>
                    <legend>3. Assessment of Operations</legend>

                    <div class="form-group">
                            {{Form::label('technical_exellency', '2.1 What is the level of Technical Excellency - Talent/skills transferred ')}}
                            {{Form::textarea('technical_excellency',$tracking->technical_excellency,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.1','readonly' => 'true'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('efficiency_effectiveness', '2.2 Effeciency and Effectiveness of Management')}}
                            {{Form::textarea('efficiency_effectiveness',$tracking->efficiency_effectiveness,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.2','readonly' => 'true'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('strategy_execution_speed', '2.3 Speed of Strategy Execution')}}
                            {{Form::textarea('strategy_execution_speed',$tracking->strategy_execution_speed,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.3','readonly' => 'true'])}}
                     </div>

                    <div class="form-group">
                            {{Form::label('optimization_framework', '2.4 Objectives and Key Results Optimization Framework')}}
                            {{Form::textarea('optimization_framework',$tracking->optimization_framework,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.4','readonly' => 'true'])}}
                     </div>

                     <div class="form-group">
                            {{Form::label('operational_excellency_activities', '2.5 Activities that drives operational excellency')}}
                            {{Form::textarea('operational_excellency_activities',$tracking->operational_excellency_activities,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q3.5','readonly' => 'true'])}}
                     </div>

                </fieldset><br><hr><br>

                <fieldset>
                    <legend>4. Market Assessment </legend>

                    <div class="form-group">
                            {{Form::label('market_feasibility', '4.1. Feasibility and Viability of strategic focus on large markets or unserved market')}}
                            {{Form::textarea('market_feasibility',$tracking->market_feasibility,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q4.1','readonly' => 'true'])}}
                     </div>
                </fieldset><br><hr><br>

                <fieldset>
                    <legend>5. Financial Assessment</legend>

                    <div class="form-group">
                            {{Form::label('fund_effectiveness', '5.1 What is the Effectiveness of the fund received')}}
                            {{Form::textarea('fund_effectiveness',$tracking->fund_effectiveness,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.1','readonly' => 'true'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('allocation_efficiency', '5.2 What is the fffeciency of the fund received')}}
                            {{Form::textarea('allocation_efficiency',$tracking->allocation_efficiency,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.2','readonly' => 'true'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('positive_growth', '5.3 What is the Positive growth and value tha the fund has')}}
                            {{Form::textarea('positive_growth',$tracking->positive_growth,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.3','readonly' => 'true'])}}
                     </div>

                    <div class="form-group">
                            {{Form::label('gdp_contribution', '5.4 What is the GDP contribution')}}
                            {{Form::textarea('gdp_contribution',$tracking->gdp_contribution,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.4','readonly' => 'true'])}}
                     </div>

                     <div class="form-group">
                            {{Form::label('business_profitable', '5.5 Is the business profitable/has a potential')}}
                            {{Form::textarea('business_profitable',$tracking->business_profitable,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q5.5','readonly' => 'true'])}}
                     </div>
                </fieldset><br><hr><br>

                <fieldset>
                        <legend>6. Summary </legend>
    
                        <div class="form-group">
                                {{Form::label('sound_allocation', '6.1 1. Was it a sound allocation of capital by the state')}}
                                {{Form::textarea('sound_allocation',$tracking->sound_allocation,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Provide details for Q4.1','readonly' => 'true'])}}
                         </div>
                </fieldset><br><hr><br>

                <fieldset>
                        <legend>7. Recommendation </legend>
    
                        <div class="form-group">
                                {{Form::label('findings', '7.1. Findings')}}
                                {{Form::textarea('finding',$tracking->Findings,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'findings','readonly' => 'true'])}}
                         </div>
                </fieldset><br><hr><br>


                <fieldset>
                    <legend>Administrative</legend>
                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('assessed_by', 'Assessed by')}}

                                <select name="assessed_by" class="form-control" id="assessed_by">
                                @if($tracking->assessed_by == Auth::user()->id)
                                @foreach ($users as $user)
                                        <option value="{!!$user->id!!}"> {!!$user->name!!} </option>
                                @endforeach
                                @else
                                <option value="">Select an Assessor</option>
                                @endif
                                </select>
                </div><hr>

                </fieldset>
               
               </form>
</div>
@endsection
