# finance-manager (study and research project)

[![Build Status](https://travis-ci.com/devscast/finance-manager.svg?branch=master)](https://travis-ci.com/devscast/finance-manager)

a finance manager app built with symfony using DDD and Hexagonal Architecture

## How to contribute
* Fork the repo on your github
* Clone your forked repo 
* Add or choose an issue at https://github.com/devscast/covid19-backend/issues
* Do not change a feature or function that is not relevant to your issue.
* Make your changes
* Commit fast, Commit often , keep it optional
* Commit with A Clear message  eg: ``` git commit -m "[New][update][Fix] function or issue number" ```
* Push your changes on your forked repo ``` git push your_remote your_branch ```
* Make a pull request to the original repo
* If a conflict occurs when you ask Git to merge your code, try to resolve it with a new commit

#Software requirements
PHP Version 7.4 |
Mysql 5.5 and newer|


# Set up the App
```
$ composer install

## database setup create .env.local conforming with .env
$ php bin/console doctrine:database:create  
$ php bin/console doctrine:migrations:migrate

##run app
$ php -S localhost:8000 -t public 
```
