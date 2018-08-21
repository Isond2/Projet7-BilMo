## Bilmo Api
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/074647b165034b4b959d916df7a74835)](https://www.codacy.com/app/Isond2_3/Projet7-BilMo?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Isond2/Projet7-BilMo&amp;utm_campaign=Badge_Grade)

This project is part of the "php/symfony" training.

Bilmo Api is and Api who provides different product's informations (phones) from the Bilmo's catalog. The catalog is accessible by any reseller who is interested. Bilmo Api is a B2B Api only.

### Install :
  - Clone the repository
  - run $ php composer install
  
### Create database
  - $ php bin/console doctrine:database:create
  - $ php bin/console doctrine:schema:update --force
  
### Load the sample data
  - $ php bin/console doctrine:fixtures:load

### Oauth process :

Create a client :
  
        - php bin/console app:oauth-client:create -- redirect_url=http://your-redirect.url
        - will respond client_id and client_secret
        
Create an admin :
        
         - /api/register_admin
    
   Get your token : **POST on /oauth/v2/token** with the following json:
   ```json
        {
            "client_id" : "client_id",
            "client_secret" : "client_secret",
            "grant_type" : "password",
            "username" : "your_username",
            "password" : "your_password"
        }
 ```
   Get your refresh token : **POST on /oauth/v2/token** with the following json:
   ```json
        {
           "grant_type" :  "refreshToken",
           "client_id" : "clientId",
           "client_secret" : "clientSecret",
           "refresh_token" : "yourRefreshToken"
        }
 ```
  ### Log in the api :
  Send your request with theses params in yout header :
  
            Authorization = 'Bearer ' + "yourToken".
            
  Doc online at : api/doc
    
   
    
