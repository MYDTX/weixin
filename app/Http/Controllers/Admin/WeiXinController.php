<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class WeiXinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.weixin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.weixin.show',['data'=>DB::table('weixin')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'w_name' => 'required|unique:weixin,w_name',
            'appid' => 'required|unique:weixin,appid',
            'appsecret' => 'required|unique:weixin,appsecret',
        ]);
        $data=$request->except('_token');
        if(DB::table('weixin')->insert($data)){
           return  redirect('weiXin/create')->with(['message'=>'添加成功']);
        }
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
        return view('admin.weixin.edit',['data'=>DB::table('weixin')->where('w_id',$id)->first()]);
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
        $this->validate($request, [
            'w_name' => "required|unique:weixin,w_name,$id,w_id",
            'appid' => "required|unique:weixin,appid,$id,w_id",
            'appsecret' => "required|unique:weixin,appsecret,$id,w_id",
        ]);
        $data=$request->except('_token','_method');
        if(DB::table('weixin')->where('w_id',$id)->update($data)!==false){
           return redirect('weiXin/create')->with(['message'=>'修改成功']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('weixin')->where('w_id',$id)->delete()){
            echo 1;
        }
    }
}
