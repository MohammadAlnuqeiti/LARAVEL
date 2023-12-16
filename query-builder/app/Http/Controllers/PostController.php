<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function show(){
        // $data = Comment::with('post')->get();
        // return $data;
        // $commen_data=[];
        // foreach($data as $value){
        //     $commen_data[] = [
        //         'id' => $value->id,
        //         'comment' => $value->comment,
        //         'created_at' => $value->created_at,
        //         'name' => $value->post->post,
        //     ];
        // };
        // return  $commen_data;
        // $data = Post::with('comments')->get();
        // // return $data;
        // $commen_data=[];
        // foreach($data as $value){
        //     $commen_data[] = [
        //         'id' => $value->id,
        //         'post' => $value->post,
        //         'name' => $value->name,
        //         'comments' => $value->comments,
        //     ];
        // };
        // return  $commen_data;
        // $data =Post::find(1);
        // return $data->comments;
    }
    public function create(){
        return view('posts.create');
    }
    public function insert(Request $request){
// return $request;
        DB::table('posts')->insert([
            'name' => $request->name,
            'post' =>  $request->post
        ]);
        // return response('ok');
        return view('posts.create');

    }
    public function read(){
        $users = DB::table('posts')->get();

        return view('posts.show', ['users' => $users]);
    }
    public function edit($id){
$data=DB::table('posts')->where('id',$id)->first();

        return view('posts.edit',['data'=>$data]);
    }
    public function update_data(Request $request){
                DB::table('posts')->where('id',$request->id)->update([
                    'name' => $request->name,
                    'post' =>  $request->post
                ]);
                return redirect()->route('read');
            }
    public function delete($id){
        DB::table('posts')->where('id','=',$id)->delete();
        return redirect()->route('read');


    }
    public function deleteAll(){
        DB::table('posts')->delete();
        return redirect()->route('read');


    }
    public function deleteTruncate(){
        DB::table('posts')->truncate(); //بعد الحذف يبدأ الترقيم من الصفر
        return redirect()->route('read');


    }
}
