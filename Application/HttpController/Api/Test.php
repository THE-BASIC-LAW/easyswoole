<?php
namespace App\HttpController\Api;

use App\Model\TestModel;
use App\Utility\Validator;
use EasySwoole\Core\Http\Request;
use EasySwoole\Core\Http\Response;

class Test extends BaseController
{

    function __construct(string $actionName, Request $request, Response $response)
    {
        parent::__construct($actionName, $request, $response);
    }

    function index()
    {
        // TODO: Implement index() method.
    }

    function test(){
//        for ($i=0; $i<1000; $i++){
//            \go(function () {
//                \co::sleep(1);
//                echo "hello";
//            });
//        }
//        $posts = $this->request()->getRequestParam();
//        $validator = new Validator();
//        $validator->validate($posts, array(
//            "input" => "min:3|max:5|required",
//            "input2" => "numeric",
//            "input3" => "mobile",
//            "input4" => "json"
//        ), array(
//            "input" => "input必须3-5之间",
//            "input2" => "必须是数值型",
//            "input3" => "手机号码格式不对"
//        ));
//        $res = $this->redis->get("test");
        $res = TestModel::getInstance()->test();
        $this->writeJson($res);
    }

}