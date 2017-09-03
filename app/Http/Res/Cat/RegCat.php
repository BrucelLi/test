<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/3
 * Time: 11:47
 */
namespace App\Http\Res\Cat;

interface RegCat
{
    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username,$password);
}