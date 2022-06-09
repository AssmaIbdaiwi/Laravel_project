<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_Receptor extends Model
{
    use HasFactory;

    public function product()
{
   return $this->belongsTo(Donation_Receptor::class);
}
}
