<p align="center"><a href="https://bluewindowltd.com/" target="_blank"><img src="https://bluewindowltd.com/wp-content/uploads/2021/07/logo-BW-small.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/TheGodFather05/brand_list"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table Of Content

- [About](#about-this-project)
- [Implementation](#the-implementation)
- [Structure](#project-structure)

## About This Project

According to a position i applied for as a fulstack php developer at blue window ltd, i was required to complete this project as a test

### Here is the test statement:

PHP Fullstack Developer Technical Test
Task Description:
Create a CRUD application to manage a top list of brands. The application should include both backend and
frontend components, with a focus on mobile-friendly design and geolocation-based list configuration.
You can find a top list on this website : https://www.casinoonlinefrancais.info/

## The Implementation

To get this done, i created a laravel project for the backend where i'll implement a REST API that will be later consumed by an html css js application i created
The whole is dockerized and well managed to be run easily

## Project Structure

- brand_list/
    - backend/
        - app/
        - bootstrap/
        - config/
        - database/
        - public/
        - resources/
        - routes/
        - storage/
        - tests/
        - vendor/
        - .env.example
        - artisan
        - composer.json
        - composer.lock
        - Dockerfile
        - phpunit.xml
        - run.sh
        - server.php
        - webpack.mix.js
    - frontend/
        - assets/
        - public/
        - src/
        - Dockerfile
        - index.html
        - package.json
        - webpack.config.js
    - docker-compose.yml
    - README.md

## Setup Instructions

#### *** Make shure you have a running docker instance *** 

Clone the project ```git clone https://github.com/TheGodFather05/brand_list.git``` 

Go to the project directory ```cd brand_list```

Go to backend, copy .env.example file to .env
```cp backend/.env.example backend/.env```

Configure the ./backend/.env file as it is suitable for you
### Running the application

Run the following command to start the application: ```docker-compose up -d --build```

Open your browser and type [localhost](localhost) to open the app

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
