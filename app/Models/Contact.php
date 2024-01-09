<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //use HasFactory;
        protected $table = 'table_contacts';
    
        protected $fillable = [
            'name',
            'email',
            'subject',
            'message',
        ];
    
        protected $dates = [
            'created_at',
            'updated_at',
        ];
}

