## Movie Trailer 
### CRUD Features
1. Add movie Trailer
2. Update Movie trailer information
3. Delete Movie trailer
4. View movie trailers updated by the user

### User Management Features
1. User Registration
2. Login
3. Logout
4. Change password but not email

### Multi language
Support Kiswahili and English. User selects which language they want to use when logging in

### Technologies used
1. Codeigniter4.1.1
2. Mysql 5.7
3. Bootstrap 5
4. Git for version management
5. PHP 7.3
6. Composer 2
7. Nginx


## Running the application
1. `git clone https://github.com/Mamithi/movie_trailers.git`
2. `cd movie_trailers`
3. `composer install`
4. `php spark serve`

## Database
1. Create database and add credentials to .env file
2. Run migrations and seed the data


## Migrations
1. `php spark migrate`
2. `php spark db:seed UsersTableSeeder`

Two test users were created

`Email: admin@gmail.com Password: password`

`Email: user@gmail.com Password: password`