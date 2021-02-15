<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'order_id',
        'description',
        'customer_id',
        'application_id',
    ];

    protected $visible = [
        'order_id',
        'description',
    ];

}
