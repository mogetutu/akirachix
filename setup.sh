#! /bin/bash
case "$1" in
    lamp)
    	 cd ~

    	 echo -e "Welcome to DevScript"

    	 sleep 2

    	 echo -e "Please do not interupt the installation process"

    	 sleep 1

    	 echo -e "LAMP installation commencing now "

    	 sleep 1

    	 sudo apt-get install lampserver^



    	 echo -e "Installing Curl"

    	 sleep 1

    	 sudo apt-get install curl git


    	  "Update is starting now"
    	 sleep 1

    	 sudo apt-get update

    	 echo -e "Upgrading all Packages"
    	 sleep 1

    	 sudo apt-get upgrade


    	 echo -e "Installing PHPspecific packages, Composer, MySQL and Git"
    	 sleep 1

    	 sudo apt-get install y php5 apache2 libapache2modphp5 php5curl php5dev php5gd php5mcrypt mysqlserver5.5 php5mysql php5json php5dev gitcore phppear

    	 sudo curl sS https://getcomposer.org/installer | php
    	 sudo mv composer.phar /usr/local/bin/composer


    	 echo -e "Commencing Apache Restart"
    	 sleep 1

    	 sudo service apache2 restart

    	 echo -e "Creating Test File"
    	 sleep 1

    	 sudo curl -o /var/www/html/index.html 'https://nsnihalsahu.github.io/devscript/welcome.html'
    	 echo -e "LAMP has been setup, just type 'localhost' in the browser"
    ;;
    
    laravel)
     echo -e "Commencing Laravel Installer Setup"
	 curl http://laravel.com/laravel.phar -o laravel.phar && chmod +x laravel.phar && mv laravel.phar /usr/local/bin/laravel
	 echo -e "To Set up A laravel App, Go to Any Directory and type 'laravel new <appname>' "
    ;;
    
    help)
		echo -e "DevScript is a tool which allows you to setup Almost any Type "
		echo -e "of Development Environment with one command"
		echo -e "Syntax : devscripts <app>"
		echo -e "Commands"
		echo -e "devscript lamp - Sets up a LAMP stack"
		echo -e "devscript laravel - Sets up Laravel installer" 
	;;
	*)
	   	echo -e "DevScript is a tool which allows you to setup Almost any Type "
		echo -e "of Development Environment with one command"
		echo -e "Syntax : devscripts <app>"
		echo -e "Commands"
		echo -e "devscript lamp - Sets up a LAMP stack"
		echo -e "devscript laravel - Sets up Laravel installer" 
    ;;
esac
