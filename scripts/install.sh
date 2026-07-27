#!/bin/bash

sudo dnf update -y

sudo dnf install nginx php php-fpm mariadb105-server git unzip -y

sudo systemctl enable nginx
sudo systemctl enable php-fpm
sudo systemctl enable mariadb

sudo systemctl start nginx
sudo systemctl start php-fpm
sudo systemctl start mariadb