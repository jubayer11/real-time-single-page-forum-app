<?php

namespace App\Http\Controllers;


use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
       $x= $reply->like();
            $x->create([

            'user_id'=>'1',
                'reply_id'=>'1'

        ]);
        return response('created',Response::HTTP_CREATED);


    }
    public function unLikeIt(Reply $reply)
    {
//        $reply->like()->where(['user_id',auth()->id()])->first()->delete();
        $reply->like()->where('user_id','1')->first()->delete();

    }

}
