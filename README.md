# RPie-Simple-WebUI
Simple Web Interface in PHP for RetroPi

### Prerequisites

- Install RetroPie
- Install apache2 and PHP on your Raspberry Pi
  ```bash
  sudo apt update 
  #if you need => sudo apt upgrade
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
  
- Run `cd /var/www/html && sudo chmod 771 setup.sh && sudo ./setup.ch` or `sudo cd /var/www/html && sudo bash setup.sh`. **Don't use** ~~`sudo sh setup.sh`~~. Follow the instructions. (Normally you can run it multiple times).

- In `php.ini` for apache2 (usually in `/etc/php/7.3/apache2/php.ini` for php7.3): 
  - file_uploads = On
  - upload_max_filesize = 500M (indicative value)
  - post_max_size = 500M (indicative value)
  - (OPTIONAL) use `phpinfo();` to see if your changes have been applied
    ```bash
    php -r "phpinfo();" |grep file_uploads
    php -r "phpinfo();" |grep upload_max_filesize
    php -r "phpinfo();" |grep post_max_size    
    ```

### Notes
  - Tested on :
    - Raspberry Pi 3 B+
    - Raspbian lite Buster (stable)
    - Apache2 + PHP7.3 from raspbian repository


Created by [Paul Coral](https://github.com/lepaincestbon/ "Paul Coral's github account")

Pubished under GPL3 License, you are free to change or redistribute (but don't close sources)
  
