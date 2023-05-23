<?php

namespace App\Models;

use App\Models\MenuPagesData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuPagesCardData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ServicesPagesData()
    {
    	return $this->belongsTo(MenuPagesData::class, 'id');
    }
}
