<?php
function call($controller, $action){

  require_once('controllers/c_'.$controller.'.php');

  switch ($controller) {

    case 'home':
    $controller=new HomeController();
    require_once('models/m_home.php');
    require_once('models/m_admin.php');
    require_once('models/m_doctor.php');
    require_once('models/m_patient.php');
    break;

    case 'login':
    $controller= new LoginController();
    require_once('models/m_login.php');
    break;

    case 'register':
    $controller=new RegisterController();
    require_once('models/m_register.php');
    break;

    case 'admin':
    $controller=new AdminController();
    require_once('models/m_admin.php');
    require_once('models/m_poli.php');
    // require_once('models/m_waktu.php');
    break;

    case 'poli':
    $controller=new PoliController();
    require_once('models/m_poli.php');
    break;

    case 'patient':
    $controller=new PatientController();
    require_once('models/m_patient.php');
    require_once('models/m_admin.php');
    break;

    case 'doctor':
    $controller=new DoctorController();
    require_once('models/m_doctor.php');
    break;


    // tinggal nambah case yang laen


  }

  $controller ->{ $action }();
}
call($controller,$action);
// $controllers = array(
//
//   'login' => ['login','error','authen',
//   ],
//   'register' => ['register', 'addRegister', 'error',
//   ],
//   'home' => [ 'home','doctorHome','patientHome', 'about', 'showDoctorJadwalHome',
//   ],
//   'admin' => ['showAllDoctor' , 'addDoctor', 'tampilAddDoctor', 'deleteDoctor', 'editDoctor' , 'editDataDoctor', 'showAllPatient', 'showAllJadwalDoctor',
//   'addJadwalDoctor', 'addDataJadwalDoctor', 'deleteJadwalDoctor', 'editJadwalDoctor', 'editDataJadwalDoctor',
//   ],
//   'poli' => [ 'showAllPoli' , 'poliAddPoli' , 'addPoli' , 'poli' , 'deletePoli' , 'editPoli' , 'editDataPoli' ,
//   ],
//   'doctor' => [ 'showDoctorProfile' , 'editDoctorProfile', 'editDataDoctor',
//   ],
//   'patient' => [ 'showPatientProfile', 'editPatientProfile', 'editDataPatient' , 'tampilAddAppointment',
//   ],
//
// );
//
// if (array_key_exists($controller, $controllers)) {
//   if (in_array($action, $controllers[$controller])) {
//     call($controller,$action);
//   } else {
//     call($controller,'error');
//   }
//
// } else {
//   call($controller,'error');
// }
?>
