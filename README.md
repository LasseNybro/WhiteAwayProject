#Movie Rater v0.1

## Description
The client wants a way to get ratings for their movies. 

They have collected the ratings for a movie in different categories from esteemed critics all over the world. 
Now they want a script which presents the movies final and overall valid score for all eternity. One score to rule them all!

## Requirements from the client:
 - A movie is rated from 1 to 5 in 4 different categories. 
 - The final score for a movie need to be calculated weighted by a very scientific key:

| category | weight |
|---|---|
|sound|0.20|
|acting|0.30|
|effects|0.45|
|music|0.05|

When running the index.php file, it should be possible to input a movie's title, and get scores with the calculated total.

The scores are supplied in the resources folder in either JSON or CSV format.

The task is therefore, implement the functionality for this in the project, using the clients supplied files. 
A starting point for the solution has already been created, where public/index.php should execute and output, and classes/Movierater.php can be used for the logic if you wish. 

It does not matter if the script is run in the terminal or the browser. The frontend team will figure out how to present the result.

### User story

As a user, I want to retrieve ratings for a movie, including the total calculated score, so that i can use the data to sort movies.
 

## Running the script

If PHP is installed locally, you can simply install with composer and execute the index.php

First, install: 
Run  
`$ composer install`  
In the projects root

Then run: `$ php public/index.php`

A testsuite has been initialized as well, can be run by executing:
`$ vendor/bin/phpunit`

If you dont have PHP installed locally, you can use the docker image to execute in

```bash
$ docker build -t sample-project .
$ docker run --rm -v ${PWD}:/usr/src/movierater sample-project
$ docker run --rm -v ${PWD}:/usr/src/movierater sample-project vendor/bin/phpunit
```

