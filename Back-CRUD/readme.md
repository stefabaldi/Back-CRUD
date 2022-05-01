Per avviare il programma occorre eseguire mySql su un immagine docker come server sulla quale sono salvati i dipendenti (create_employee.sql), connesa con la porta standard di mysql (3306) e quindi: 
docker run --name my-mysql-server --rm -v /home/informatica/mysqldata:/var/lib/mysql -p 3306:3306 -v /home/informatica/dump:/dump -e MYSQL_ROOT_PASSWORD=pw -d mysql:latest
mysql -u root -p < /dump/create_employee.sql; exit; password = pw;
docker exec -it my-mysql-server bash
Su docker dovrà essere utilizzata un altra immagine per il servizio REST e quindi:
docker run -d -p 8080:80 --name my-apache-php-app --rm -v /home/informatica/Backend-REST:/var/www/html zener79/php:7.4-apache
Dopo aver eseguiti tutti i procedimenti avviare il client index (front)






