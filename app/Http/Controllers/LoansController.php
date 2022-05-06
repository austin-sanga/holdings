<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan_requests;
use App\Models\User;
use App\Models\Bid;

class LoansController extends Controller
{
    //
    function LoanRequest(Request $req)
    {
        $loan = new Loan_requests;
        $loan->users_id = $req->users_id;
        $loan->LoanType=$req->LoanType;
        $loan->PayType=$req->PayType;
        $loan->IntervalPay=$req->IntervalPay;
        $loan->GracePeriod=$req->GracePeriod;
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

        // $beg = Loan_requests::all()->where('users_id',$user_id); 

        $data = Loan_requests::find($id);

        return view('editrequest',['data'=>$data,'user_id'=>$user_id]);
    }  


    function update(Request $req)
    {
        $loan = Loan_requests::find($req->id);
        $loan->users_id = $req->users_id;
        $loan->LoanType=$req->LoanType;
        $loan->PayType=$req->PayType;
        $loan->IntervalPay=$req->IntervalPay;
        $loan->GracePeriod=$req->GracePeriod;
        $loan->amount=$req->amount;
        $loan->save();

        // flash session initiation
        $req->session()->flash('status','Loan Request updated succesfully'); 

        return redirect('beg'); 
    }

    function delete($id)
    {
        Loan_requests::find($id)->delete();
        session()->flash('status','Loan Request deleted successfully');
        return redirect('beg');
    }

    function bid(Request $req)
    {
        $data = Loan_requests::find($req->id);
        return view('bid',['data'=>$data]);

    }

    function SBid(Request $req)
    {
        $data = Loan_requests::find($req->id);
        $loan_id=($data->id);
        $user_id=($data->users_id);
        $PayType=($data->PayType);
        $IntervalPay=($data->IntervalPay);
        $GracePeriod=($data->GracePeriod);

       $Bid = new Bid;
       $Bid->loan_id=$loan_id;
       $Bid->user_id=$user_id;
       $Bid->interest=$req->interest;
       $Bid->PayType=$PayType;
       $Bid->IntervalPay=$IntervalPay;
       $Bid->GracePeriod=$GracePeriod;
       $Bid->save();

       session()->flash('status','Bid Placed successfully');

       return redirect('/beggers');
    }

    function Mybid(Request $req)
    {
        $data = Loan_requests::find($req->id);
        $loan_id=($data->id);
        $user_id=($data->users_id);
        
       $Bid = new Bid;
       $Bid->loan_id=$loan_id;
       $Bid->user_id=$user_id;
       $Bid->interest=$req->interest;
       $Bid->PayType=$req->PayType;
       $Bid->IntervalPay=$req->IntervalPay;
       $Bid->GracePeriod=$req->GracePeriod;
       $Bid->save();

       session()->flash('status','Bid Placed successfully');

    return redirect('/beggers');
    }

    function Viewbids(Request $req, $id)
    {
        $data =  Bid::where('loan_id',$id)->get();
    
        return view('LoanBIds',['data'=>$data]);

    }

    function acceptbid()
    {

        /* 
        make part for accept bid in bid page

        accept bid function

        soft delete all other bids associated with loan/ au zihamishe to rejected bids where they will be deleted

        the uweke na option ya kucounter bid

        decline a bid all the way/ this deletes all the way
        */
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
