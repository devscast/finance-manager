# finance-manager (study and research project)

[![Build Status](https://travis-ci.com/devscast/finance-manager.svg?branch=master)](https://travis-ci.com/devscast/finance-manager)

A finance manager app built with symfony using DDD and Hexagonal Architecture

## Planned Features ✍🏽
#### Expense Tracking 👨🏾‍🔧

* [ ] Tracking expenses and incomes
* [ ] Split Transaction - Record all items in a single transaction with a different category and amount
* [ ] Recurring expense and income
* [ ] Taking a picture of receipt
* [ ] Tracking tax
* [ ] Tracking mileage
* [ ] Tracking debts

#### Budget and Bill Organizing 👨🏾‍🔧

* [ ] Organizing bills by week, month and year as well as by categories
* [ ] Schedule the payments and recurring payments
* [ ] Daily, weekly, monthly, and yearly budget with progress bar
* [ ] Daily, weekly, monthly, and yearly summary
* [ ] Calendar view for expense and income
* [ ] Calendar budget forecasting

#### Search and Report 👨🏾‍🔧

* [ ] Search by a category, subcategory, payee/payer, payment method, status, description, tag, etc.
* [ ] Reports in HTML, CSV, Excel and PDF
* [ ] Import and export account activities
* [ ] Charts by a category, subcategory, payee/payer, payment method, status, description, tag, date etc.
* [ ] Email report for print

#### Languages 👨🏾‍🔧

* [ ] English
* [ ] French

## How to contribute ✌🏽

* Fork the repo on your github
* Clone your forked repo 
* Add or choose an issue at https://github.com/devscast/finance-manager/issues
* Do not change a feature or function that is not relevant to your issue.
* Make your changes
* Commit fast, Commit often , keep it optional
* Commit with A Clear message
* Push your changes on your forked repo
* Make a pull request to the original repo
* If a conflict occurs when you ask Git to merge your code, try to resolve it with a new commit

## Software requirements 👨🏾‍💻

* PHP Version 7.4
* Mysql >= 5.5
* Nodejs >= 10.1

## Set up the App

```bash
$ git clone https://github.com/devscast/finance-manager.git finance
$ cd finance
$ composer install

## database setup create .env.local conforming with .env
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate

## run app
$ php -S localhost:8000 -t public 
```
