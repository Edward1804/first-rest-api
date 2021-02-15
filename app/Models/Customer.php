<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'phone',
    ];

    protected $visible = [
        'customer_id',
        'name',
        'email',
        'phone',
    ];

}
