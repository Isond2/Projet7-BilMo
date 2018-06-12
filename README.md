Bilmo Api

This project is part of the "php/symfony" training.

Install :
  - Clone the repository
  - run $ php composer install
  
Create database
  - $ php bin/console doctrine:database:create
  - $ php bin/console doctrine:schema:update --force
  
Load the sample data
  - $ php bin/console doctrine:fixtures:load

Oauth process :

    Create a client :
  
        -php bin/console app:oauth-client:create -- redirect_url=http://your-redirect.url
        - will respond client_id and client_secret
        
    Create an admin :
        
         - /api/register_admin
    
    Get your token : POST on /oauth/v2/token
    With the following json:

            "client_id" = "client_id",
            "client_secret" = "client_secret",
            "grant_type" = "password",
            "username" = "your_username",
            "password" = "your_password"
   
   Get your refresh token : POST on /oauth/v2/token
   With the following json:
   
           "grant_type" :  "refresh_token",
           "client_id" : "client_id",
           "client_secret" : "client_secret",
           "refresh_token" : "your_refresh_token"
 
  Log in your api
  Send your request with theses params in yout header :
  
            Authorization = 'Bearer ' + "your_token".
         
    
   
    
