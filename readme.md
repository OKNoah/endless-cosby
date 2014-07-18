## Endless Cosby

Endless Cosby is an example of the Laravel framework, endless scrolling through jQuery and the PlaceCosby API.

See Endless Cosby in action here: http://endless-cosby.studiodogma.ca

## Installation

Clone from Github, then get dependencies with Composer. You should do this in your web server root (eg. /var/www):

	git clone https://github.com/OKNoah/endless-cosby.git
	cd endless-cosby
	composer update --no-dev

After installation, chown the files to your web server like this:

	cd endless-cosby
	chown -R www-data ./

If you cloned/forked the project from GitHub already, run this command to get the dependencies:

	composer update --no-dev

Alternatively, use Composer to install with all dependencies (this method makes updates harder):

    composer create-project oknoah/endless-cosbyoknoah/endless-cosby:dev-master endless-cosby

Note: The last argument is the directory to install to. Make sure it's the right place, probably `/var/www`.

Note: Your web server user may be different. On Mac, it's `_www` by default.

### Install Composer

If you don't have Composer, install it like this:

    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer