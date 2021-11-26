<?php
namespace App\Support\Sms;

use App\Contracts\Sms\SmsContracts;
use Illuminate\Contracts\Container\Container;

class SmsSupport implements SmsContracts
{
    private $statsusStar = [
        "0" => "短信发送成功",
        "-1" => "参数不全",
        "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
        "30" => "密码错误",
        "40" => "账号不存在",
        "41" => "余额不足",
        "42" => "帐户已过期",
        "43" => "IP地址限制",
        "50" => "内容含有敏感词"
    ];

    /**
     * @var string
     *  短信发送api接口,服务商提供
     */
    private $smsapi = 'http://api.smsbao.com/';

    private $app;

    private $config;

    public function __construct(Container $container)
    {
        $this->app = $container;
        $this->config = $this->app->make('config');
    }

    public function send($content, $phone)
    {
        $sendUrl = $this->smsapi.'sms?u='.$this->config->get('sms.user').'&p='.md5($this->config->get('sms.password')).'&m='.$phone.'&c='.urlencode($content);
        $restful = file_get_contents($sendUrl);
        return $this->statsusStar[$restful];
    }
}