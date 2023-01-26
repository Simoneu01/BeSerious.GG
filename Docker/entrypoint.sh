#!/bin/bash

set -e

# Read Last commit hash from .git
# This prevents installing git, and allows display of commit
read -r longhash < /var/www/html/BeSerious.GG/.git/refs/heads/main
shorthash=$(echo $longhash |cut -c1-7)
BeSeriousVersion='1.0.0'
echo '
-------------------------------------
  _               _
 | |   _   _  ___| |__   ___  ___
 | |  | | | |/ __|  _ \ / _ \/ _ \
 | |__| |_| | (__| | | |  __/  __/
 |_____\__, |\___|_| |_|\___|\___|
 | |   |___/ _ __ __ ___   _____| |
 | |   / _'\'' | '\''__/ _'\'' \ \ / / _ \ |
 | |__| (_| | | | (_| |\ V /  __/ |
 |_____\__,_|_|  \__,_| \_/ \___|_|
-------------------------------------
BeSerious.GG Version: '$BeSeriousVersion'
BeSerious.GG Commit:  '$shorthash'
https://github.com/Simoneu01/BeSerious.GG/commit/'$longhash'
-------------------------------------'

if [ -n "$STARTUP_DELAY" ]
	then echo "**** Delaying startup ($STARTUP_DELAY seconds)... ****"
	sleep $STARTUP_DELAY
fi

echo "**** Make sure the /conf folder exist ****"
[ ! -d /conf ]    && mkdir -p /conf

cd /var/www/html/BeSerious.GG


if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]
    echo "**** DATABASE PATH  ****"
    echo $DB_DATABASE
	then if [ -n "$DB_DATABASE" ]
		then if [ ! -e "$DB_DATABASE" ]
			then echo "**** Specified sqlite database doesn't exist. Creating it ****"
			echo "**** Please make sure your database is on a persistent volume ****"
			touch "$DB_DATABASE"
			chown www-data:www-data "$DB_DATABASE"
		fi
		chown www-data:www-data "$DB_DATABASE"
	else DB_DATABASE="/var/www/html/BeSerious.GG/database/database.sqlite"
		export DB_DATABASE
		if [ ! -L database/database.sqlite ]
			then [ ! -e /conf/database.sqlite ] && \
			echo "**** Create the database  ****"
            touch $DB_DATABASE
            chown www-data:www-data $DB_DATABASE

            echo "**** Copy the default database to /conf ****" && \
            cp database/database.sqlite /conf/database.sqlite
            echo "**** Create the symbolic link for the database ****"
            rm database/database.sqlite
            ln -s /conf/database.sqlite database/database.sqlite
            chown -h www-data:www-data /conf /conf/database.sqlite database/database.sqlite
		fi
	fi
fi

echo "**** Copy the .env to /conf ****" && \
[ ! -e /conf/.env ] && \
	sed 's|^#DB_DATABASE=$|DB_DATABASE='$DB_DATABASE'|' /var/www/html/BeSerious.GG/.env.example > /conf/.env
[ ! -L /var/www/html/BeSerious.GG/.env ] && \
	ln -s /conf/.env /var/www/html/BeSerious.GG/.env
echo "**** Inject .env values ****" && \
	/inject.sh

[ ! -e /tmp/first_run ] && \
    echo "**** [DEBUG] List files ****" && \
    ls -la /var/www/html/BeSerious.GG && \
	echo "**** Generate the key (to make sure that cookies cannot be decrypted etc) ****" && \
	php artisan key:generate -n && \
	echo "**** Migrate the database ****" && \
	php artisan migrate --force && \
	touch /tmp/first_run

echo "**** Create user and use PUID/PGID ****"
PUID=${PUID:-1000}
PGID=${PGID:-1000}
if [ ! "$(id -u "$USER")" -eq "$PUID" ]; then usermod -o -u "$PUID" "$USER" ; fi
if [ ! "$(id -g "$USER")" -eq "$PGID" ]; then groupmod -o -g "$PGID" "$USER" ; fi
echo -e " \tUser UID :\t$(id -u "$USER")"
echo -e " \tUser GID :\t$(id -g "$USER")"

echo "**** Make sure Laravel's log exists ****" && \
touch /var/www/html/BeSerious.GG/storage/logs/laravel.log

echo "**** Set Permissions ****" && \
# Set ownership of directories, then files and only when required. See LycheeOrg/Lychee-Docker#120
find /conf/.env \( ! -user "$USER" -o ! -group "$USER" \) -exec chown "$USER":"$USER" \{\} \;
# Laravel needs to be able to chmod user.css for no good reason
find /var/www/html/BeSerious.GG/storage/logs/laravel.log \( ! -user "www-data" -o ! -group "$USER" \) -exec chown www-data:"$USER" \{\} \;
usermod -a -G "$USER" www-data
find /conf/.env /var/www/html/BeSerious.GG/storage/logs/laravel.log \( ! -perm -ug+w -o ! -perm -ugo+rX \) -exec chmod ug+w,ugo+rX \{\} \;

# Update CA Certificates if we're using armv7 because armv7 is weird (#76)
if [[ $(uname -a) == *"armv7"* ]]; then
  echo "**** Updating CA certificates ****"
  update-ca-certificates -f
fi

echo "**** Start cron daemon ****"
service cron start

echo "**** Setup complete, starting the server. ****"
php-fpm8.2
exec $@
