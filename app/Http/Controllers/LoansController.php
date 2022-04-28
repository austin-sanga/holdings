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
        $loan->LoanType=$req->LoanType;
        $loan->amount=$req->amount;
        $loan->save();

        return redirect('/beg');
    }

    function beg()
    {
        $user = auth()->user();

        $user_id = ($user->id);

        $beg = Loan_requests::all()->where('users_id',$user_id); 
  
        return view('beg',['user_id'=>$user_id,'beg'=>$beg]);
   }

    
    function beggers()
    {
        $beg = Loan_requests::all(); 
        $test = ($beg->users_id);
        $beggerid = Loan_requests::find($test)->LoanUser;
        $papi = ($beggerid->name);
        return view('beggers',['beg'=>$beg,'papi'=>$papi]);
    }

    function test()
    {
        /* 
        trying to test on calling a specific column on all selection
        */
        // here is where the temporary insertion is done but can go through the view
       $test=  Loan_requests::all();
       $beg = ($test->users_id);
       return $beg;

    }

    // function test()
    // {
    //     // here is where the temporary insertion is done but can go through the view
    //    return Loan_requests::find(2)->LoanUser;   
    // }


}
