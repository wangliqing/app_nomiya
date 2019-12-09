<?php

namespace App\Http\Controllers\Api;

use App\Models\Api\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(){
    	 echo 111;die;
    }
    public function home(){
    	 echo 333;die;
    }
    // index.test
    public function test(Request $request){
    	$data=request();
    	$Validator_data['id']=$data['id'];
    	$Validator_data['num']=$data['num'];
        // 验证必须数组
        $rules=[
            'id'=>'required|numeric|min:1',
            'num'=>'required|numeric|min:1',
        ];
        $message=[
            'id.required'=>'id不能为空',
            'id.numeric'=>'id为整数',
            'id.min'=>'id最小为1',
            'num.required'=>'num不能为空',
            'num.numeric'=>'num为整数',
            'num.min'=>'num最小为1'
        ];
        $validator=Validator::make($Validator_data,$rules,$message);
        if(!$validator->passes()){
            $validatorErrs = $validator->errors()->all();
            $errMessages=['errcode'=>1, 'msg'=>$validatorErrs];
            return  response()->json($errMessages);
        }
        // 实例化模型
    	$testget_index = new Index;
        $testget_data=$testget_index->testget($Validator_data);
        return  response()->json($testget_data);
    }
    // index.testpost
    public function testpost(Request $request){
    	$data=request();
    	$Validator_data['name']=$data['name'];
    	// 验证必须数组
    	$rules=[
            'name'=>'required|string|between:6,16',
        ];
        $message=[
        	'name.required'   =>'姓名不能为空',
            'name.between'    =>'姓名必须在6-16位之间',
        ];
        $validator=Validator::make($Validator_data,$rules,$message);
        if(!$validator->passes()){
            $validatorErrs = $validator->errors()->all();
            $errMessages=['errcode'=>1, 'msg'=>$validatorErrs];
            return  response()->json($errMessages);
        }
         // 实例化模型
    	$testget_index = new Index;
        $testget_data=$testget_index->testget($Validator_data);
        return  response()->json($testget_data);
    }
}
