<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedProd extends Model
{
    use HasFactory;
    protected $table = 'related_products';
    protected $guarded = [];
}
