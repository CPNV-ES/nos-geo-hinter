<br />
<div align="center">

  <h1 align="center">Nos Geo Hinter</h1>

  <p align="center">
    An awesome hinter for geoGuessr
    <br />
    <br />
    <a href="https://github.com/CPNV-ES/nos-geo-hinter/issues/new?assignees=&labels=bug&projects=&template=bug_report.md&title=%5BBUG%5D">Report Bug</a>
    ·
    <a href="https://github.com/CPNV-ES/nos-geo-hinter/issues/new?assignees=&labels=enhancement&projects=&template=feature_request.md&title=">Request Feature</a>
  </p>
</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
  </ol>
</details>

# About The Project

This is a project to use some noSQL database. The goal of this project is to provide hint when you are playing geoguessr

# Getting Started

## Prerequisites

* PHP 8.3.1 (NTS)
* Laravel 10.x
* composer 2.6.6
* MongoDB 7.0.2 Community

### How to install the requirements

#### PHP

> Use your favourite package manager to install PHP 8.3.1 (TS). Or follow this [link](https://www.php.net/manual/install.php) that redirects to the official PHP download page.

> In your php.ini add extension="mongodb.so"

#### MangoDB

> Follow this [link]([https://xdebug.org/docs/install](https://www.mongodb.com/try/download/compass)) that redirects to the official compass install documentation.

Run this command :
```shell
sudo pecl install mongodb
``` 

#### composer

> Follow this [link](https://getcomposer.org/download/) that redirects to the official composer download page.

<!-- The following installation procedure is not valid.  -->
### Installation

1. Then use composer to install the package

```shell
composer install 
```

2. copy the .env.example or set the required environment variables

3. All done, you can now use the application as you wish

### Run

1. Run artisan server
   ```shell
    php artisan serve
   ```
2. Run npm
   ```shell
    npm run dev
   ```
