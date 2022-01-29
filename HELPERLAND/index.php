<?php


$controller='';
$function='';
$parameter='';


if(isset($_GET['controller'])&&$_GET['controller']!=''){
    $controller=$_GET['controller'];
}


if(isset($_GET['function'])&&$_GET['function']!=''){
    $function=$_GET['function'];
}


if(isset($_GET['parameter'])&&$_GET['parameter']!=''){
    $parameter=$_GET['parameter'];
}

if(file_exists('controller/'.$controller.'')){
    include('controller/'.$controller.'');
    $class=$controller.'controller';
    $obj=new $class();

    if(method_exists($class,$function)){
        if($parameter){
            $obj->$function();
        }else{
            $obj->$function();
        }
    }else{
        echo'<h2>function not found</h2>';
    }
}else{
    echo'<h2>Controller not found</h2>';
}


?>