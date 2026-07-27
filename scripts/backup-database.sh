#!/bin/bash

DATE=$(date +%F)

mysqldump -u root -p employee_db > employee_db_$DATE.sql