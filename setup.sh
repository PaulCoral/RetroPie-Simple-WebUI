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
sudo chgrp $NEW_GROUP . -R
sudo chmod 775 . -R

#echo " - Variables"
#sudo chgrp $NEW_GROUP Variables -R
#sudo chmod 775 Variables -R



################################
#####     Server Setup     #####
################################
echo "#######################"
echo "Starting : Server SETUP"

path_is_ok=false
RPIE_PATH_FILE_DIRECTORY='Variables'
RPIE_PATH_FILE=$RPIE_PATH_FILE_DIRECTORY'/RPIE_FOLDER_PATH.php'
RPIE_PATH=''

echo "creating $RPIE_PATH_FILE"
mkdir $RPIE_PATH_FILE_DIRECTORY

while [ $path_is_ok = false ]
do

	while [ ! -d "$RPIE_PATH" ]
	do
		echo "Enter RetroPie directory path WITHOUT / : "
    	read -e -p "Path : " RPIE_PATH
		if [ ! -d "$RPIE_PATH" ]
		then
			echo "NOT A VALID DIRECTORY"
		fi
	done

    echo "Is this the right path : $RPIE_PATH (y/[n])"
    read response
    if [ $response = 'y' ]
	then
		path_is_ok=true
		touch $RPIE_PATH_FILE
		> $RPIE_PATH_FILE
		printf $RPIE_PATH >> $RPIE_PATH_FILE
	fi
done

# Change privileges
echo "Done, ajusting privileges"
sudo chown $APACHE_USER $RPIE_PATH_FILE
sudo chgrp $NEW_GROUP $RPIE_PATH_FILE
sudo chmod 775 $RPIE_PATH_FILE

# setting up roms directory privileges
RPIE_ROMS_PATH=$RPIE_PATH"/roms"
echo "setting privilege in "$RPIE_ROMS_PATH
sudo chgrp $NEW_GROUP $RPIE_ROMS_PATH -R
sudo chmod 775 $RPIE_ROMS_PATH -R


################################
#			End
################################

LIGHT_CYAN='\033[1;36m'
END_COLOR='\033[0m'

echo ""
echo "Finished, have fun :D"
echo ""
echo -e "Created by ${LIGHT_CYAN} Paul Coral ${END_COLOR}"
echo "Pubished under GPL3 License, you are free to change or redistribute (but don't close sources)"
echo ""
echo ""
echo "You'll need to reboot. Do you want to do it now ? (y/[n])"

##############
### Reboot ###
##############

reboot_now=false
read reboot_now
if [ $reboot_now = 'y' ]
then
	echo "RetroPie will reboot in 3 seconds."
	echo ""
	printf "1 "
	sleep 1
	printf "2 "
	sleep 1
	printf "3 "
	sleep 1
	echo "REBOOTING!!!"
	sudo reboot
fi
