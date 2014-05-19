Install Apache and MySQL
---

Install Apache

```bash
sudo apt-get update && sudo apt-get install apache2
```

Install MySQL

```bash
sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql
```

Finish up install MySQL setup

```bash
sudo /usr/bin/mysql_secure_installation
```

The prompt will ask you for your current root password. 

Type it in.

```bash
Enter current password for root (enter for none): 
OK, successfully used password, moving on...
```

Install PHP

```bash
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
```

Check if apache and mysql is running
---

```bash
service apache2 status

service mysql status
```

Check Version of php and git
---

```bash
php -v

git --version
```

Upgrade php if php -v < 5.4
---

```bash
sudo apt-get update

sudo apt-get install python-software-properties

sudo add-apt-repository ppa:ondrej/php5

sudo apt-get update && sudo apt-get dist-upgrade
```

Are you php files being downloaded?
---

```bash
sudo apt-get install libapache2-mod-php5
```

Install Phpmyadmin
---
```bash
sudo apt-get update && sudo apt-get install phpmyadmin
```

Configure Phpmyadmin
---
```bash
sudo subl /etc/apache2/apache2.conf
```

After the installation has completed, add phpmyadmin to the apache configuration.

```
sudo subl /etc/apache2/apache2.conf
```

Add the phpmyadmin config to the file.

```
Include /etc/phpmyadmin/apache.conf
```

Restart apache:
```bash
sudo service apache2 restart
```
