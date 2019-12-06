![](https://github.com/BuildPC/Frontend/workflows/Laravel_Tests/badge.svg)
![](https://github.com/BuildPC/Frontend/workflows/DigitalOcean_Deploy_rsync/badge.svg)

# Frontend
Web based fronted related code for BuildPC project.  
All the code in the `master` branch is deployed to the DigitalOcean server after confirming the code works. You may access to the deployed site from this [link](https://test.buildpc.software).  

***please do not push non-working code to the `master` branch!***

## Steps to create a working environment!

1. download and install php7.4.0 from this [link](https://windows.php.net/downloads/releases/php-7.4.0-Win32-vc15-x64.zip). ***Note, please copy all the files to `C:\php` for an easy installation***.
2. cd into `C:\php` and in php.ini file enable extension=fileinfo, extension=openssl, extension=pdo_mysql, extension=pdo_sqlite by removing the comma(`;`) at the beginning of the respective lines.
3. add `C:\php` and all of its sub-directories to `Environmental Variables` of the user or system.
4. download and install composer from this [link](https://getcomposer.org/Composer-Setup.exe).
5. download and install nodejs 13.3.0 from this [link](https://nodejs.org/dist/v13.3.0/node-v13.3.0-x64.msi).
6. clone the repo (duh!) and cd into the folder.
7. run "npm install" to have webpack mix
8. make sure "npm run dev" successfully runs.
9. enjoy the laravel.
10. Changes made can be direcly pushed to the repo! (Make sure you push into a branch rather than the master.)  

*If you have any questions please feel free to open an issue ask there!*
