---
title: Setup
description: ''
position: 2
category: Getting Started
---

<alert type="danger">
Strix is in pre-alpha and is not stable. It is not recommended to use Strix at this time.
</alert>

## Requirements

- PHP 7.3 or higher
- Nginx or Apache webserver

## Download files

Create and change into a new directory.

  ```bash[sh]
mkdir -p /var/www/strix && cd /var/www/strix
  ```

Download the files and unpack them.

  ```bash[sh]
curl -Lo strix.tar.gz https://github.com/strix-community/strix/releases/download/x.x.x/strix.tar.gz
tar -xzvf strix.tar.gz
chmod -R 755 storage/* bootstrap/cache/
  ```

## Installation

We'll go ahead with installing and configuring Strix's dependencies through composer. We won't need to compile assets as they are provided by the `frontend` package.

  ```bash[sh]
  composer install --no-dev -o
  ```

  After composer has finished installing our dependencies. Let's actually begin the configuration process for Strix.

<alert type="warning">
The following command will prompt and create tables in a database. It will not continue installation if your database details are incorrect.
</alert>

```bash[sh]
 php artisan strix:install
  ```

  This command will publish the necessary assets along with prompting you for database details so Strix can migrate it's compiled database fille. While Strix does use migrations, it also comes with a dump of all it's migrations to make installation less intensive. 


## Configuration

Almost everything in Strix can be changed through the UI for end-users. For developers you can read further into the docs for deep configuration and extending Strix.
