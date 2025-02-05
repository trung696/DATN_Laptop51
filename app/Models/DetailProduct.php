<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailProduct extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "detail_products";
    protected $dates = ['deleted_at'];
    public $fillable = ['name', 'price', 'qty', 'desc','image', 'status', 'product_id'];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
