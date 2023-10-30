<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = 'accounts'; // Specify the table name if it's different from the model's name
    protected $primaryKey = 'accountID'; // Specify the primary key column if it's different from 'id'
    protected $fillable = ['name', 'email', 'password']; // Specify the columns that can be mass-assigned
}
