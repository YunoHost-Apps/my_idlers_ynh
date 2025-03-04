<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# My Idlers YunoHost-erako

[![Integrazio maila](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![Funtzionamendu egoera](https://apps.yunohost.org/badge/state/my_idlers)
![Mantentze egoera](https://apps.yunohost.org/badge/maintained/my_idlers)

[![Instalatu My Idlers YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek My Idlers YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

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


**Paketatutako bertsioa:** 3.0~ynh1

**Demoa:** <https://demo.myidlers.com/login>

## Pantaila-argazkiak

![My Idlers(r)en pantaila-argazkia](./doc/screenshots/example.jpg)
![My Idlers(r)en pantaila-argazkia](./doc/screenshots/my_idlers.jpg)

## Dokumentazioa eta baliabideak

- Erabiltzaileen dokumentazio ofiziala: <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/cp6/my-idlers#install>
- YunoHost Denda: <https://apps.yunohost.org/app/my_idlers>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
edo
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
