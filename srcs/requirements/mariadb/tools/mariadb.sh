#!/bin/sh

DATABASE_PATH=/var/lib/mysql/$MYSQL_DATABASE

echo "DATABASE_PATH: $DATABASE_PATH"
echo "Conteúdo de /var/lib/mysql:"
ls -la /var/lib/mysql

if [ ! -d "$DATABASE_PATH" ]
then
    echo "Diretório do banco de dados não encontrado. Iniciando o MariaDB e criando o banco de dados e usuário..."
    
    service mysql start;
    mysql -u root -p$MYSQL_ROOT_PASSWORD --execute="CREATE DATABASE $MYSQL_DATABASE; \
                 CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'; \
                 ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD'; \
                 GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';";
    mysql -uroot -p$MYSQL_ROOT_PASSWORD $MYSQL_DATABASE < populate_db.sql  ;
    mysqladmin -uroot -p$MYSQL_ROOT_PASSWORD shutdown;
fi

echo "Iniciando o MariaDB com o comando: mysqld_safe --bind-address=0.0.0.0"
exec mysqld_safe --bind-address=0.0.0.0
