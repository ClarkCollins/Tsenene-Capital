<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BanksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $banks = Bank::orderBy('bank_name', 'asc')->paginate(10);
        return view('banks.bank_list')->with('banks', $banks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $banks = Bank::All();

        return view('banks.create_bank')->with('banks', $banks);
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
            'bank_name' => 'required'
            
        ]);

        $bank = new Bank;
        $bank->bank_name  = $request->input('bank_name');
         
        $bank->save();

        return redirect('/banks')->with('success', 'Bank Listed');
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
         return view('banks.show_bank',['banks'=> $banks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banks = Bank::find($id);

        return view('banks.edit_bank')->with('banks', $bank);
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
        //

        $this->validate($request,[
            'bank_name' => 'required'

        ]);

        $bank = Bank::find($id);
        $bank->bank_name  = $request->input('bank_name');

        $bank->save();

        return redirect('/banks')->with('success', 'Bank Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();

        return redirect('/banks')->with('success', 'Bank Deleted');
    }
}
