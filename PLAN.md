# Plan de Migración de Next.js a Template de WordPress

El objetivo es crear un template de página de WordPress que sea una réplica exacta del proyecto `base_project` (Next.js/Tailwind CSS).

## Fase 1: Análisis del Proyecto Origen (`base_project`)

- [x] Identificar la estructura HTML de la página principal.
- [x] Localizar y extraer los estilos CSS compilados.
- [x] Listar todos los assets estáticos (imágenes, fuentes, etc.).
- [x] Revisar las dependencias y scripts del lado del cliente.

## Fase 2: Preparación del Entorno de WordPress

- [x] Crear un nuevo directorio para el tema personalizado en `wp-content/themes/`.
- [x] Crear los archivos básicos del tema: `style.css` (con la cabecera de información del tema) y `index.php`.
- [x] Crear la estructura de carpetas para assets (css, js, images) dentro del nuevo tema.

## Fase 3: Creación del Template de Página

- [x] Crear el archivo PHP para el template de página (ej. `template-landing.php`).
- [x] Añadir la cabecera de comentario de WordPress para definirlo como un template de página.
- [x] Copiar los assets (CSS, imágenes) del proyecto `base_project` a la carpeta del nuevo tema.
- [x] Escribir el código en `functions.php` para encolar (enqueue) correctamente la hoja de estilos CSS.
- [x] Pegar la estructura HTML en el archivo de template PHP.
- [x] Modificar las rutas de los assets (imágenes, etc.) en el HTML para que usen las funciones de WordPress (ej. `get_theme_file_uri()`).

## Fase 4: Verificación y Finalización

- [x] Activar el nuevo tema en el panel de administración de WordPress.
- [x] Crear una nueva página en WordPress y asignarle el nuevo template.
- [ ] Verificar que la página se muestra exactamente igual que el proyecto original.
- [ ] Marcar todas las tareas como completadas en este documento.
