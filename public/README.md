<img src="http://ipool.remotewebaccess.com:810/assets/imgs/reeltd-512x512-color.png" align="right" style="height: 64px"/>

# Real Estate Empire LTE (Documentation Server).


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
LTF => Fron End.
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

unzip dev-pack.zip

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
