#!/bin/bash

echo "===== NGINX ====="
systemctl status nginx --no-pager

echo ""

echo "===== PHP-FPM ====="
systemctl status php-fpm --no-pager

echo ""

echo "===== MariaDB ====="
systemctl status mariadb --no-pager

echo ""

echo "===== Disk Usage ====="
df -h

echo ""

echo "===== Memory ====="
free -h