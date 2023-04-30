@añadimos esto al htaccess par tener esta variable
RewriteEngine On
RewriteRule .* - [e=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
##muy importtante que en el bearer no poner la ñ ejemplo "Bearer sssjpsjpsjspsjss2344" 
$bearer =  $_SERVER['HTTP_AUTHORIZATION'];


luego compararramos con un if si bearers son igual desde el fecth que se ha enviado,este ejemplo es desde next js

const res = await axios.get(`${process.env.URL_GETREVIEWS}`, {headers : {Authorization : `Bearer ${process.env.BEARER_NAMEQUEQUIERAS}`}})
 
