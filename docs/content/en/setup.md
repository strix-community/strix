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

We'll go ahead with installing and configuring Strix.
