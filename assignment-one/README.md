assignment-one
==============

First Assignment - PHP MySQL

Read
---

#### Github

1. https://help.github.com/

2. https://guides.github.com/activities/hello-world/


Implement
---

### Prerequisite
- Clone of your github repo `asssignemt-one` within `/var/www/`

## Part One

1. A HTML Form with Firstname, Lastname Age, Phone with name `index.php`
2. Implement a file `array_list.php` with an array `$friends` that is an assosiative array with keys `names, age, phone`
3. Loop over the array in `index.php` requiring `array_list.php` at the top of the document.
4. Use a table preferably for html formatting.

## Part Two

- Using the `Database.php` class

1. Create a file `db_list.php`
2. Require `Database.php` at the top of the document
3. Instantiate an object of the class assign the object the variable `$db`.
4. Then select all from friends from `akirachix` table as assign the retrieved array the variable `$friends`
5. Within the body of the HTML doc in `db_list.php` loop over `$friends` displaying `names, phone and age`
6. Push this code to github. It's assignment one.
