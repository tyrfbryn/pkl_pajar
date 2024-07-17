<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = ['id','komentar','id_user'];
    public $timestamps = true;

    public function User()
    {
        return $this->BelongsTo(User::class, 'id_user');
    }
    
    public function artikel()
    {
        return $this->hasMany(artikel::class);
    }
}
