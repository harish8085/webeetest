<?php


namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
     
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id')->with('children');
    }

    public function menuItmes()
    {

        $menuItems =  MenuItem::with('children')->get();
        return $menuItems;

    }
}
