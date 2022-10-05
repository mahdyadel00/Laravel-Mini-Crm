<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function index()
    {
       $companies = Company::get();
        return view('admin.companies.index', compact('companies'));
    }


    public function create()
    {
        return view('admin.companies.create');
    }
    public function store(StoreCompanyRequest $request)
    {
        $logo_in_db = NULL;
        if( $request->has('logo') )
        {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path().'/uploads/companies';
            $logo = request('logo');
            $logo_name = time().request('logo')->getClientOriginalName();
            $logo->move($path , $logo_name);
            $logo_in_db = '/uploads/companies/'.$logo_name;
        }

        $companies = Company::create([

            'name'  => $request->name,
            'email'  => $request->email,
            'logo'  => $logo_in_db,

        ]);
        return redirect()->route('admin.companies.index')->with('Successfully' , 'company Added Successfully');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.companies.edit', compact('company'));
    }
    public function update(UpdateCompanyRequest $request, $id)
    {

        $company = Company::find($id);
        $logo_in_db = NULL;
        if ($request->has('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/companies';
            $logo = request('logo');
            $logo_name = time() . request('logo')->getClientOriginalName();
            $logo->move($path, $logo_name);
            $logo_in_db = '/uploads/companies/' . $logo_name;
        }


        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $logo_in_db,
        ]);

        return redirect()->route('admin.companies.index')->with('flash_message', 'Category Updated successfully !');
    }

    public function delete($id)
    {
        $company = Company::where('id' , $id)->first();
        $company->delete();
        return back();
        flash()->success("Category deleted successfully");

    }

}
