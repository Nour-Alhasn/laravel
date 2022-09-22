<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        return 'To show all type of computer click the button <button onclick="http://127.0.0.1:8000/show" > GO </button>';
    }
    

    public function show()
    {
        $customer=Customer::all();
        return $customer;
    }

}
