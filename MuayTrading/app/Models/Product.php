<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    

    public function type()
    { return $this->belongsTo(Type::class,'type_id');
    }

    public function image()
    { return $this->belongsTo(Image::class,'image_id');

        
    }
    public function brand()
    { return $this->belongsTo(Brand::class,'brand_id');
    }

    public function condition()
    { return $this->belongsTo(Condition::class,'condition_id');

        
    }
}
