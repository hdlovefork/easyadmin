<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Env;

// +----------------------------------------------------------------------
// | 日志设置
// +----------------------------------------------------------------------
return [
    // 默认日志记录通道
    'default'      => Env::get('log.channel', 'file'),
    // 日志记录级别
    'level'        => [],
    // 日志类型记录的通道 ['error'=>'email',...]
    'type_channel' => [],
    // 是否关闭日志写入
    'close'        => false,
    // 全局日志处理 支持闭包
    'processor'    => null,

    // 日志通道列表
    'channels'     => [
        'file' => [
            // 日志记录方式
            'type'        => 'File',
            // 日志保存目录
            'path'        => '',
            // 单文件日志写入
            'single'      => false,
            // 独立日志级别
            'apart_level' => [],
            // 最大日志文件数量
            'max_files'   => 0,
            // 使用JSON格式记录
            'json'        => false,
            // 日志处理
            'processor'   => null,
        ],
        // 其它日志通道配置
    ],

];
