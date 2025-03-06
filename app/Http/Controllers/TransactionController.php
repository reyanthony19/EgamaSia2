<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function Index(){

    $transaction = DB::Select(
        "SELECT * FROM transaction 
        INNER JOIN users ON users.id = transaction.id 
        

        " );  
           return response()->json(["message" => true,"transaction"=>$transaction],200);
   }


}
