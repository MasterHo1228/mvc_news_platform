<?php

/**
 * Created by IntelliJ IDEA.
 * User: MasterHo
 * Date: 2016/9/28
 * Time: 17:03
 */
class platformController{
    /**
     * 跳转页面
     * @param $url 需要跳转的链接
     * @param string $msg 跳转相应链接前需要回显的信息 默认为空
     * @param int $time 跳转等待的时间 默认为2秒
     */

    protected function jump($url,$msg='',$time=2){
        if ($msg==''){//没有提示信息
            header("Location: $url");
        } else {//有提示信息
            require "./application/home/view/jump.html";
        }
        die;//终止运行
    }
}