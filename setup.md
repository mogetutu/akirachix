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

Configure Apache + PhpMyAdmin
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

Forgot MySQL Password

[Follow the instructions on this link](https://help.ubuntu.com/community/MysqlPasswordReset)


To reset your mysqld password just follow these instructions :

Stop the mysql demon process using this command :
```
  sudo service mysql stop
```
Start the mysqld demon process using the --skip-grant-tables option with this command

```
   sudo /usr/sbin/mysqld --skip-grant-tables --skip-networking &
```
Because you are not checking user privs at this point, it's safest to disable networking. In Dapper, /usr/bin/mysqld... did not work. However, mysqld --skip-grant-tables did.

start the mysql client process using this command

```
  mysql -u root
```

from the mysql prompt execute this command to be able to change any password

```
  FLUSH PRIVILEGES;
```

Then reset/update your password

```
   SET PASSWORD FOR root@'localhost' = PASSWORD('akirachix');
```

Once have received a message indicating a successful query (one or more rows affected), flush privileges:
```
  FLUSH PRIVILEGES;
```

Then stop the mysqld process and relaunch it with the classical way:

```
sudo service mysql start
```
