<?php
//----------------------------------
// Strack 3.0 引导文件
//----------------------------------

namespace Think;

// 加载基础文件
require __DIR__ . '/Base.php';

// 执行应用
App::run()->send();
