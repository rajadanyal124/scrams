<?php

namespace App\Http\Controllers;

use App\Info\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $request->session()->forget('companies');
        $company = Company::all(); 
        return view('companies.index')->with('companies', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createstep1(Request $request)
    {
        $company = $request->session()->get('companies');

        return view('companies.gernal_info',compact('companies'));
        
    }


    public function CompanycreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'comp_name' => 'required|unique:companies',
        ]);
        if(empty($request->session()->get('companies'))){
            $company = new \App\info\Company();
            $company->fill($validatedData);
            $request->session()->put('companies', $company);
        }else{
            $company = $request->session()->get('companies');
            $companies->fill($validatedData);
            $request->session()->put('companies', $company);
        }
        return redirect('/company2');
    }
    public function createstep2(Request $request)
    {
        $company = $request->session()->get('companies');

        return view('companies.personal_info',compact('companies'));
        
    }

    public function CompanycreateStep2(Request $request){
        $validatedData = $request->validate([
            'loction' => 'required',
            'ntn' => 'required',
            'gst' => 'required',

        ]);
        if(empty($request->session()->get('companies'))){
            $company = new \App\info\Company();
            $company->fill($validatedData);
            $request->session()->put('companies', $company);
        }else{
            $company = $request->session()->get('companies');
            $company->fill($validatedData);
            $request->session()->put('companies', $company);
        }
        return redirect('/company3');
    }
    public function createstep3(Request $request)
    {
        $company = $request->session()->get('companies');

        return view('companies.registeration',compact('companies'));   
    }
    public function CompanycreateStep3(Request $request){

        $validatedData = $request->validate([
            'phone_no' => 'required',
            'fax' => 'required',
            'comp_mail' => 'required',

        ]);
        if(empty($request->session()->get('companies'))){
            $company = new \App\info\Company();
            $company->fill($validatedData);
            $request->session()->put('companies', $company);
        }else{
            $company = $request->session()->get('companies');
            $company->fill($validatedData);
            $request->session()->put('companies', $company);
        }
        return view('companies.registeration',compact('comapanies'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register = $request->session()->get('companies');

        $register->save();

        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
