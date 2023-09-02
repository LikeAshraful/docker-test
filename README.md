Repository for learning Docker with Laravel and PostgreSQL.

## How to install

<b>Clone the GitHub repository:</b>

cd /var/www/html
</br>
git clone https://github.com/LikeAshraful/docker-test.git
</br>
cd docker-test
</br>

<b>Build the Docker containers using Docker Compose:</b>

docker-compose build
</br>
docker-compose up -d
</br>
composer install
</br>
sudo cp .env.example .env
</br>
 sudo chmod o+w ./storage/ -R
</br>
npm install && npm run dev
</br>
finally visits site on http://localhost:8000/


