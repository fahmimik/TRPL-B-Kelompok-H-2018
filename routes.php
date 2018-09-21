<?php
function call($controller, $action){

require_once('controllers/c_'.$controller.'.php');

switch ($controller) {

case 'home':
$controller=new HomeController();
require_once('models/m_home.php');
break;

  case 'login':
  $controller= new LoginController();
  require_once('models/m_login.php');
  break;

  case 'register':
  $controller=new RegisterController();
  require_once('models/m_register.php');
  break;



// tinggal nambah case yang laen


}

$controller ->{ $action }();



}

$controllers = array(

'login' => ['login','error','authen',
],
'register' => ['register', 'addRegister', 'error',
],
'home' => [ 'home','homeDoctor','homePatient',
  ],

);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}


 ?>
