<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";
    protected $fillable = ['customer_id', 'name', 'email', 'password', 'gender', 'address', 'state', 'country', 'dob', 'image'];
}
