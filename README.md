## Readme

### To run the BoringApp locally you need the following tools installed on your machine
- Mamp
- Composer
- Laravel


### To install the Boring App
- Make sure Mamp is running
- Clone the Laravel project from git to your machine
- Add a virtual host for Mamp pointing to the “public” folder of the Laravel project
- Create a database called “BoringApp” in your phpMyAdmin
- Open the git project and set the right database connections in .env file (host/database/username/password)
- Open your command line in the root folder of the git project and run “composer install”. you will need php > 7.2 installed
- In the Laravel project folder run the “php artisan migrate” command


### To run the Boring app
- Open the location of the virtual host in your browser
