<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 My Idlers

[![集成程度](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![工作状态](https://apps.yunohost.org/badge/state/my_idlers)
![维护状态](https://apps.yunohost.org/badge/maintained/my_idlers)

[![使用 YunoHost 安装 My Idlers](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 My Idlers。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

If you are the person in your family, group of friends or colleauges that manages the servers, domain names, online accounts and other hosted services, than this app is for you. 

My Idlers is a useful register for keeping track of your servers and online hosting accounts. 

It is a single-user app; if more than one person wants to use this functionality, it needs to be installed multiple times. 
Besides that, for now, it needs a (sub)domain for itself. 

This is my first app packaging attempt; there may be some rough edges. 

What works: 
* installing the app and using its features
* uninstalling 
* backup
* moving the app to another domain

What does not (yet?) work or is untested:
* installing the app in subfolder
* LDAP integration
* restore from backup 
* API access 

![Screenshot of My Idlers](./doc/screenshots/my_idlers.jpg)


**分发版本：** 3.0~ynh1

**演示：** <https://demo.myidlers.com/login>

## 截图

![My Idlers 的截图](./doc/screenshots/example.jpg)
![My Idlers 的截图](./doc/screenshots/my_idlers.jpg)

## 文档与资源

- 官方用户文档： <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- 上游应用代码库： <https://github.com/cp6/my-idlers#install>
- YunoHost 商店： <https://apps.yunohost.org/app/my_idlers>
- 报告 bug： <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
或
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
