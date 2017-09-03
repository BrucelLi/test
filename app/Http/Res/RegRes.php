<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/3
 * Time: 11:48
 */
namespace App\Http\Res;
use App\Http\Res\Cat\RegCat as ResCat;

class RegRes implements ResCat{

    /**
     * @see \App\Http\Res\Cat\RegCat
     */
    public function login($username, $password){

        $res = DB::select("select * from my_user WHERE username = '".$username."'");
        if (empty($res)) {
            echo "用户名不存在";
            die;
        }
        $pwd = md5($password);
        if($password !== $pwd){
            echo "用户密码错误";
            die;
        }
        return [
            'code'=>0,
            'message'=>'ok',
            'data'=>[]
        ];
    }
}