# Project Structure

Description of the project structure :

- **AddGame (dir)** : everyfile related to the process of adding a game
  - addGame.php : the form to had a game to RetroPie
  - addGame_upload.php : the script that will add the game to RetroPie (based on informations from addGame.php)
- **Basics (dir)** : basic functions and template, useful for most pages
  - basic_form_check.php : some function that performs checks on HTML form
  - basic_template.php : empty page template
  - basics.php : Basic functions used in most pages
  - print_error.php : enable error printing, but it is better to modify your php.ini to see everything
- **Configure (dir)** : some process to configure the Web App and Retro Pie
  - configure.php : configuration menu that redirect to other config pages
  - set_rpie_folder.php : HTML form to change RetroPie folder
  - set_rpie_folder_process.php : performs RetroPie folder change, but performs no internal privileges changes on server side
- LICENSE : the GPL3 lincense
- README.md : the readme, containing a description and things to get started
- home_warning.php : some warning message that will be display on index.php (pr others)
- index.php : the homepage
- setup.sh : setup privileges, groups, directories, files, ... to get started.
