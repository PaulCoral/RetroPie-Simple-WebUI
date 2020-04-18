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

- Copy the *content* of this repository to `/var/www/html`
  There are two solutions :
  - Clone this repository, here are the instructions for `https` (it works also with `ssh`)
    ```bash
    cd /var/www/html
    pwd # Verify that you are in the good directory
    git clone https://github.com/lepaincestbon/RPie-Simple-WebUI.git . # Don't forget the "." (dot) at the end !!!
    ```
  - Download from github and unzip in `/var/www/html` (becare full to take files out of directory `RPIe-Simple-WebUI`)
  
- Run `sudo bash setup.sh` or `sudo sh setup.sh`. Follow the instructions. (Normally you can run it multiple times).


Created by [Paul Coral](https://github.com/lepaincestbon/ "Paul Coral's github account")

Pubished under GPL3 License, you are free to change or redistribute (but don't close sources)
  
