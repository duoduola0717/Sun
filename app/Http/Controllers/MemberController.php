<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class MemberController extends Model
{
    public function info(){
        //return 'MemberController';
        //return view('member-info');

        //return view('member/info',[
        //    'name' => '米粒',
        //    'age' => '4'
        //]);

        return Member::getMember();
    }
}
