<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidRequestException;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InvalidRequestException
     */
    public function verify(Request $request)
    {
        //从url中获取email 和token两个参数
        $email = $request->input('email');
        $token = $request->input('token');
        //如果有一个为空说明不是一个合法的验证链接，直接抛出异常
        if (!$email || !$token) {
            throw new InvalidRequestException('验证链接不正确');
        }
        //从缓存中读取数据，我们把从url中获取的'token'与缓存中的值作对比
        //如果缓存不存在或者返回的值与url中的token不一致就抛出异常。
        if ($token != Cache::get('email_verification_' . $email)) {
            throw new InvalidRequestException('验证链接不正确或已过期');
        }

        //根据邮箱从数据库中获取对应的用户
        //通常来说能通过token校验的情况下不可能出现用户不存在
        //但是为了代码的健壮性，还需要做个判断
        if (!$user = User::where('email', $email)->first()) {
            throw new InvalidRequestException('用户不存在');
        }

        //将指定的key从缓存中删除，由于已经完成了验证。这个缓存就没有必要继续保留。
        Cache::forget('email_verification_' . $email);
        //最关键的。要把对应用户的'email_verified'字段改成true
        $user->update(['email_verified' => true]);

        //最后告知用户邮箱验证成功
        return view('pages.success', ['msg' => '邮箱验证成功']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InvalidRequestException
     */
    public function send(Request $request){
        $user = $request->user();
        //判断用户是否已激活
        if ($user->email_verified){
            throw new InvalidRequestException('你已经验证过邮箱了');
        }
        //调用notify（）方法用来发送定义好的通知类
        $user->notify(new EmailVerificationNotification());
        return view('pages.success',['msg'=>'邮件发送成功']);
    }
}
