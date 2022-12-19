<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function getTitle()
    {
        return 'ID'.$this->id . ':' . $this->name . $this->price;
    }

    public function author()
    {
      return $this->belongsTo('App\Models\Modeller');
    }
}
