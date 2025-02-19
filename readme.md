# Test
# Modularizing Laravel
> This helps you to organize your Laravel Project codes by modularizing all your controllers, views and models. This will be very helpful when your laravel project is very big and have a lots of modules.

### How to?
1. 	Add following line after "App\\": "app/" in composer.json
	_"Modules\\": "app/modules"_

	Example:
	"psr-4": {
        "App\\": "app/",
        "Modules\\": "app/modules"
    }

2. 	Copy module.php from source and paste it into your projects config directory.
3. 	Add required module name inside array:
	Example:
	return [
		'modules'=>array(
	        "Admin",
	        "Home",
	        "Your_Module_Name"
	    ),
	];
4. 	Copy Modules directory from source to your projects App directory.
5. 	Modify Modules as per your requirement.
6. 	Now open up the file config/app.php and add ‘App\Modules\ModulesServiceProvider’ to the end of the providers array.
7. 	Your laravel project is now ready to go.
8. 	If you caught into problem: class not found then please do 'composer dump-autoload -o'.

### Reference
Thank you so much Kamran Ahmed for [this](http://kamranahmed.info/blog/2015/12/03/creating-a-modular-application-in-laravel/) very nice tutorial.
