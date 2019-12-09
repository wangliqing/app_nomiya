<?php
 
namespace App\Models\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
 
class Index extends Model
{
    protected $table         = 'user';                     // 为模型指定表名
    protected $primaryKey    = 'user_id';                            // 默认情况下指定'id'作为表主键，也可以指定主键名
    protected $appends       = ['name','head'];                   //注意一定要先定义像追加的字段名，这相当于临时给model加字段
    protected $visible       = ['name','head'];                   //显示属性

    public function testget($array)
    {
        $user=$this->get()->toArray();
        return $user;
    }

     public function testpost($array)
    {
        $user=$this->get()->toArray();
        return $user;
    }

    public function getNameAttribute()
    {

        return $this->nickname;
    }

    public function getHeadAttribute()
    {

        return $this->headimg;
    }

}