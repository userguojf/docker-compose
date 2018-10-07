#!/bin/bash

# 运行自启动计划任务进程
/etc/init.d/cron start

# 运行 php-fpm
php-fpm