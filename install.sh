#!/bin/bash

clear

docker-compose down

echo -e "\033[1mRunning the application launcher...\033[0m"
echo 'Docker running ?'

if ! [ -x "$(command -v docker)" ]; then echo -e '\033[31mError: Please install docker. Choose your platform on https://docs.docker.com/engine/installation ... \033[0m' >&2; sleep 2; echo ' launching ...'; sleep 2; open 'https://docs.docker.com/engine/installation/'; return; fi

echo -e "\033[32mGood Job ! Lets compose. If everything is fine go to http://0.0.0.0:8000 \033[0m"
echo '---------------------------------------------------'
echo 'For the future you can start docker by yourself.'
echo 'run "docker-compose up"'

echo -e "\033[104mGoodbye dear fellow, check out www.zauberware.com\033[0m"

docker-compose up




