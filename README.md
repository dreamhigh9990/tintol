1- Clone the repository (`git clone https://github.com/dreamhigh9990/tintol.git`)<br>
2- Change the document root of the account to the public folder inside project. So if your project dir is "/home/something/tintol" The document root should be "/home/something/tintol/public"
3- cd into project folder (`cd tintol`)<br>
4- Make .env file (`cp .env.example .env`)<br>
5- Edit the .env file( Change root password, database, database user, database user password based on server and database details)<br>
6- Install the project dependencies(`composer install`)
7- Create Database with migrations (`php artisan migrate`)
8- Seed the new database with default data (`php artisan db:seed`)
9- Install Passport to manage authentication (`php artisan passport:install`) 

## Default Credentials

#### System Admin User

```
Email: admin@system.com
Password: admin 
```

#### Database Users For Docker

```
Root Username: root
Root Password: rstp_2as1aszx_bassword@ass
```

```
Non-Root Username: rstp_db_user
Non-Root Password: rstp_db_user@rstp@123@A 
```