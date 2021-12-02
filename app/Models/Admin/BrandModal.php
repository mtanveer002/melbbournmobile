<?php

namespace App\Models\Admin;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandModal extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function image()
    {
        return $this->belongsTo(File::class, 'modal_img');
    }

     public function getImage()
    {
        if ( ! $this->image || ! Storage::exists($this->image->getStoragePath())){
            return asset('backend/images/avatar/avatar-2.png');
        }
        
        return $this->image->getPath();
    }
}
