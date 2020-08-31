<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use DateTime;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::get();
        return view('api-admin.modules.comment.index',compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {   
        $comment = Comment::find($id);
        $comment->status = ! $comment->status;
        $comment->save();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',
            'rating' => 'required'
        ]);
        
        $data = $request->except('_token');
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
        
        $methods = Comment::insert($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('api-admin.modules.comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;

        Comment::where('id',$id)->update($data);
        return redirect()->route('admin.comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::where('id',$id)->delete();
        return redirect()->route('admin.comment.index');
    }
}
