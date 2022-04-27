<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan_requests;
use App\Models\User;

class LoansController extends Controller
{
    //
    function LoanRequest(Request $req)
    {
        $loan = new Loan_requests;
        $loan->users_id = $req->users_id;
        $loan->amount=$req->amount;
        $loan->save();

        return redirect('/dashboard');
    }

    function beg()
    {
        $user = auth()->user();

        $user_id = ($user->id);

        $beg = Loan_requests::all(); 
  
        return view('beg',['user_id'=>$user_id,'beg'=>$beg]);
   }

    
    function beggers()
    {
        $beg = Loan_requests::all(); 
        return view('beggers',['beg'=>$beg]);
    }


}
