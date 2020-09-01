<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Recruitment;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitment = Recruitment::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.recruitment.index',compact('recruitment'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('api-admin.modules.recruitment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valdidateData = $request->validate([
            'title' => 'required|unique:recruitment',
            'description' => 'required',


        ],[
            'title.required' => 'Vui lòng nhập tiêu đề',
            'description.required' => 'Vui lòng ghi nội dung',

        ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime;
        $data['url'] = Str::slug($data['title'], '-');


        Recruitment::insert($data);
        return redirect()->route('admin.recruitment.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $recruitment = Recruitment::find($id);
        $recruitment->status = ! $recruitment->status;
        $recruitment->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::where('id',$id)->first();
        return view('api-admin.modules.recruitment.edit', compact('recruitment'));
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
        $data = $request -> except('_token');
        $data['updated_at'] = new DateTime;

        Recruitment::where('id', $id)->update($data);

        return redirect()->route('admin.recruitment.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recruitment::where('id',$id)->delete();
        return redirect()->route('admin.recruitment.index');
    }
}
