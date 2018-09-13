<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\User;
use App\Bank;
use App\Company;

class UploadsController extends Controller
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
        //
        //$request->route('id');
        $company = Company::find($id)->with('tracking')->get();
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();

        return view('client_dashboard.create_upload',['users'=>$users, 'banks'=>$banks, 'company'=>$company, 'id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
//        print_r($id);
//        exit();
        
         $this->validate($request, [
             'bee_certificate' => 'mimes:pdf|max:10000',
            'non_standard_mou' => 'mimes:pdf|max:10000',
            'qtr_cashflow_statement' => 'mimes:pdf|max:10000',
            'qtr_fin_statement' => 'mimes:pdf|max:10000',
            'year_fin_statement' => 'mimes:pdf|max:10000',
            'year_cashflow_statement' => 'mimes:pdf|max:10000',
            'year_2_fin_statement' => 'mimes:pdf|max:10000',
            'year_2_cashflow_statement' => 'mimes:pdf|max:10000',
            'year_3_fin_statement' => 'mimes:pdf|max:10000',
            'year_3_cashflow_statement' => 'mimes:pdf|max:10000',
        ]);
        $company = Company::find($id);
        $company->documents_upload  = "Yes";
        $company->save();
		//hamdle file uploads
		
		if($request->hasFile('bee_certificate')){
			//get filename with extension
			
			$filenameWithExt = $request->file('bee_certificate')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('bee_certificate')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore1 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('bee_certificate')->storeAs('public/document_uploads', $fileNameToStore1);
								   
		}
		else{
			$fileNameToStore1 = 'nodocument.jpg';
		
			}
			
		
		if($request->hasFile('non_standard_mou')){
			//get filename with extension
			
			$filenameWithExt = $request->file('non_standard_mou')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('non_standard_mou')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore2 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('non_standard_mou')->storeAs('public/document_uploads', $fileNameToStore2);
			
			
					   
		}else{
			$fileNameToStore2 = 'nodocument.jpg';
		
			}
			
			
			if($request->hasFile('qtr_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('qtr_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('qtr_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore3 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('qtr_fin_statement')->storeAs('public/document_uploads', $fileNameToStore3);
			
			
					   
		}else{
			$fileNameToStore3 = 'nodocument.jpg';
		
			}
			
			
		if($request->hasFile('qtr_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('qtr_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('qtr_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore4 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('qtr_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore4);
			
			
					   
		}else{
			$fileNameToStore4 = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore5 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_fin_statement')->storeAs('public/document_uploads', $fileNameToStore5);
			
			
					   
		}else{
			$fileNameToStore5 = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore6 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore6);
			
			
					   
		}else{
			$fileNameToStore6 = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_2_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_2_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_2_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore7 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_2_fin_statement')->storeAs('public/document_uploads', $fileNameToStore7);
			
			
					   
		}else{
			$fileNameToStore7 = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_2_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_2_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_2_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore8 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_2_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore8);
			
			
					   
		}else{
			$fileNameToStore8 = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_3_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_3_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_3_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore9 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_3_fin_statement')->storeAs('public/document_uploads', $fileNameToStore9);
			
			
					   
		}else{
			$fileNameToStore9 = 'nodocument.jpg';
		
			}
			
			if($request->hasFile('year_3_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_3_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_3_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore10 = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_3_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore10);
			
			
					   
		}else{
			$fileNameToStore10 = 'nodocument.jpg';
		
			}
			
			
				
		//create upload
		
		$upload = new Upload;
		$upload->has_bee_certificate  = $request->input('has_bee_certificate');
		$upload->bee_certificate = $fileNameToStore1;
		$upload->standard_mou  = $request->input('standard_mou');
		$upload->non_standard_mou = $fileNameToStore2;
                $upload->financial_statement = "Non";
                $upload->company_id =$id;
		$upload->start_of_operations  = $request->input('start_of_operations');
		$upload->qtr_fin_statement = $fileNameToStore3;
		$upload->qtr_cashflow_statement = $fileNameToStore4;
		$upload->year_fin_statement = $fileNameToStore5;
		$upload->year_cashflow_statement = $fileNameToStore6;
		$upload->year_2_fin_statement = $fileNameToStore7;
		$upload->year_2_cashflow_statement = $fileNameToStore8;
		$upload->year_3_fin_statement = $fileNameToStore9;
		$upload->year_3_cashflow_statement = $fileNameToStore10;
		$upload->assessed_by = auth()->user()->id;
		$upload->assessed_at  = $request->input('assessed_at');
		$upload->assessment_status  = $request->input('assessment_status');
		
		$upload->save();
		
		return redirect('/dashboard')->with('success', 'Upload Successful');
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
        $company = Company::select()->get();
        $uploads = Upload::find($id);

        return view('uploads.show_upload_company_documents',['companies'=>$company, 'banks'=>$banks, 'users'=>$users,'uploads'=>$uploads]);
    }
    
    public function all_upload($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::select()->get();
        $uploads = Upload::find($id);

        return view('uploads.show_all _upload_company_documents',['companies'=>$company, 'banks'=>$banks, 'users'=>$users,'uploads'=>$uploads]);
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
        $company->documents_upload = "No";
        $company->save();
        $uploads = Upload::find($id);
        $uploads->deleted = "Yes";
        $uploads->save();
        return redirect('/companies')->with('success', 'Upload Deleted');
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
