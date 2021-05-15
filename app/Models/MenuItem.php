<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function childrenMenuItem()
    {
        return $this->hasMany(MenuItem::class)->with("menuItems");
    }
}
