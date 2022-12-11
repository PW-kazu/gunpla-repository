<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeller extends Model
{
    use HasFactory;

    protected $fillable = ['name','email'];
    
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . '' . $this->name . $this->email . $this->password . $this->zip . $this->prefecture . $this->address . $this->tel;
    }

    public function modellers()
    {
        return $this->hasMany('App\Models\Modeller');
    }

}
