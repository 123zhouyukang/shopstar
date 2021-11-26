<?php
namespace App\Contracts\Sms;

interface SmsContracts
{
    /**
     * @param $content 短信内容
     * @param $phone 手机号码
     * @return mixed
     *  短信发送接口
     */
    public function send($content,$phone);
}