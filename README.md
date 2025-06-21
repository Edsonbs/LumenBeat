# LumenBeat

Se trata de una aplicación web que de música en streaming con interfaz gráfica moderna y minimalista. De momento es un proyecto actualmente en construcción.

## Ejecución

Estos son los comandos que debemos ejecutar dentro del proyecto para que éste funcione.

```bash
#!/bin/bash

# Eliminamos la versión actual del repositorio:
sudo rm -R LumenBeat

# Obtenemos la nueva versión de github:
git clone git@github.com:Edsonbs/LumenBeat.git

# Pasamos los archivos del nuevo repositorio a explotación en Apache:
sudo rm -R /var/www/html/LumenBeat
sudo cp -R LumenBeat /var/www/html/
sudo chmod -R 777 /var/www/html/*

# Generamos nuevamente todos los datos necesarios para que la web funcione:
sudo cd /var/www/html/LumenBeat/
sudo COMPOSER_ALLOW_SUPERUSER=1 composer install
sudo cp /root/.env_LumenBeat /var/www/html/LumenBeat/.env # Debemos tener un .env_LumenBeat configurado en la carpeta.
sudo php artisan key:generate
sudo npm install
sudo php artisan storage:link
sudo npm run build

# Reiniciamos para aplicar los cambios:
sudo service apache2 restart
```
