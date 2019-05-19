<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicePosition extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'invoice_id',
        'product_count',
        'item'
    ];
}
