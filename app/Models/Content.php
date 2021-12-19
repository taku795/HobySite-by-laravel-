<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Content extends Model
{
    use HasFactory;
    protected $table='contents';
    public $timestamps = false;

    protected $fillable=
    [
        'title',
        'text',
        'time'
    ];

    /**
     * 記事を投稿しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
