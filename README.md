<h1>Flight-advisor Laravel API</h1>
<p>
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
<br>
List of API Endpoints:
<br>
Non protected:<br>
-api/login : POST<br>
    Receives user and password.Returns Bearer token.
<br>
<br>
Protected:
-api/Cities : GET
    Returns list of all cities and comments<br>
<br>-api/Cities/number : GET
    Returns <number> of latest comments about cities<br>
<br>-api/Cities : POST<br>
    Imports city in database.<br>
    Should provide in request:<br>
        &emsp;name<br>
        &emsp;country_id<br>
        &emsp;description<br>
<br>-api/City/name : GET<br>
    Return all comments for city<br>
<br>-api/City/name/number<br>
    Returns <number> of latest comments about searched city<br>
<br>-api/Comment : POST<br>
    Imports comment for particular city<br>
    Should provide in request:<br>
        &emsp;city_id<br>
        &emsp;comment<br>
<br>-api/Comment/id : PUT<br>
    Updates users' comment<br>
    Should provide in request:<br>
        &emsp;comment<br>
<br>-api/Comment/id : DELETE<br>
    Deletes users' comment<br>
<br>-api/Airport : POST<br>
    Receives file and imports list of airports in table<br>
    Should provide in request:<br>
        &emsp;file<br>
    PS For now just .csv extensions reading.<br>
<br>-api/Airport : GET<br>
    Returns list of all airports<br>
<br>-api/Airport/id : GET<br>
    Returns specific airport informations.<br>
<br>-api/Route : POST<br>
    Receives file and imports list of routes in table<br>
    Should provide in request:<br>
    &emsp;file<br>
    PS For now just .csv extensions reading.<br>
<br>-api/Route : GET<br>
    Returns list of all routes<br>
<br>-api/Route/source/destination/<br>
    Returns cheapest route from specific airport to another one<br>
    <br>
<br>-api/logout
    Logs out.
 </p>
