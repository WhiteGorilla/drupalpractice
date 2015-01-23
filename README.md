This project is deprecated
==========================

DrupalPractice has been merged into [Coder](https://www.drupal.org/project/coder),
please use that instead.


DrupalPractice
--------------

DrupalPractice sniffer - Uses [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
to find common errors that new Drupal developers make in their modules.

[![Build Status](https://travis-ci.org/klausi/drupalpractice.png)](https://travis-ci.org/klausi/drupalpractice)

Please use Github pull requests to contribute patches and the issue queue on Github to report problems.

Installation
------------

Same as for [Coder Sniffer](http://drupal.org/node/1419988), except that this
sniffer should be linked as DrupalPractice into PHP_CodeSniffer.

    sudo ln -sv /path/to/drupalpractice/DrupalPractice $(pear config-get php_dir)/PHP/CodeSniffer/Standards/DrupalPractice

Usage examples
--------------

    phpcs --standard=DrupalPractice mymodule.module
    phpcs --standard=DrupalPractice --extensions=php,module,inc,install,test,profile,theme /path/to/module


Running PHPUnit tests
---------------------

Use [composer install](https://getcomposer.org) to get all required dependencies
first. Then execute

    ./vendor/bin/phpunit
