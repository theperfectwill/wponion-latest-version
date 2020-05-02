#!/bin/sh
set -eu

echo "##[group] Removing Old Source"
rm -rf stable/ 
rm -rf development/
echo "##[endgroup]"

echo "##[group] WPOnion Stable Clone"
git clone https://github.com/wponion/wponion stable
echo "##[endgroup]"

echo "##[group] Installing Required Libs"
cd stable && ls -lah && composer install --no-dev && cd ../
echo "##[endgroup]"

echo " "
echo " "

echo "##[group] WPOnion Development Clone"
git clone --brach development https://github.com/wponion/wponion development
echo "##[endgroup]"

echo "##[group] Installing Required Libs"
cd development && ls -lah && composer install --no-dev && cd ../
echo "##[endgroup]"
