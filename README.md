

## How to install

<b>Clone the GitHub repository:</b>

cd /var/www/html
</br>
git clone https://github.com/LikeAshraful/g-test.git
</br>
cd g-test
</br>

<b>Build the Docker containers using Docker Compose:</b>

docker-compose build
</br>
docker-compose up -d
</br>
sudo cp .env.example .env
</br>
 sudo chmod o+w ./storage/ -R
</br>
npm install && npm run dev
</br>
finally visits site on http://localhost:8000/


