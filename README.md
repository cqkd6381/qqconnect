## [接入指南](https://connect.qq.com/manage.html#/)
1. 注册成为开发者
2. 创建应用，填入网站地址（如www.cqkd6381.com）和网站回调域（如http://www.cqkd6381.com/qqconnect/callback.php） 等信息，等待审核成功后，可查看appid和appkey
3. git clone git@github.com:cqkd6381/qqconnect.git
4. 将qqconnect/Connect2.1/API/comm/inc.php中的appid、appkey和callback修改成你自己的
5. 访问qqconnect/index.php，点击QQ登录并授权即可成功登录并获取登录的用户基本信息。
6. [QQ登录](http://www.cqkd6381.com/qqconnect/index.php)
