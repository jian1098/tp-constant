## tp-constant
thinkphp框架命令行创建常量class文件

<br/>



## 如何使用

- 安装

  thinkphp5.*安装`1.0.1`版本

  ```
  composer require jian1098/tp-constant:1.0.1
  ```

  然后在`application/command.php`新增一行注册服务

  ```php
  return [
      'Jian1098\TpConstant\Command\Make\Constant'
  ];
  ```

  thinkphp6以上安装`2.0.1`版本，不需要手动注册服务

  ```bash
  composer require jian1098/tp-constant:2.0.1
  ```

  安装完成后在控制台输入`php think`可以看到多了`make:constant`命令

  ```bash
  make
    make:command       Create a new command class
    make:constant      Create a new constant class   # 新增的命令
    make:controller    Create a new resource controller class
    make:middleware    Create a new middleware class
    make:model         Create a new model class
  ```

  

- 使用命令行创建常量class

  ```bash
  php think make:constant TestConstant
  ```

  该命令会创建`application/common/constant/TestConstant.php`文件

- 调用常量

  ```php
  <?php
  
  namespace app\api\controller;
  
  use app\common\constant\TestConstant;
  use think\Controller;
  
  class Test extends Controller
  {
      //index
      public function index()
      {
          var_dump(TestConstant::SERVER_ERROR); //使用常量
      }
  }
  ```

  









