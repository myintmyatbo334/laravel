<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id', 'country_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
