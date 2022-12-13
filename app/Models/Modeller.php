<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeller extends Model
{
    use HasFactory;
    
    protected $table = "modeller";
    protected $fillable = ['name','email'];
    
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . '' . $this->name . $this->email . $this->password . $this->zip . $this->prefecture . $this->address . $this->tel;
        return $txt;
    }

    public function modellers()
    {
        return $this->hasMany('App\Models\Modeller');
    }

    public function InsertRegister($request)
    {
        
        return $this->create([
            'register'=> $request->register,
        ]);
    }

}
