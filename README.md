
# Proyecto Laravel – Examen Parcial 2 💻

Este repositorio corresponde al segundo examen parcial de la materia **Desarrollo y Técnicas de Aplicaciones Web**.

### Objetivo

Aplicar conocimientos sobre almacenamiento local y consumo de servicios web.

### Funcionalidades

- Lectura de un archivo **XML** con datos ficticios y conversión a **JSON**.
- Consumo de un **servicio SOAP** para convertir números a palabras.


---

## 👨‍💻 Integrantes del equipo

| Nombre | Carnet |
|--------|--------|
| Alejandro Daniel Avalos Santamaria | AS19014 |
| Irvin Elias Torres Merlos | (Sin carnet) |
| Jose Garcia Rodriguez | (Sin carnet) |
| José Arnoldo Landaverde Gómez | LG22018 |
| José Mauricio Chavarría González | (Sin carnet) |

---

## 🚀 Pasos para ejecutar el proyecto en local

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

### 1️⃣ Clonar el repositorio (opcional)

```bash
git clone <url-del-repositorio>
cd <nombre-del-proyecto>
```

### 2️⃣ Instalar las dependencias

Instala las dependencias del proyecto con Composer:

```bash
composer install
```

### 3️⃣ Configurar el archivo de entorno

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

Configura en el `.env` la conexión a tu base de datos.

### 4️⃣ Ejecutar migraciones

Ejecuta las migraciones para crear las tablas necesarias:

```bash
php artisan migrate
```

### 5️⃣ Poblar la base de datos (opcional pero recomendado)

Si el proyecto incluye seeders para poblar datos iniciales, ejecuta:

```bash
php artisan db:seed
```

### 6️⃣ Levantar el servidor de desarrollo

Finalmente, inicia el servidor de Laravel:

```bash
php artisan serve
```

Accede a tu proyecto en:

```
http://127.0.0.1:8000
```
