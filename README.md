# moodle

Moodle install with Docker compose


# Introduction

This is a simple Docker compose file to install Moodle with MySQL and Apache2.

# Install

1. Clone the repository:

```bash
$ git clone https://github.com/rvarjao/moodle.git
```

2. Run docker-compose installation

```
$ docker-compose build
```

3. Create a moodle connection between Mariadb and Moodle docker
```
$ docker network create moodle-network
```

4. Run the application

```
$ docker-compose up -d
```

5. Access the application

* The application will be available at the following address:

```
http://localhost:8080
```

6. Access the database

* The database will be available at the following address:

```
http://localhost:3306
```

