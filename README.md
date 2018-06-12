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
    
