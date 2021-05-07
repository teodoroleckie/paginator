# Php paginator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tleckie/paginator.svg?style=flat-square)](https://packagist.org/packages/tleckie/paginator)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/teodoroleckie/paginator/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/paginator/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/teodoroleckie/paginator/badges/build.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/paginator/build-status/main)
[![Total Downloads](https://img.shields.io/packagist/dt/tleckie/paginator.svg?style=flat-square)](https://packagist.org/packages/tleckie/paginator)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/teodoroleckie/paginator/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

Enumerator in php

### Installation

You can install the package via composer:

```bash
composer require tleckie/paginator
```

### Usage:


```php
<?php

require_once "vendor/autoload.php";

use Tleckie\Paginator\Paginator;


$paginator = new Paginator(100,10, 2);

$paginator->getTotalPages();// 10
$paginator->getLastPage();  // 10
$paginator->getOffset();    // 10
$paginator->getPrevPage();  // 1
$paginator->getNextPage();  // 3
$paginator->hasNext();      // true
$paginator->hasPrev();      // true

```

### Interface:


```php
PaginatorInterface
```


### All methods:
```php

 public function getTotalRecords(): int;

 public function getItemsPerPage(): int;

 public function getCurrentPage(): int;

 public function setCurrentPage(int $currentPage): PaginatorInterface;

 public function setTotalRecords(int $totalRecords): PaginatorInterface;

 public function setItemsPerPage(int $itemsPerPage): PaginatorInterface;

 public function hasPrev(): bool;

 public function hasNext(): bool;

 public function getNextPage(): int;

 public function getPrevPage(): int;

 public function getLastPage(): int;

 public function getFirstPage(): int;

 public function getOffset(): int;

 public function getTotalPages(): int;
```