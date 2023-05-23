<?php

namespace App\Models;

use App\Models\MenuPagesCardData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuPagesData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cards()
    {
    	return $this->hasMany(MenuPagesCardData::class, 'parent_id');
    }
}
