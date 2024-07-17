<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['id','judul','isi','tgl_publikasi','id_user','id_kategori','id_komentar','cover'];
    public $timestamps = true;

    public function User()
    {
        return $this->BelongsTo(User::class, 'id_user');
    }

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }

    public function Komentar()
    {
        return $this->BelongsTo(Komentar::class, 'id_komentar');
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/artikel' . $this->cover))){
            return unlink(public_path('images/artikel' . $this->cover));
        }
    }
}
