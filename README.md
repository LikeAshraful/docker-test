
# Docker Test

### Dive into Docker, Laravel, and PostgreSQL: Your Learning Repository

Welcome to your repository for learning Docker with Laravel and PostgreSQL! In this comprehensive guide, we will take you on a journey through the world of containerization, web development with Laravel, and database management with PostgreSQL.
Feel free to fork this repository, experiment with the code, and adapt it to your own projects. Learning these technologies will empower you to build robust web applications with ease and efficiency.

## Deployment

Firstly, Clone the Repository

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
sudo chmod -R 777 storage/
npm install && npm run dev
php artisan key:generate
```

Finally, You are Done! Now You can visit the site at http://localhost:8000/

