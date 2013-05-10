#!/usr/bin/env bash

cd "$(dirname "${BASH_SOURCE[0]}" )"

wget -nv -q https://github.com/ezyang/htmlpurifier/archive/master.zip
unzip -q htmlpurifier-master.zip && rm htmlpurifier-master.zip
rm -rf libraries/HTMLPurifier
mv htmlpurifier-master/library libraries/HTMLPurifier
rm -rf htmlpurifier-master
