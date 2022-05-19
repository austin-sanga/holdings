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
        // obtaining loop from different sources
        $user = auth()->user();
        $user_id = ($user->id);/* this calls for data of logged in user */

        $ubids = Bid::select('loan_id')->where('user_id',$user_id);
        $userbids = Loan_requests::where('id',$ubids)->get()->array();
        
        $beg = Loan_requests::all(); 
        return view('beggers',['beg'=>$beg,'userbids'=>$userbids]);


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
        Bid::where('bids.loan_id', $id)->delete();
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
        $user = auth()->user();

        $user_id = ($user->id);/* this brings the logged in user id */

        $data = Loan_requests::find($req->id);
        $loan_id=($data->id);
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
        $user = auth()->user();

        $user_id = ($user->id);/* this brings the logged in user id */
        
        $data = Loan_requests::find($req->id);
        $loan_id=($data->id);
       
        
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
        $viewbid =  Bid::where('loan_id',$id)->get();
    
        return view('LoanBIds',['viewbid'=>$viewbid]);

    }

    function acceptbid($id)
    {
        $data = Bid::find($id);/* this pulls id from the url, id belongs to bid */

        $loandataid = ($data->loan_id);/* obtaining the id of the borrower */
        $loandata = Loan_requests::find($loandataid);/* this passes loan data stuffs from loan request*/
        $borrowerid = ($loandata->users_id);
        $borrower = User::find($borrowerid);

        $lenderid = ($data->user_id);/* obtained the id of the lender */
        $lender = User::find($lenderid);

        $won = now('EAT');/* passing time of the contract */
        $now = $won->toFormattedDateString();

        
        return view('LoanContract',['borrower'=>$borrower, 'lender'=>$lender, 'now'=>$now,'loandata'=>$loandata,'data'=>$data]);



        /* 
        

        kuongeza part ya kucounter

        dummy draft contract

        tengeneza part ya giver kuona watu alio wabidia

        accept bid function

        soft delete all other bids associated with loan/ au zihamishe to rejected bids where they will be deleted

        the uweke na option ya kucounter bid

        decline a bid all the way/ this deletes all the way

        grace period- has to be input as a duration
        final day of payment-start of contract + grace period + period of pay
        interval pay- has not to be filled but rather auto calculated

        */
    }









    function test()
    {
        $won = now('EAT')->addDays(7); /* obtains current date in the East Africa Timezone */
        $now = $won->toFormattedDateString(); /* converts to the format */
        return view('test',['now'=>$now]);  /* passes to the test view */
         
    }

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
