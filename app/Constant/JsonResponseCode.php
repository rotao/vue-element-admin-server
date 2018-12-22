<?php

namespace App\Constant;

use SuperHappysir\Constant\Enum\Util\MappingHelper;

/**
 * Class JsonResponseCode Json响应状态码常量
 *
 * @package App\Constant
 */
class JsonResponseCode
{
    use MappingHelper;
    
    /**
     * 请求成功
     * @var int
     */
    public const SUCCESS = 200;
    
    /**
     * 服务器内部错误
     * @var int
     */
    public const SERVER_ERROR = 500;
    
    /**
     * 参数错误
     * @var int
     */
    public const PARAMETER_ERROR = 100001;
    
    /**
     * 未授权
     * @var int
     */
    public const UNAUTHORIZED = 401;
    
    /**
     * 状态码及对应的信息映射
     * @var array
     */
    protected const MAPPING = [
        self::SUCCESS         => '成功',
        self::SERVER_ERROR    => '服务器繁忙',
        self::PARAMETER_ERROR => '参数错误',
        self::UNAUTHORIZED    => '请先登录',
    ];
}
