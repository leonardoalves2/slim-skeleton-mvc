<?php 

if(isset($viewName)){ 

  $path = viewsPath() . $viewName . '.php'; 

  if (file_exists($path)){ 
    require_once $path; 
  }

} 

?>