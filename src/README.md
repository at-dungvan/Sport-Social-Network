# Install Enviroment:
### Install virtualbox:
  https://www.virtualbox.org/wiki/Downloads
### Install vagrant:
  https://www.vagrantup.com/downloads.html
### Setup:
#### Clone repo:
```bash
  $ git clone https://github.com/dungvan2512/Sport-Social-Network
```
```bash
  $ cd Sport-Social-Network/src
```
#### Setup project and emvironment:
```bash
  $ composer install
  $ php artisan key:generate
  $ php artisan migrate:refresh
  $ php vendor/bin/homestead make
```
- Apply your enviroment <a href="https://laravel.com/docs/5.5/homestead#configuring-homestead">setup</a> in Homestead.yaml file
- Install environment:
```bash
  $ vagrant up --provision
```
- All setup done!
