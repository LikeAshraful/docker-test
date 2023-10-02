
# Docker Test

###Dive into Docker, Laravel, and PostgreSQL: Your Learning Repository

Welcome to your repository for learning Docker with Laravel and PostgreSQL! In this comprehensive guide, we will take you on a journey through the world of containerization, web development with Laravel, and database management with PostgreSQL.


## Deployment

Firstly, Go to Your local root Directory

```bash
  cd /var/www/html
```

Repository Clone 

```bash
  git clone https://github.com/LikeAshraful/docker-test.git
```

Now Go to the docker-test folder. 

```bash
  cd docker-test
```

Build the Docker containers using Docker Compose:

```bash
docker-compose build
docker-compose up -d
composer install
sudo cp .env.example .env
sudo chmod o+w ./storage/ -R
npm install && npm run dev
php artisan key:generate
```

Finally, You are Done! Now You can visit the site on http://localhost:8000/

