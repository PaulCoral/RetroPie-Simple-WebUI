#!/bin/bash

PATH_TO_RPIE_MANAGE='/var/www/html'
RETRO_USER='pi'
APACHE_USER='www-data'
NEW_GROUP='rpie_manage'

#going to the right directory
echo "Entering directory $PATH_TO_RPIE_MANAGE"
cd $PATH_TO_RPIE_MANAGE

#create a groupe for $RETRO_USER and $APACHE_USER
echo "Creating gourp : $NEW_GROUP"
sudo groupadd $NEW_GROUP

#add apache and RETRO_USER to the group
echo "Adding $RETRO_USER and $APACHE_USER to group $NEW_GROUP"
sudo usermod -a -G $NEW_GROUP $RETRO_USER
sudo usermod -a -G $NEW_GROUP $APACHE_USER

#change privileges
echo "Changing groupe and privileges of some directories"

echo " - ($PATH_TO_RPIE_MANAGE) ."
sudo chgrp $NEW_GROUP .
sudo chmod 755 . 

echo " - Variables"
sudo chgrp $NEW_GROUP Variables -R
sudo chmod 775 Variables -R


