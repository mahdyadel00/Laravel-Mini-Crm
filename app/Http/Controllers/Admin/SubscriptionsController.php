<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailSubscription;


class SubscriptionsController extends Controller
{
   
    public function index()
    {
        $subscriptions = EmailSubscription::paginate(20);
        return view('admin.subscriptions.index', compact('subscriptions'));
        
    }

   
    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

  
    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        
    }

 
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
        
    }
}
