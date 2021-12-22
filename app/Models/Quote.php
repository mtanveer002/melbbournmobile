<?php

namespace App\Models;

use App\Models\Admin\Brand;
use App\Models\Admin\BrandModal;
use App\Models\Admin\Issue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function modal()
    {
        return $this->belongsTo(BrandModal::class, 'modal_id');
    }
    public function issues()
    {
        return $this->belongsTo(Issue::class, 'issue_id');
    }
 
}
