<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class GoodsController extends Controller
{
    public function redis1(){
        $val="name1";
        dump($val);echo"<br>";
        $key=Redis::get($val);
        var_dump($key);
    }

}
