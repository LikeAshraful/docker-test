
# Docker Test

Repository for learning Docker with Laravel and PostgreSQL.


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
```

Finally You are Done! Now You can visits site on http://localhost:8000/

