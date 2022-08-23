<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'stock', 'price', 'image', 'type', 'desc'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('name', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
