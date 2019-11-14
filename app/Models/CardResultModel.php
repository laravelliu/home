<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardResultModel extends Model
{
    //
    protected $table = 'card_result';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * 获取对应用户
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * @author: liuFangShuo
     */
    public function getUser()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
