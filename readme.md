## Endless Cosby

Endless Cosby is an example of the Laravel framework, endless scrolling through jQuery and the PlaceCosby API.

See Endless Cosby in action here: http://endless-cosby.studiodogma.ca

## Installation

Use Composer to install with all dependencies:

    composer create-project oknoah/endless-cosbyoknoah/endless-cosby:dev-master endless-cosby

Note: The last argument is the directory to install to. Make sure your working directory is an OK place to install, or change it.

If you cloned/forked the project from GitHub, run this command to get the dependencies:

	composer update --no-dev

After installation, chown the files to your web server like this:

	cd endless-cosby
	chown -R www-data ./

Note: Your web server user may be different. On Mac, it's `_www` by default.

### Install Composer

If you don't have Composer, install it like this:

    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer