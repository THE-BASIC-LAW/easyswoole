<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/3/5
 * Time: 22:18
 */

namespace App\Model;


use EasySwoole\Core\AbstractInterface\Singleton;

class TestModel extends BaseModel
{
    use Singleton;

    function test(){
        return $this->readDb->get("test");
    }

    function test2(){
        $this->asyncMysql->query("select * from student");
        var_dump("testmodel");
    }
}