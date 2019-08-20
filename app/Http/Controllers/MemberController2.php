<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class MemberController2 extends Model
{
    public function info($id){
        return 'MemberControllerBBBB' . $id;
    }
}
