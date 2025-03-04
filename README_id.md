<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# My Idlers untuk YunoHost

[![Tingkat integrasi](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![Status kerja](https://apps.yunohost.org/badge/state/my_idlers)
![Status pemeliharaan](https://apps.yunohost.org/badge/maintained/my_idlers)

[![Pasang My Idlers dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang My Idlers secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

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


**Versi terkirim:** 3.0~ynh1

**Demo:** <https://demo.myidlers.com/login>

## Tangkapan Layar

![Tangkapan Layar pada My Idlers](./doc/screenshots/example.jpg)
![Tangkapan Layar pada My Idlers](./doc/screenshots/my_idlers.jpg)

## Dokumentasi dan sumber daya

- Dokumentasi pengguna resmi: <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- Depot kode aplikasi hulu: <https://github.com/cp6/my-idlers#install>
- Gudang YunoHost: <https://apps.yunohost.org/app/my_idlers>
- Laporkan bug: <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
atau
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
