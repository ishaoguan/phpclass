<?php
/**
 * Description: PhpStorm.
 * Author: yoby
 * DateTime: 2019/2/18 0:33
 * Email:logove@qq.com
 * Copyright Yoby版权所有
 */
include_once "Verify.php";
$v = new Verify();
$is = $v->check('8zfu');
var_dump($is);// true表示验证通过