# Proof of Concept API  
  
## Lumen with JWT  
  
### Dependencies  
PHP 7.1+  
Composer  
  
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


