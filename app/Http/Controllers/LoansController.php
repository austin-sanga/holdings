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
        return view('beggers',['beg'=>$beg]);


    }

    function edit($id)
    {
        $user = auth()->user();

        $user_id = ($user->id);

        $beg = Loan_requests::all()->where('users_id',$user_id); 

        $data = Loan_requests::find($id);
        return view('editrequest',['data'=>$data,'user_id'=>$user_id]);
    }


    function update(Request $req)
    {
        $loan = Loan_requests::find($req->id);
        $loan->users_id = $req->users_id;
        $loan->LoanType=$req->LoanType;
        $loan->amount=$req->amount;
        $loan->save();

        // flash session initiation
        $req->session()->flash('status','Restaurant updated succesfully'); 

        return redirect('beg'); 
    }
    // function test()
    // {
    //     $beg = Loan_requests::all();
    //     return view('test',['beg'=>$beg]); 
         
    // }

    /* function test()
    {
        $count = User::count();
        $data=$count;
        for ($i=1; $i <$data ; $i++) { 
         $pass = Loan_requests::find(users_id,$i)->LoanUser; 
         $test=$pass->name;
         print $test.",";    
        }
         
    } */

   /*  function test()
    {
        // here is where the temporary insertion is done but can go through the view
       return Loan_requests::find(2)->LoanUser;   
    } */


}
