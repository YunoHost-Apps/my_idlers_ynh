<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# My Idlers pour YunoHost

[![Niveau d’intégration](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![Statut du fonctionnement](https://apps.yunohost.org/badge/state/my_idlers)
![Statut de maintenance](https://apps.yunohost.org/badge/maintained/my_idlers)

[![Installer My Idlers avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer My Idlers rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

(machine translate from English) 

Si vous êtes la personne de votre famille, de votre groupe d'amis ou de vos collègues qui gère les serveurs, les noms de domaine, les comptes en ligne et d'autres services hébergés, alors cette application est faite pour vous.

My Idlers est un registre utile pour suivre vos serveurs et vos comptes d'hébergement en ligne.

C'est une application monoposte; si plusieurs personnes veulent utiliser cette fonctionnalité, il faut l'installer plusieurs fois. De plus, pour l'instant, elle nécessite un (sous-)domaine dédié.

Il s'agit de ma première tentative d'emballage d'application; il peut y avoir quelques imperfections.

Ce qui fonctionne :
* installation de l'application et utilisation de ses fonctionnalités
* désinstallation
* sauvegarde
* déplacement de l'application vers un autre domaine

Ce qui ne fonctionne pas (encore) ou n'est pas testé :
* installation de l'application dans un sous-dossier
* intégration LDAP
* restauration à partir d'une sauvegarde
* accès API

    
![Screenshot of My Idlers](./doc/screenshots/my_idlers.jpg)


**Version incluse :** 3.0~ynh1

**Démo :** <https://demo.myidlers.com/login>

## Captures d’écran

![Capture d’écran de My Idlers](./doc/screenshots/example.jpg)
![Capture d’écran de My Idlers](./doc/screenshots/my_idlers.jpg)

## Documentations et ressources

- Documentation officielle utilisateur : <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- Dépôt de code officiel de l’app : <https://github.com/cp6/my-idlers#install>
- YunoHost Store : <https://apps.yunohost.org/app/my_idlers>
- Signaler un bug : <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
ou
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
