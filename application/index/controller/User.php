<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/19
 * Time: 22:45
 */
 namespace app\index\Controller;

 use think\captcha\Captcha;
 use think\Controller;
 use think\Session;


 class User extends Controller{

     public function login(){

        $user_name=session('user_name');
        if(empty($user_name)){
            if(request()->isPost()){
                try{
                    $res=model('User')->login();
                    if($res!==true){
                        throw exception($res);
                    }
                }catch(\Exception $e){
                    return $this->error($e->getMessage());
                }
                return redirect('Navigation/tickets');
            }
            return view('');
        }
        return $this->error('请先退出当前账号！');
    }

     public function logout(){
        $user_name=session('user_name');
         if(!empty($user_name)){
            session('user_name',null);
            session('user_id',null);
            return redirect('Navigation/tickets');
         }
         return $this->error('请先登录','login');
     }

     public function registered(){

        if(request()->isPost()){
            //异常处理
            try {
                $res=model('User')->addData();
                if ($res!==true) {
                    throw exception($res);
                }
            } catch (\Exception $e) {
                return $this->error($e->getMessage());
            }
            return $this->success('注册成功','login');
        }
        return view('');
    }



    //点击发送邮箱验证码

    public function getemail(){
        $email=input('param.email');    
         //调用邮箱发送
        $yx=model('User')->send_email($email);

        if ($yx) {
            $arr = [
                'status' => 1,
                'msg' => '发送成功！'
            ];
        }else{
            $arr = [
                'status' => 2,
                'msg' => '发送失败！'
            ];
        }

        echo json_encode($arr);
        exit;
    }

     //生成验证码
     public function getCaptcha(){
        $ca=new Captcha([
            'fontSize'=>20,
            'imageH'=>50,
            'imageW'=>150,
            'length'=>4,
        ]);
            return $ca->entry();
     }
 }