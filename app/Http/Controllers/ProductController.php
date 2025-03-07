<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User(){
 
     $transaction = DB::Select(
         "SELECT * FROM transaction 
         INNER JOIN users ON users.id = transaction.id 
         
 
         " );  
            return response()->json(["message" => true,"transaction"=>$transaction],200);
    }
 
 
 }
