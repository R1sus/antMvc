<?

require_once(ROOT.'/GeneralModel.php');

class Admin extends GeneralModel
{

    public $db;

    public function __construct()
    {
        $this->db = parent::getConnection();
    }

    public function Login()
//        isset($_POST['login']) &&
    {
        if ( !empty($_POST['username']) && !empty($_POST['password'])) {
            $salt = 'e5d7';
            $username = $_POST['username'];
//            print_r($username);
            $password = crypt($_POST['password'], $salt);
            $result = $this->db->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');
            $result->bindParam(':username', $username);
            $result->bindParam(':password', $password);
            $result->execute();
            $success = $result->fetch()[0];
//            print_r($success);

            if ($success != false) {
                session_start();
                $_SESSION['session_id'] = rand(0, 32700);
                return true;
            } else {
//                echo "test false login";
                return false;
            }
        }
        else {
            echo "Заполните поля";
            return false;
        }
//
//        return true;
    }


    public function Logout()
    {
        session_start();
        session_destroy();
        header("location: admin");
        exit;
    }


    public function validateFormValue()
    {
//        $_POST = array();
        $arr = $_POST;
        $data = array();
        foreach ($arr as $key => $value) {
            if ($value != '') {
                $data[$key] = htmlspecialchars(strip_tags(stripslashes(trim($value))));
            } else {
                header("Location: adminpanel");
            }
        }
        return $data;
    }
}

?>