# RPie-Simple-WebUI
Simple Web Interface in PHP for RetroPie

### Prerequisites

- Install RetroPie
- Install apache2 and PHP on your Raspberry Pi
  ```bash
  sudo apt update 
  sudo apt install apache2 php
  ```
### Install 

- Copy the *content* of this repository to `/var/www/html`
  There are two solutions :
  - Clone this repository, here are the instructions for `https` (it works also with `ssh`)
    ```bash
    cd /var/www/html
    pwd # Verify that you are in the good directory
    git clone https://github.com/lepaincestbon/RPie-Simple-WebUI.git . # Don't forget the "." (dot) at the end !!!
    ```
  - Download from github and unzip in `/var/www/html` (becare full to take files out of directory `RPIe-Simple-WebUI`)
  
- Run `cd /var/www/html && sudo chmod 771 setup.sh && sudo ./setup.sh` or `sudo cd /var/www/html && sudo bash setup.sh`. **Don't use** ~~`sudo sh setup.sh`~~. Follow the instructions. (Normally you can run it multiple times).

- In `php.ini` for apache2 (usually in `/etc/php/7.3/apache2/php.ini` for php7.3): 
  - file_uploads = On
  - upload_max_filesize = 500M (indicative value)
  - post_max_size = 500M (indicative value)
  - (OPTIONAL) use the PHP function `phpinfo();` to see if your changes have been applied

### Notes
  - Tested on :
    - Raspberry Pi 3 B+
    - Raspbian lite Buster (stable)
    - Apache2 + PHP7.3 from raspbian repository

### License
Pubished under GPL3 License

Created by [Paul Coral](https://github.com/PaulCoral/)

  
