<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\support\Facades\DB;
class transaction extends Model
{
    use HasFactory;

    protected $table = "transaction"[transaction];
protected $fillable = [ "id", "user_id", "price", "status", "type", "date_completed", "contact_number", "Address", "pickup_date", "created_at", "updated_at"
];

}



