#!/bin/bash
mv /codeigniter4 /var/www/html
chmod -R 777 /var/www/html
/usr/sbin/apache2ctl -D FOREGROUND