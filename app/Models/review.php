<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function Product()
    {
      return $this->belongsTo(product::class);
    }
}
