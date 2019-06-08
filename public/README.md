<img src="http://ipool.remotewebaccess.com:810/assets/imgs/reeltd-512x512-color.png" align="right" style="max-width: 64px; height: 64px"/>

# Real Estate ~~Empire~~ Engine LTE (Documentation Server).


```cmd

██████╗ ███████╗███████╗██╗  ████████╗██████╗ 
██╔══██╗██╔════╝██╔════╝██║  ╚══██╔══╝██╔══██╗
██████╔╝█████╗  █████╗  ██║     ██║   ██║  ██║
██╔══██╗██╔══╝  ██╔══╝  ██║     ██║   ██║  ██║
██║  ██║███████╗███████╗███████╗██║   ██████╔╝
╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝╚═╝   ╚═════╝

LTE, LTF, LTG...LTZ

```

```cmd

__const__

LTD => TOP_LEVEL + Documentation.
LTE => Administrator Control Panal.
LTF => Fron End Interface.
LTG => All About GitHub.
.
.
.
LTZ => Packages archive & library. e.g. reexx-v0.0.3.tar.gz 
      Where xx: {
            js => node
            py => Python
            rb => Ruby
            pl => Perl
            sh => Bash
        }

```

## Social Media Accounts
    
### Real Estate ~~Empire~~ Engine (REE)

    Staging & Development Server
    http://ipool.remotewebaccess.com:810/
    
    Production Server
    http://ipool.remotewebaccess.com:820/
    
    
#### ReeLTD Social Media Accounts
    
Snap

    https://www.snapchat.com/add/reeltd
    email: reeltd@ipool.remotewebaccess.com
    un: reeltd
    pass: *******
    
Twitter

    https://twitter.com/reeltd1
    email: reeltd@ipool.remotewebaccess.com
    un: reeltd1
    pass: *******
    
Insta

    https://instagram.com/reeltd0
    email: reeltd0@ipool.remotewebaccess.com
    un: reeltd0
    pass: *******
    
Facebook

    https://www.facebook.com/reeltd
    email: reeltd@ipool.remotewebaccess.com
    un: reeltd1
    pass: *******
    phone: 0562204816
    
WhatsApp

    https://api.whatsapp.com/send?phone=966563375158
    +966563375158
    
Telegram

    https://t.me/reeltd
    
GitHub

    https://github.com/reeltd/reeltd.git
    email: reeltd@ipool.remotewebaccess.com
    un: reeltd
    pass: *******



## Sync & Merge Dev + Prod DB

### login to mysql in prod side:

```bash

root@0x01:/var/www/html/reeltd# mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 79
Server version: 10.3.15-MariaDB-1 Debian 10

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use reeltd0;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
MariaDB [reeltd0]> select * from migrations;
+----+------------------------------------------------+-------+
| id | migration                                      | batch |
+----+------------------------------------------------+-------+
|  2 | 2014_10_12_100000_create_password_resets_table |     1 |
|  3 | 2019_06_04_003256_create_ads_table             |     2 |
|  5 | 2014_10_12_000000_create_users_table           |     3 |
+----+------------------------------------------------+-------+
3 rows in set (0.000 sec)

MariaDB [reeltd0]> delete from migrations where id=5;
Query OK, 1 row affected (0.049 sec)

MariaDB [reeltd0]> drop table users;
Query OK, 0 rows affected (0.225 sec)

MariaDB [(none)]> quit;
Bye

```

After dropping table and deleted old migration, you can ```./artisan migrate```

```bash

root@0x01:/var/www/html/reeltd# ./artisan migrate
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table

```

## Sync & Merge Dev + Prod

## repetitive tasks

### Dev commands PACK & PUSH edits and changes

```cmd

cd /mnt/c/inetpub/wwwroot/dev/reeltd

zip -r dev-pack.zip .env vendor/ node_modules/ public/ree/ public/inc/ public/assets/  public/assets/ public/ree /public/inc public/doc public/cmd

git push

sftp> cd /var/www/html/reeltd
sftp> put dev-pack.zip

```

### Prod commands UNPACK & PULL edits and changes

```cmd

cd /var/www/html/reeltd

unzip -n dev-pack.zip

git pull

```

-------------------

## Git

### Remove your uncommitted changes

#### Tracked files

```cmd

git checkout -f

```

#### Untracked files

```cmd

git clean -fd

```

### Save your changes for later

#### Tracked files

```cmd

git stash

```

#### Tracked files and untracked files

```cmd

git stash -u

```

#### Reapply your latest stash after git pull:

```cmd

git stash pop

```

### Exec commands

```bash

root@0x01:/var/www/html/reeltd# git checkout -f
Your branch is up to date with 'origin/master'.
root@0x01:/var/www/html/reeltd# git status
On branch master
Your branch is up to date with 'origin/master'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        app/Http/Controllers/GlobalController.php
        app/Http/Controllers/ProfileController.php
        app/Http/Controllers/ReeLTDController.php
        app/Http/Models/
        dump.txt
        public/inc/
        public/ree/
        resources/views/global/
        resources/views/layouts/admin.blade.php
        resources/views/layouts/global.blade.php
        resources/views/layouts/lock.blade.php
        resources/views/layouts/ree.blade.php
        resources/views/profile/
        resources/views/reeltd/

nothing added to commit but untracked files present (use "git add" to track)
root@0x01:/var/www/html/reeltd# git clean -fd
Removing app/Http/Controllers/GlobalController.php
Removing app/Http/Controllers/ProfileController.php
Removing app/Http/Controllers/ReeLTDController.php
Removing app/Http/Models/
Removing dump.txt
Removing public/inc/
Removing public/ree/
Removing resources/views/global/
Removing resources/views/layouts/admin.blade.php
Removing resources/views/layouts/global.blade.php
Removing resources/views/layouts/lock.blade.php
Removing resources/views/layouts/ree.blade.php
Removing resources/views/profile/
Removing resources/views/reeltd/
root@0x01:/var/www/html/reeltd#

```

## Generate docs after updating ``` public/README.md```  file

```bash

phsycho@x000001:/mnt/c/inetpub/wwwroot/dev/reeltd$ cd public/
phsycho@x000001:/mnt/c/inetpub/wwwroot/dev/reeltd/public$ yard
Files:           0
Modules:         0 (    0 undocumented)
Classes:         0 (    0 undocumented)
Constants:       0 (    0 undocumented)
Attributes:      0 (    0 undocumented)
Methods:         0 (    0 undocumented)
 100.00% documented
 
```

