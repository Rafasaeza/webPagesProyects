docker build -t rafasaez/php-sql-app .
docker push rafasaez/php-sql-app
cd sql
bash prepare-sql.sh
