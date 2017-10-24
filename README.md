[![Build Status](https://travis-ci.org/Nicklas766/coffee-community.svg?branch=master)](https://travis-ci.org/Nicklas766/coffee-community)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/?branch=master)

# Guide

This is a frontend for an [anax module](https://github.com/Nicklas766/Comment). All you have to do is download this repo, later
you just do "composer install update" and you should have your own coffee-community!

## Get your own Coffee-Community
```
git clone https://github.com/Nicklas766/coffee-community.git

// Or download as ZIP, whatever you prefer.
```

Go to `vendor/nicklas/comment/src/sql/setup.sql` and setup the database.
Go to `config/database.php` to change it to your database.

```
composer install
```

And you're done! If you want to make your own frontend from scratch, then you can follow the guide
[here.](https://github.com/Nicklas766/Comment)
