<?php

namespace App\Models\Admin;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo(File::class, 'brand_img');
    }

     public function getImage()
    {
        if ( ! $this->image || ! Storage::exists($this->image->getStoragePath())){
            return asset('backend/images/mmpr_logo.png');
        }
        
        return $this->image->getPath();
    }
}
