<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';

    static function NewProducts()
    {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Product::where(DB::raw('date_format(updated_at, "%Y-%M-%d")'), '>=', date('Y-m-d', strtotime($sNow)))->where('updated_at', '<=', date('Y-m-d', strtotime($sNextWeek)))->get();
    }

    static function Offerings()
    { 
        $sNow = date('Y-m-d H:i:s');
        return Product::where('discountStart_at', '<=' , date('Y-m-d', strtotime($sNow)))->where('discountEnd_at', '>=', date('Y-m-d',strtotime($sNow)))->get();
    }
}
