#!/usr/bin/env bash

# Update Package List

apt-get update

apt-get upgrade -y

# Install Some PPAs

apt-get install -y software-properties-common
apt-add-repository ppa:ondrej/apache2 -y
apt-add-repository ppa:ondrej/php5-5.6 -y

# Update Package Lists

apt-get update

# Install Some Basic Packages

apt-get install -y build-essential curl dos2unix gcc git libmcrypt4 libpcre3-dev \
make python2.7-dev python-pip re2c supervisor unattended-upgrades whois vim

# Set My Timezone

ln -sf /usr/share/zoneinfo/Nairobi /etc/localtime

# Install PHP Stuffs

apt-get install -y php5-cli php5-dev php-pear \
php5-mysqlnd php5-pgsql php5-sqlite \
php5-apcu php5-json php5-curl php5-gd \
php5-gmp php5-imap php5-mcrypt php5-xdebug \
php5-memcached php5-redis

# Make MCrypt Available

ln -s /etc/php5/conf.d/mcrypt.ini /etc/php5/mods-available
sudo php5enmod mcrypt

# Install Mailparse PECL Extension

pecl install mailparse
echo "extension=mailparse.so" > /etc/php5/mods-available/mailparse.ini
ln -s /etc/php5/mods-available/mailparse.ini /etc/php5/cli/conf.d/20-mailparse.ini


# Set Some PHP CLI Settings

sudo sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php5/cli/php.ini
sudo sed -i "s/display_errors = .*/display_errors = On/" /etc/php5/cli/php.ini
sudo sed -i "s/memory_limit = .*/memory_limit = 512M/" /etc/php5/cli/php.ini
sudo sed -i "s/;date.timezone.*/date.timezone = Nairobi/" /etc/php5/cli/php.ini

# Write Bash Aliases

touch /home/akirachix/.bash_aliases
