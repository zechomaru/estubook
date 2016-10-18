# Estructura DB para sistema Libreria 
Laravel Migrations y Modelos relacionados para el sistema de la libreria

# Requerimientos
Laravel 5.x
MySQL

# Instalacion
Copiar y pegar los archivos del directorio seeds dentro del directorio seeds del proyecto laravel
Configurar los datos de conexión de la base de datos en el archivo .env
Correr el comando: php artisan migrate 
Copiar y pegar los modelos que se encuentran en la raiz del directorio app

# Observaciones Finales
El modelo Academia es una clase abstracta. Las clases Universidad y Colegio heredan de esta clase y las mismas tienen toda funcionalidad de
los modelos de Laravel (Eloquent ORM)
