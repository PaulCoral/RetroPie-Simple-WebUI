# RPie-Simple-WebUI
Simple Web Interface in PHP for RetroPi

### Prerequisites

- Install apache2 and PHP on your Raspberry Pi
  ```bash
  sudo apt update 
  #if you need => sudo apt upgrade
  sudo apt install apache2 php
  ```
### Install 

Copy the *content* of this repository to `/var/www/html`
There are two solutions :
  - Clone this repository in `html`
    ```bash
    cd /var/www/html
    pwd # Verify that you are in the good directory
    git clone https://github.com/lepaincestbon/RPie-Simple-WebUI.git . # Don't forget the point at the end !!!
    ```
  - Download from github and unzip in `/var/www/html` (becare full to take files out of directory `RPIe-Simple-WebUI`)
