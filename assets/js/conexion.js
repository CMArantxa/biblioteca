const mysql = require('mysql');

const conexion = mysql.createConnection({
  host: 'localhost',
  user: 'root', // El nombre de usuario de tu base de datos
  password: '', // La contraseña de tu base de datos
  database: 'biblioteca' // El nombre de tu base de datos
});

conexion.connect((error) => {
  if (error) {
    console.error('Error de conexión a la base de datos:', error);
    return;
  }
  console.log('Conexión establecida correctamente');
});

module.exports = conexion;
