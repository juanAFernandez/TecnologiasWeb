<? 

error_reporting(E_ALL);
ini_set('display_errors', '1');

//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = $_POST["cadenatexto"]; 
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$nombre_archivo = $_FILES['userfile']['name']; 
$tipo_archivo = $_FILES['userfile']['type']; 
$tamano_archivo = $_FILES['userfile']['size']; 

//compruebo si las características del archivo son las que deseo 
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg")) && ($tamano_archivo < 100000))) { 
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>"; 
}else{ 
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'], "Imagenes/".$nombre_archivo)){ 
      	 echo "El archivo " . $nombre_archivo ." ha sido cargado correctamente."; 
   	}else{ 
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
   	} 
} 
?>