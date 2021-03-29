## Testing Task Backend

The task is to create an app for caching points from OpenTripMap. Create a laravel app which:  
- accepts a request from client with longtitude latitude and radius params 
- makes request to OpenTripMap api 
- saves (or update existing points) response from api to db and returns list of geo points.

The app should have two routes: 

- **login route** accepting username and password and returns user and bearer token
- **points route** accepting longtitude latitude and radius and returns geo points inside this radius. Should be auth protected. 

### General requirments: 

- User should be seeded when application is created
- Feature tests should be presented

### Bonus: 
Add a route that returns the most requested 15 points.

[OpenTripMap Api](https://opentripmap.io/docs#/)
