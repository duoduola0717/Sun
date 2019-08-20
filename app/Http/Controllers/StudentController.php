<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function test1(){
        //return 'MemberController';
        //return view('member-info');

        //return view('member/info',[
        //    'name' => '米粒',
        //    'age' => '4'
        //]);
        //新增
        //$bool = DB::insert('insert into student(name,age) values (?,?)',['mily1',4]);
        //更新
        //$num = DB::update('update student set age = 5 where name = ?', ['mily1']);
        //删除
        $num = DB::delete('delete from student where age = ?', [5]);
        var_dump($num);
        $student = DB::select('select * from student');
        dd($student);

    }
}
