<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tracking;
use App\Company;
use App\Bank;
use App\User;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function create($id)
    {
        $company = Company::find($id)->with('tracking')->get();
        $users = User::orderBy('name', 'desc')->get();
        $banks = Bank::orderBy('bank_name', 'desc')->get();

        return view('client_dashboard.create_tracking', ['users'=>$users,'company'=>$company,'id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        /*$this->validate($request,[
            'company_name' => 'required',
            'registration_number' => 'required',
            'mission_statement' => 'required',
            'primary_contact_number' => 'required',
            'primary_contact_email' => 'required'

        ]);*/

        //$company = Company::find($id);

        $company = Company::find($id);
        $company->Tracked  = "Yes";
        $company->save();
        $tracking = new Tracking;
        $tracking->company_id = $id;
        $tracking->business_product_understandable  = $request->input('business_product_understandable');
        $tracking->business_product_understandable_detail = $request->input('business_product_understandable_detail');
        $tracking->strategy_executable = $request->input('strategy_executable');
        $tracking->strategy_executable_detail = $request->input('strategy_executable_detail');
        $tracking->outstanding_founders = $request->input('outstanding_founders');
        $tracking->outstanding_founders_detail = $request->input('outstanding_founders_detail');
        $tracking->bbbee_requirements = $request->input('bbbee_requirements');
        $tracking->bbbee_requirements_detail = $request->input('bbbee_requirements_detail');
        $tracking->project_background = $request->input('project_background');
        $tracking->institutional_imperative = $request->input('institutional_imperative');
        $tracking->technical_exellency = $request->input('technical_exellency');
        $tracking->efficiency_effectiveness = $request->input('efficiency_effectiveness');
        $tracking->strategy_execution_speed = $request->input('strategy_execution_speed');
        $tracking->optimization_framework = $request->input('optimization_framework');
        $tracking->operational_excellency_activities = $request->input('operational_excellency_activities');
        $tracking->market_feasibility = $request->input('market_feasibility');
        $tracking->fund_effectiveness = $request->input('fund_effectiveness');
        $tracking->allocation_efficiency = $request->input('allocation_efficiency');
        $tracking->positive_growth = $request->input('positive_growth');
        $tracking->gdp_contribution = $request->input('gdp_contribution');
        $tracking->business_profitable = $request->input('business_profitable');
        $tracking->sound_allocation = $request->input('sound_allocation');
        $tracking->findings = $request->input('findings');
        $tracking->assessed_by = auth()->user()->id;
 
        $tracking->save();

//        return redirect('/company_list',['company'=>$company, 'banks'=>$banks, 'users'=>$users, 'success'=>'Captured Successfully']);
        return redirect('/dashboard')->with('success', 'Captured Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::select()->get();
        $tracking = Tracking::find($id);
        return view('client_dashboard.show_tracking',['tracking'=>$tracking, 'banks'=>$banks, 'users'=>$users,'companies'=>$company]);
    }
    
     public function view_tracking($id)
    {
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::select()->get();
        $tracking = Tracking::find($id);
        return view('tracking.show_all_tracking',['tracking'=>$tracking, 'banks'=>$banks, 'users'=>$users,'companies'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company_id = $request->input('company_id');
        $company = Company::find($company_id);
        $company->Tracked  = "No";
        $company->save();
        $tracking = Tracking::find($id);
        $tracking->deleted = "Yes";
        $tracking->save();
        return redirect('/dashboard')->with('success', 'Tracking Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
