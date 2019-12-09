<?php
/**
 * Created by PhpStorm.
 * User: moTzxx
 * Date: 2017/12/28
 * Time: 17:47
 */

/**
 * 公用的方法  返回json数据，进行信息的提示
 * @param $code 状态
 * @param string $msg 提示信息
 * @param array $data 返回数据
 */
function showMsg($code,$msg = '',$data = array()){
    $result = array(
        'code' => $code,
        'data' =>$data,
        'msg' =>$msg
    );

    return $result;
}