# Actividad de Laravel: Gestión de Actores y Películas

Este proyecto es una actividad de enseñanza para estudiantes de Ingeniería Informática, centrada en el uso del framework Laravel en PHP. La actividad implica la creación de una aplicación web que gestiona una relación many-to-many entre actores y películas.

## Descripción

La aplicación permite a los usuarios:

- Listar actores.
- Crear nuevos actores y asignarles películas existentes.
- Listar películas.
- Crear nuevas películas.

Cada actor puede estar asociado con múltiples películas y cada película puede tener varios actores asociados.

## Configuración del Proyecto
1. Clona el repositorio del proyecto:
2. Navega al directorio del proyecto:
    cd tu-repositorio
3. Instala las dependencias de Composer:
    composer install
4. Configura tu archivo `.env` con los detalles de tu base de datos y otras configuraciones necesarias.
5. Ejecuta las migraciones de la base de datos:
    php artisan migrate:refresh --seed
