<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/12/30
 * Time: 下午10:59
 */

return [
    'MAIN_SERVER'=>[
        'HOST'=>'0.0.0.0',
        'PORT'=>80,
        'SERVER_TYPE'=>\EasySwoole\Core\Swoole\ServerManager::TYPE_WEB_SOCKET_SERVER,
        'SOCK_TYPE'=>SWOOLE_TCP,//该配置项当为SERVER_TYPE值为TYPE_SERVER时有效
        'RUN_MODEL'=>SWOOLE_PROCESS,
        'SETTING'=>[
            'task_worker_num' => 8, //异步任务进程
            'task_max_request'=>10,
            'max_request'=>5000,//强烈建议设置此配置项
            'worker_num'=>8,
            'request_slowlog_file' => EASYSWOOLE_ROOT.'/Log/slow.log', //开启请求慢日志。
            'trace_event_worker' => true, //跟踪 Task 和 Worker 进程
            'request_slowlog_timeout' => 2, //2秒
        ],
    ],
    'DEBUG'=>true,
    'TEMP_DIR'=>EASYSWOOLE_ROOT.'/Temp',
    'LOG_DIR'=>EASYSWOOLE_ROOT.'/Log',
    'EASY_CACHE'=>[
        'PROCESS_NUM'=>1,//若不希望开启，则设置为0
        'PERSISTENT_TIME'=>0//如果需要定时数据落地，请设置对应的时间周期，单位为秒
    ],
    'CLUSTER'=>[
        'enable'           => false,
        'token'            => null,
        'broadcastAddress' => ['255.255.255.255:9556'],
        'listenAddress'    => '0.0.0.0',
        'listenPort'       => '9556',
        'broadcastTTL'     => 5,
        'nodeTimeout'      => 10,               // 2.1.1 新增
        'nodeName'         => 'easySwoole',     // 2.1.1 新增
        'nodeId'           => null,             // 2.1.1 新增
    ],
    "env" => "debug" // env = debug|prod 判断开发和生产环境
];