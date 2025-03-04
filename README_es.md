<!--
Este archivo README esta generado automaticamente<https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
No se debe editar a mano.
-->

# My Idlers para Yunohost

[![Nivel de integración](https://apps.yunohost.org/badge/integration/my_idlers)](https://ci-apps.yunohost.org/ci/apps/my_idlers/)
![Estado funcional](https://apps.yunohost.org/badge/state/my_idlers)
![Estado En Mantención](https://apps.yunohost.org/badge/maintained/my_idlers)

[![Instalar My Idlers con Yunhost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=my_idlers)

*[Leer este README en otros idiomas.](./ALL_README.md)*

> *Este paquete le permite instalarMy Idlers rapidamente y simplement en un servidor YunoHost.*  
> *Si no tiene YunoHost, visita [the guide](https://yunohost.org/install) para aprender como instalarla.*

## Descripción general

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


**Versión actual:** 3.0~ynh1

**Demo:** <https://demo.myidlers.com/login>

## Capturas

![Captura de My Idlers](./doc/screenshots/example.jpg)
![Captura de My Idlers](./doc/screenshots/my_idlers.jpg)

## Documentaciones y recursos

- Documentación usuario oficial: <https://lowendspirit.com/discussion/2449/my-idlers-self-hosted-web-app-for-your-servers-shared-hosting-and-domains-information/>
- Repositorio del código fuente oficial de la aplicación : <https://github.com/cp6/my-idlers#install>
- Catálogo YunoHost: <https://apps.yunohost.org/app/my_idlers>
- Reportar un error: <https://github.com/YunoHost-Apps/my_idlers_ynh/issues>

## Información para desarrolladores

Por favor enviar sus correcciones a la [rama `testing`](https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing).

Para probar la rama `testing`, sigue asÍ:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
o
sudo yunohost app upgrade my_idlers -u https://github.com/YunoHost-Apps/my_idlers_ynh/tree/testing --debug
```

**Mas informaciones sobre el empaquetado de aplicaciones:** <https://yunohost.org/packaging_apps>
