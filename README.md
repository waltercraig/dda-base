# DDA Wordpress Baseplate
The Domain Design Wordpress website baseplate.

[Domain Design](https://www.domaindesignagency.com/)

### Features 
- Plugin Recommendations 
- Page Generation, Terms, Cookies, Kitchen Sink
- [Bootstrap 4.4](https://getbootstrap.com/) integration 

## Initial Wordpress Setup
- Change the wordpress database prefix [info](https://www.wpbeginner.com/wp-tutorials/how-to-change-the-wordpress-database-prefix-to-improve-security/)
- Don't use "admin" for the default user account – use "ddaadmin" instead
- A domain design employee's email address or dda dev address must be used when setting up wordpress
- Create and select a nickname ( i.e Domain Design ) for the main ddaadmin wp account
- Enable “Discourage search engines from indexing this site.“ in Settings > Reading or during setup

## Local Dev Setup
*Local Mac setup*
Navigate to your working folder and Download The latest version of Wordpress 
```
cd your-working-folder

cul -O https:wordpress.org/latest.zip
```
Unzip
```
Unzip latest.zip 
```
Rename Folder 
```
mv wordpress new-folder-name
```
Install theme
```
cd new-folder-name/wp-content/themes

git clone https://github.com/DomainDesignAgency/dda-base.git

cd dda-base
```

Create a Local server environment with [MAMP](https://www.mamp.info/en/) for example and install Wordpress 

Once Theme is activated please install recommended plugins. If any plugin is out of date and can't be updated via the dashboard please contact DDA to send latest version. 


