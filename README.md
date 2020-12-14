# A-PMS

<p align="center"><img src="./icon.png" width="100"></p>

## Contents

-   [About](#About)
-   [Features](#features)
-   [Installation](#installation)
-   [Technologies Used](#technologies-involved)

## About

It's apparently a web app, to help organise projects and involved tasks. Such that clients can also see the progress of the project in metrics at any time.


## Features

-   [ ] User Registration
-   [ ] User Login
-   [ ] Email Verification
-   [ ] Profile Update
-   [ ] Passwords Update
-   [ ] Two Factor Authentication

Still working on it, aiming for something big.

## Installation

-   Clone the repo

```bash
git clone https://github.com/anubra266/project-management.git
```

-   Install PHP dependencies

```bash
composer install
```

-   Install npm dependencies

```bash
npm install
```

-   Copy Environment File

```bash
cp .env.example .env
```

-   Generate App key

```bash
php artisan key:generate
```

-   Migrate Database

```bash
php artisan migrate --seed
```

-   Serve App

```bash
php artisan serve
```

## Technologies Involved

-   **[Laravel](https://laravel.com/)**
-   **[VueJs](https://vuejs.com/)**
-   **[InertiaJs](https://inertiajs.com/)**
-   **[AlpineJs](https://github.com/alpinejs/alpine)**
*   **[Fortify](https://github.com/laravel/fortify)****
    <br />
    <br />
    <br />
## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
