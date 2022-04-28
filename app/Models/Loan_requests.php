<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_requests extends Model
{
    public $table = "loan_request";
    use HasFactory;

    protected $primaryKey = "id";

    // accessor for loantypes
    public function getLoanTypeAttribute($value)
    {
        if($value==1)
        {
            return "Personal loan";
        }elseif ($value==2) {
            return "Mortgage";
        }elseif ($value==3) {
            return "Student loan";
        }elseif ($value==4) {
            return " Auto loan";
        }elseif ($value==5) {
            return "Payday loan";
        }elseif ($value==6) {
            return "Pawn shop loan";
        }elseif ($value==7) {
            return "Small business loan";
        }

    }

    function LoanUser()
    {
        // seecond paramenter at the end defines foreign key
        return $this->belongsTo(User::class,'users_id');
    }

}
