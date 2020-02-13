# Proof of Concept API  
  
## Lumen with JWT  
  
### Dependencies  
PHP 7.1+  
Composer  

## Setup
Create a copy of the .env.example file:  
`cp .env.example .env`  
  
Populate the values for the environment variables stored in .env as required.  
Note: `JWT_SECRET` must be populated for the API authentication tokens to be correctly created and decoded.  
  
Run the following to download code dependencies:  
`composer install`


### Running the application locally  
  
Run: `php -S localhost:8000 -t public` on the command line to start a local server  
  
Example authentication request:  
  
POST: `http://localhost:8000/auth/login`  
  
with POST json:  
```
    {
        "email": <email_address>,
        "password": <password>
    }
```  
  
Example API request:  

`http://localhost:8000/test?token=<token returned from auth/login>`


