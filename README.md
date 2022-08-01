<h1>Flight-advisor Laravel API</h1>
-sanctum auth

Setup:

-clone project

-create database named flight-advisor

-run <b>php artisan migrate</b> to migrate tables

-run <b>php artisan db:seed</b> to seed needed data

<i>-import countries.sql in database(if you want)</i>

-run <b>php artisan serve</b>

Default User accounts:

user:password
admin:admin  -admin account
user:user   -regular user account

List of API Endpoints:

Non protected:
-api/login : POST
    Receives user and password.Returns Bearer token.

Protected:
-api/Cities : GET
    Returns list of all cities and comments
-api/Cities/number : GET
    Returns <number> of latest comments about cities
-api/Cities : POST
    Imports city in database.
    Should provide in request:
        name
        country_id
        description
-api/City/name : GET
    Return all comments for city
-api/City/name/number
    Returns <number> of latest comments about searched city
-api/Comment : POST
    Imports comment for particular city
    Should provide in request:
        city_id
        comment
-api/Comment/id : PUT
    Updates users' comment
    Should provide in request:
        comment
-api/Comment/id : DELETE
    Deletes users' comment
-api/Airport : POST
    Receives file and imports list of airports in table
    Should provide in request:
        file
    PS For now just .csv extensions reading.
-api/Airport : GET
    Returns list of all airports
-api/Airport/id : GET
    Returns specific airport informations.
-api/Route : POST
    Receives file and imports list of routes in table
    Should provide in request:
    file
    PS For now just .csv extensions reading.
-api/Route : GET
    Returns list of all routes
-api/Route/source/destination/
    Returns cheapest route from specific airport to another one
    
-api/logout
    Logs out.
