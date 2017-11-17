# STEMP - Wordpress

## INSTALL

### Fast way

Install and start Docker https://docs.docker.com/engine/installation/

bash```

$ git clone git@bitbucket.org:zauberware/docker-wordpress-mysql-phpmyadmin.git

$ mv docker-wordpress-mysql-phpmyadmin wordpress-on-docker cd wordpress-on-docker

$ source install.sh
```
or run 

```
$ docker-compose up
```

### 1. Install Docker

Please install Docker: https://docs.docker.com/engine/installation/

Make sure that your current development workplace folder is available for mounting. Check this in your Docker Settings.

### 2. Clone repository

Clone the repository from Bitbucket and go into the project folder.

```
$ git clone git@bitbucket.org:zauberware/stemp.git && cd stemp
```

Like you see there is only the wp-content folder of wordpress and few Docker files. So we use Docker to run our website for development and we are linking the wp-content folder to the wp-content folder on the Docker instance.

### 3. Install Docker & project setup

1. Start docker in the application
2. run 'docker-compose up'
3. wait for installation and check your running containers with `docker ps`. You should see wordpress, mysql and phpadmin as a container.

Page available: http://0.0.0.0:8000/
PHPMyAdmin available: http://0.0.0.0:8080/

Shut down your containers with
```
$ docker-compose down
```

## Helpful commands

As a developer we like to destroy our environment. Here are some helpful docker commands:

Running in detached mode
```
$ docker-compose up -d
```

All your images
```
$ docker images
```

Remove a image
```
$ docker rmi {id}
```

## Authors

* Simon Franzen (zauberware technologies)
* Lisa Schmitz (zauberware technologies)
