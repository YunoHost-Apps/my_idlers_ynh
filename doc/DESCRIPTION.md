My Idlers is a useful register for keeping track of your servers and online hosting accounts. 
It is a single-user app; if more than one person wants to use this functionality, it needs to be installed multiple times. 
Besides that, for now, it needs a (sub)domain for itself. 

This is my first app packaging attempt; there may be some rough edges. 

What works: 
* installing the app and using its features
* uninstalling 

What does not (yet?) work:
* no backup
* no explicit fail2ban config
* moving the app to another domain
* installing the app in subfolder
* LDAP integration

What I intend to work on enabling: 
* YNH backup integration
* create your account from this install page, instead of manually in the app on first use. Once that is done, I will change the default group from "all_users" to "visitors"
* moving app to another domain 
* installing to subdirectory
* see whether fail2ban needs a specific config, add if needed



![Screenshot of My Idlers](./doc/screenshots/my_idlers.jpg)
