#!/usr/bin/env bash
case "$1" in
    lamp)
    	 cd ~

    	 echo -e "Welcome to DevScript"

    	 sleep 2

    	 echo -e "Please do not interupt the installation process"

    	 sleep 1

    	 echo -e "Setting Up Packages "

    	 sleep 1
    	 
	 sudo apt-get update
	 sudo apt-get upgrade -y

    	 sudo apt-get install -y software-properties-common
	 sudo apt-add-repository ppa:ondrej/apache2 -y
	 sudo apt-add-repository ppa:ondrej/php5-5.6 -y



    	 echo -e "Installing Some Basic Packages"

    	 sleep 1

    	 sudo apt-get install -y build-essential curl dos2unix gcc git libmcrypt4 libpcre3-dev


    	 echo -e "Update is starting now"
    	 sleep 1

    	 sudo apt-get update

    	 echo -e "Upgrading all Packages"
    	 sleep 1

    	 sudo apt-get upgrade


    	 echo -e "Installing PHPspecific packages, Composer, MySQL and Git"
    	 sleep 1

    	 sudo apt-get install -y php5-cli php5-dev php-pear \
	 php5-mysqlnd php5-pgsql php5-sqlite \
	 php5-apcu php5-json php5-curl php5-gd \
	 php5-gmp php5-imap php5-mcrypt php5-xdebug \
	 php5-memcached php5-redis
	 
	 echo -e "Making Mcrypt Available"
	 sleep 1
	 
	 ln -s /etc/php5/conf.d/mcrypt.ini /etc/php5/mods-available
	 sudo php5enmod mcrypt
	 
	 echo -e "Installing Mailperse PECL Extension"
	 sleep 1
	 
	 sudo pecl install mailparse
	 echo "extension=mailparse.so" > /etc/php5/mods-available/mailparse.ini
	 ln -s /etc/php5/mods-available/mailparse.ini /etc/php5/cli/conf.d/20-mailparse.ini
	 
	 echo -e "Setup PHP CLI Settings"
	 sleep 1
	 
	 sudo sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php5/cli/php.ini
	 sudo sed -i "s/display_errors = .*/display_errors = On/" /etc/php5/cli/php.ini
	 sudo sed -i "s/memory_limit = .*/memory_limit = 512M/" /etc/php5/cli/php.ini
	 sudo sed -i "s/;date.timezone.*/date.timezone = Nairobi/" /etc/php5/cli/php.ini
	 

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
