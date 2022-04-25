<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan_requests;


class LoansController extends Controller
{
    //
    function LoanRequest(Request $req)
    {
        $loan = new Loan_requests;
        $loan->amount=$req->amount;
        $loan->save();
    }
}
