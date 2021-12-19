<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;


class User extends Model
{
    use HasFactory;
    //データベースをsqlを使わずに値を代入したり更新したりすることができるようにしたもの
    //データベースをモデルとして捉える

    //データベース設定
    protected $table='users';
    //create_atとかは書いてないですよ
    public $timestamps = false;

    //可変項目
    //指定したところだけ外部から値を書き換えることができる
    protected $fillable=
    [
        'user_id',
        'user_password'
    ];


    /**
     * ユーザーの記事を取得
     */
    public function contents()
    {
        return $this->hasMany(Content::class);
    }

}
