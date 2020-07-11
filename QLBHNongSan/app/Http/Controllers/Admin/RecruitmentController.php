<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,DateTime;
class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuyendung = DB::table('tuyendung')->get();
        return view('api-admin.modules.recruitment.index',['tuyendung'=>$tuyendung]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tuyendung = DB::table('tuyendung')->get();
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
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        DB::table('tuyendung')->insert($data);
        return redirect()->route('admin.recruitment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tuyendung = DB::table('tuyendung')->where('id',$id)->first();
        return view('api-admin.modules.recruitment.edit',['tuyendung'=>$tuyendung]);
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

        DB::table('tuyendung')->where('id',$id)->update($data);
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
        DB::table('tuyendung')->where('id',$id)->delete();
        return redirect()->route('admin.recruitment.index');
    }
}
