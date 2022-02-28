# PHPenMVCconPDOparaReservas
Aplicacion Web en PHP bajo arquitectura MVC para crear reservas de restaurant, estas se guardan en la BD.

# DBRESERVOIR
Contiene el archivo "reservas.sql" para generar la tabla neceesaria (reservas) para realizar las pruebas de forma local, se debe crear la base de datos bdreservoir para que pueda funcionar. (Se las hago un poquito mas dificil :P)


# CSS
Contiene desarrollo mas en detalle en su css, trabajando desde el fondo del body en una gradiente, hasta detalle de los input. todo es personalizable.

![Captura uno](https://raw.githubusercontent.com/Derliodev/PHPenMVCconPDOparaReservas/main/views/img/1.png)
![Captura uno](https://raw.githubusercontent.com/Derliodev/PHPenMVCconPDOparaReservas/main/views/img/2.png)
![Captura uno](https://raw.githubusercontent.com/Derliodev/PHPenMVCconPDOparaReservas/main/views/img/3.png)

# MVC
Contiene la arquitectura de Modelo/Vista/Controlador :

- Modelo: contiene las clases PHP para la conección con PDO a la Base de datos y la clase que se usara como objeto para las reservas.

- Vista: Contiene el formulario de reservas y las secciones Footer y Header por separado, tambien encontraras el CSS y otras carpetas que podras usar en la estructura como: JS, IMG, ETC...

- Controlador: contiene la clase que construye la nueva reserva, y mediante el metodo que reconozca en la variable global (POST o GET) es como definira el comportamiento, todo esto implementando las vistas (header.php - formulario.php - footer.php) y realizando el manejo de errores (Básico).

