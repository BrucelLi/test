<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/3
 * Time: 10:38
 */
namespace App\Http\Controllers\Reg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Res\RegRes;

class RegController extends Controller{

    private $regCat;

    public function __construct(RegRes $regCat)
    {
        $this->$regCat = $regCat;
    }

    public function getReg(Request $request){
        $this->validate(
            $request,
            [],
            []
        );

        return view('reg.index', ['name'=>"lixiaolong"]);
    }

    public function login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $reData = $this->regCat->login($username,$password);
        var_dump($reData);die;
        return json_encode($reData);
    }

    public function reg(){

    }
}

