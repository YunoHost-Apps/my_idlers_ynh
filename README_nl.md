<!--
NB: Deze README is automatisch gegenereerd door <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Hij mag NIET handmatig aangepast worden.
-->

# My Idlers voor Yunohost

[![Integratieniveau](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![Mate van functioneren](https://apps.yunohost.org/badge/state/my_idlers)
![Onderhoudsstatus](https://apps.yunohost.org/badge/maintained/my_idlers)

[![My Idlers met Yunohost installeren](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[Deze README in een andere taal lezen.](./ALL_README.md)*

> *Met dit pakket kun je My Idlers snel en eenvoudig op een YunoHost-server installeren.*  
> *Als je nog geen YunoHost hebt, lees dan [de installatiehandleiding](https://yunohost.org/install), om te zien hoe je 'm installeert.*

## Overzicht

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


**Geleverde versie:** 3.0~ynh1

**Demo:** <https://demo.myidlers.com/login>

## Schermafdrukken

![Schermafdrukken van My Idlers](./doc/screenshots/example.jpg)
![Schermafdrukken van My Idlers](./doc/screenshots/my_idlers.jpg)

## Documentatie en bronnen

- Officiele gebruikersdocumentatie: <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- Upstream app codedepot: <https://github.com/cp6/my-idlers#install>
- YunoHost-store: <https://apps.yunohost.org/app/my_idlers>
- Meld een bug: <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## Ontwikkelaarsinformatie

Stuur je pull request alsjeblieft naar de [`testing`-branch](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing).

Om de `testing`-branch uit te proberen, ga als volgt te werk:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
of
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**Verdere informatie over app-packaging:** <https://yunohost.org/packaging_apps>
