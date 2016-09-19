# SlimPHP Vanilla (v2)

#### Discontinued support in favour for a new Slim PHP 3 version
I have began a new version of this that concentrate on a bit more [PHP Slim 3 Vanilla](https://github.com/simondavies/SlimPHP3-Vanilla)


## Details
A simple base app, using the PHP framework [PHP Slim](http://www.slimframework.com/) at its heart, and implementing  [Laravel's Eloquent](https://github.com/illuminate/database) ORM.


## Official Documentation
Please find the following documentation details for further reading on the main items used within this app.

##### Slim PHP
 [Slim Documentation](http://docs.slimframework.com/) for further details.

##### Laravel's Eloquent ORM
Laravels [Eloquent ORM](http://laravel.com/docs/4.2/eloquent), currently using version 4.2.


##Getting Started
#####Server Set Up
I am using laravels [Homestead](https://github.com/laravel/homestead) VM for my developement, more on this can be found at the laravel website [laravel.com](http://laravel.com/docs/4.2/homestead). A great video on the installation and usage of Homestead can be also seen at [Laracasts.com](https://laracasts.com/lessons/say-hello-to-laravel-homestead-two)
#####Installation & Set up
I am mainly using composer for the whole install and programming. For more details on how to set up and install Composer can be found at [getcomposer.org](https://getcomposer.org/)

       composer create-project simondavies/slimphp-vanilla your-project-name


Now set up homestead, so that we point a test domain name  to our new set up, as below:

First of  ssh into your homestead server (Please read the Homested docs for further information):

Then run the homestead server code as below to point to your domain name to the public folder

         serve mytestdomainname.app /home/vagrant/Code/path/to/public/directory

Once this has been done you will then need to add your domain name to the mac host files, located at /etc/hosts

Once open add the following to the host file:

       192.168.10.10 mytestdomainname.app

Next make a copy of the .env.example file and rename this .env.

Now you should be able to type 'http://testvanilla.app' into the browser and the demo Slim Vanilla site should show up.


### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

##### A Thanks's to..

Just a list of people and projects i like to thank on my way...

[Codeguy](https://github.com/codeguy) of the Slim Framework.

Taylor Otwell and the people involved in the [Laravel Framework](https://github.com/laravel).

Jeffery Way and his aweasome [Laracasts Tutorials](https://laracasts.com/) website and [Codebase](https://github.com/laracasts).

Many more that I will eventually add here..

Thanks All.

