<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入storage类
use Storage;
class UploaderController extends Controller
{
    //文件上传保存方法
    public function webuploader(Request $request){
        //开始做文件上传
        if ($request->file('file')->isValid()&&$request->hasFile('file')) {
            //上传处理
            //对文件重命名,防止重复
            $filename = sha1(time() . rand(100000,999999)) . '.' . $request->file('file')->
            getClientOriginalExtension();
            //dd($filename);
            $result = Storage::disk('public')->put($filename,file_get_contents($request->file('file')->path()));
            //dd($result);
            
            
            //返回信息
            if($result){
                //成功
                $response = ['code'=>0,'msg'=>'上传成功!','filepath'=>'/storage/' . $filename];    
            }else {
                //失败
                $response = ['code'=>1,'msg'=> $request->file('file')->getErrorMessage()];
            }
        }else {
            //返回值
            $request = ['code' => 2,'msg'=>'非法文件上传'];
        }
        //输出结果
        return response() -> json($response);
    }
}
