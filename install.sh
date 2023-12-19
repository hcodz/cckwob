#!/bin/php
curl -o /data/data/com.termux/files/usr/bin/kktool https://github.com/hcodz/cckwob/raw/main/kk
chmod +x /data/data/com.termux/files/usr/bin/kktool
echo
echo
echo
echo




# Kiểm tra và cài đặt PHP nếu chưa có
if ! php -v > /dev/null 2>&1; then
    pkg install php
fi

# Cấu hình bộ nhớ lưu trữ và cập nhật hệ thống
termux-setup-storage
apt update && apt upgrade

pkg install git
pkg install wget

# Kiểm tra và cài đặt MariaDB nếu chưa có
if ! pkg list-installed | grep -q mariadb; then
    pkg install mariadb
fi
# Cài đặt và cấu hình các kho lưu trữ và gói cần thiết
pkg i php
pkg i tur-repo
pkg i dichvucoder-repo
pkg i php-dichvucoder php-dgbaopro
pkg rem tur-repo
echo "\033[92m Đã cài công cụ thành công! nhập kktool để sử dụng."