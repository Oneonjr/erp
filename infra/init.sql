CREATE DATABASE IF NOT EXISTS akaunting;
CREATE USER IF NOT EXISTS 'akaunting_user'@'%' IDENTIFIED BY 'akaunting_password';
GRANT ALL PRIVILEGES ON akaunting.* TO 'akaunting_user'@'%';

CREATE DATABASE IF NOT EXISTS snipeit;
CREATE USER IF NOT EXISTS 'snipeit_user'@'%' IDENTIFIED BY 'snipeit_password';
GRANT ALL PRIVILEGES ON snipeit.* TO 'snipeit_user'@'%';

CREATE DATABASE IF NOT EXISTS firefly;
CREATE USER IF NOT EXISTS 'firefly_user'@'%' IDENTIFIED BY 'firefly_password';
GRANT ALL PRIVILEGES ON firefly.* TO 'firefly_user'@'%';

CREATE DATABASE IF NOT EXISTS invoiceninja;
CREATE USER IF NOT EXISTS 'invoiceninja_user'@'%' IDENTIFIED BY 'invoiceninja_password';
GRANT ALL PRIVILEGES ON invoiceninja.* TO 'invoiceninja_user'@'%';

FLUSH PRIVILEGES;