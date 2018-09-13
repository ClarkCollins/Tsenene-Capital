<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Bank;
use App\User;
use App\Tracking;
use App\Upload;


class CompaniesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
         $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $trackings = Tracking::select()->get();
        $uploads = Upload::select()->get();
        $companies = Company::orderBy('company_name', 'asc')->paginate(5);
        return view('client_dashboard.dashboard',['companies'=> $companies,'trackings'=>$trackings,'uploads'=>$uploads]);
      
    }
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $trackings = Tracking::select()->get();
        $uploads = Upload::select()->get();
        $companies = Company::orderBy('company_name')->paginate(5);
        return view('companies.company_list',['companies'=> $companies,'trackings'=>$trackings,'uploads'=>$uploads]);
    }
public function view_companies()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $trackings = Tracking::select()->get();
        $uploads = Upload::select()->get();
        $companies = Company::orderBy('company_name', 'asc')->paginate(5);
        return view('companies.show_all_company',['companies'=> $companies,'trackings'=>$trackings,'uploads'=>$uploads]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();

        return view('client_dashboard.create_company',['banks'=>$banks, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        //
        $this->validate($request,[
            'company_name' => 'required',
            'registration_number' => 'required',
            'mission_statement' => 'required',
            'primary_contact_number' => 'required',
            'primary_contact_email' => 'required'

        ]);

        $company = new Company;
        $company->company_name  = $request->input('company_name');
        $company->registration_number = $request->input('registration_number');
        $company->website_url = $request->input('website_url');
        $company->industry = $request->input('industry');
        $company->has_bank_account = $request->input('has_bank_account');
        $company->bank_id = $request->get('bank_id');
        //$company->bank_id = input::get('bank_id');
        $company->mission_statement = $request->input('mission_statement');
        $company->activity_description = $request->input('activity_description');
        $company->primary_contact_number = $request->input('primary_contact_number');
        $company->primary_contact_email = $request->input('primary_contact_email');
        $company->user_id = auth()->user()->id;
 
        $company->save();

        return redirect('/dashboard')->with('success', 'Company Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::find($id);
        return view('client_dashboard.show_company',['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
    }
    
    public function view_company($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::find($id);
        return view('companies.show_company_details',['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
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
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::find($id);
       // return view('companies.edit')->with('company', $company);
        return view('companies.edit_company',['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
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
        // clone of what we have in the store

        $this->validate($request,[
            'company_name' => 'required',
            'registration_number' => 'required',
            'mission_statement' => 'required',
            'primary_contact_number' => 'required',
            'primary_contact_email' => 'required'

        ]);

        $company = Company::find($id);
        $company->company_name  = $request->input('company_name');
        $company->registration_number = $request->input('registration_number');
        $company->website_url = $request->input('website_url');
        $company->industry = $request->input('industry');
        $company->has_bank_account = $request->input('has_bank_account');
        $company->bank_id = $request->get('bank_id');
        //$company->bank_id = input::get('bank_id');
        $company->mission_statement = $request->input('mission_statement');
        $company->activity_description = $request->input('activity_description');
        $company->primary_contact_number = $request->input('primary_contact_number');
        $company->primary_contact_email = $request->input('primary_contact_email');
        $company->user_id = auth()->user()->id;

 
        $company->save();

        return redirect('/companies')->with('success', 'Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/companies')->with('success', 'Company Deleted');
    }

    public function upload($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $company = Company::find($id);
        $users = User::orderBy('name', 'desc')->get();
        return view('companies.upload_company_documents',['users'=>$users, 'banks'=>$banks]);
    }

   /* public function tracking_create($id)

    {
        $company = Company::find($id);
        $users = User::orderBy('name', 'desc')->get();
        $banks = Bank::orderBy('bank_name', 'desc')->get();

        return view('tracking.create_tracking', ['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
    }

    public function tracking_save($id)
    {

        $company = Company::find($id);
        $tracking = new Tracking;
        $tracking->company_id = $company()->id;
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

        return redirect('companies.company_list',['company'=>$company,'banks'=>$banks, 'users'=>$users, 'success'=>'Captured Successfully']);
    }*/
}
