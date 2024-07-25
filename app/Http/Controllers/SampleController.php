<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "sample テキストです。";

        // 参照
        $records = DB::connection('mysql')->select("select * from users");
        $email = $records[0]->email;

        // 追加
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'sample@sample.com','sample','1111')");
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'test@test.com','test','2222')");
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'sample1@sample.com','sample1','3333')");


        $deleteResult = DB::connection("mysql")->delete("delete from users where email = 'sample@sample.com'");
        dd($deleteResult);

        return view("top/index", ["sampleValue" => $sampleValue]);
    }
}