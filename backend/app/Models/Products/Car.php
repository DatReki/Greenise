<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products_cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'brand',
        'model',
        'battery',
        'range',
        'top_speed',
        'acceleration',
        'motor',
        'power_consumption',
        'production_start',
        'production_end',
        'image',
    ];
}
