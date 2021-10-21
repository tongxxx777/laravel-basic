##### 部署须知
###### 准备
```
1.修改php.ini
  关闭 proc_open,proc_get_status,symlink

2.安装composer 并配置代理加速
  composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

3.添加虚拟主机 和 SSL证书

4.配置rewrite规则
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }
```

###### 配置项目
```
1.git clone

2.安装三方扩展包
  composer install

3.创建并修改 .env文件
  cp -r .env.example .env
  vi .env

4.生成key
  php artisan key:generate

5.设置权限
  chmod -R 777 storage
  php artisan storage:link
```

##### 项目规范
###### 数据库
```
1.表名(使用下划线 复数形式)
  例: user_follows 用户关注表

2.字段(使用下划线)
  例: user_id 用户ID

2.1 所有表中 必须存在 主键自增ID
  $table->bigIncrements('id')->comment('ID');

2.2 所有表中 必须存在 创建时间 更新时间 删除时间字段
  $table->softDeletes();
  $table->timestamps();

2.3 有是否含义的字段 使用 0 1 表示
  例: $table->unsignedTinyInteger('is_disabled')->default(0)->comment('是否禁用 0.未禁用 1.已禁用');
```
##### Artisan 命令
```
创建 Model 数据库迁移文件
  php artisan make:model User -mf

创建 Controller
  php artisan make:controller Api/UserController

创建 Service类
  touch app/Services/UserService.php

创建 验证类
  php artisan make:request Api/UserRequest

创建 中间件
  php artisan make:middleware AcceptHeader

创建 服务
  php artisan make:provider UserServiceProvider
```