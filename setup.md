Install Apache MySQL
---

```bash

sudo apt-get update

```

Install Apache

```bash

sudo apt-get install apache2

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

Check if stuff is running
---

```bash

service apache2 status

service mysql status
```

Check Version of things
---

```bash

php -v (5.4+)

git --version

```

Upgrade php
---

```bash

sudo apt-get update &&

sudo apt-get install python-software-properties &&

sudo add-apt-repository ppa:ondrej/php5 &&

sudo apt-get update &&

sudo apt-get dist-upgrade

```
