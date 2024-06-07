docker build --no-cache -t rafasaez/php-sql-app .
docker push rafasaez/php-sql-app
cd docker/sql 
bash prepare-sql.sh
