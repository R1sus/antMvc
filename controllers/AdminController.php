<?
require_once(ROOT . '/controllers/PortfolioController.php');
require_once(ROOT . '/controllers/TeamController.php');
require_once(ROOT . '/controllers/AboutController.php');
require_once(ROOT . '/models/ModelAdmin.php');


Class AdminController
{
    public static function actionLoginForm()
    {
        session_start();
        if (isset($_SESSION['session_id'])) {
            header("location: adminpanel");
        } else {
            require_once(ROOT . '/views/admin/loginform.php');
        }
        return false;
    }

    public static function actionLogin()
    {
            $modelAdmin = new Admin();
            $login = $modelAdmin->Login();
            echo $login;
    }

    public static function actionLogoutForm()
    {

        $modelAdmin = new Admin();
        $logout = $modelAdmin->Logout();
//        require_once(ROOT . '/views/admin/loginform.php');
//        echo "TEst";
        return $logout;
    }

    public static function actionAdminPanel()
    {

//        echo "we're in action AdminPanel  ";
        $portfolioList = PortfolioController::actionIndex();
        $teamList = TeamController::actionList();
        $textList = AboutController::actionList();

        session_start();
        if (!isset($_SESSION['session_id'])) {
            header("location: admin");
            exit;
        } else {
            print_r(date('U'));
            require_once(ROOT . '/views/admin/adminPanel.php');
            return true;
        }

    }


    public static function actionEditTablePortfolio($action, $id = null)
    {

        $modelPortfolio = new Portfolio();

        switch ($action) {
            case "add":
                $modelPortfolio->addItemPortfolio();
//            header('Location: adminpanel');
                break;
            case "update":
                $modelPortfolio->updateItemPortfolio();
//            header('Location: adminpanel');
                break;
            case "delete":
                $modelPortfolio->deleteItemPortfolio($id);
//            header('Location: adminpanel');
                break;
            default:
                // PortfolioController::actionIndex();
                break;
            // echo "hgjhgj";
        }
    }


    public static function actionEditTableTeam($action,$id = null)
    {


        $modelTeam = new Team();


        switch ($action) {
            case "add":
                $modelTeam->addItemTeam();
//            header('Location: adminpanel');
                break;
            case "update":
                $modelTeam->updateItemTeam($id);
//            header('Location: adminpanel');
                break;
            case "delete":
                $modelTeam->deleteItemTeam($id);
//            header('Location: adminpanel');
                break;
            default:
                // PortfolioController::actionIndex();
                break;
            // echo "hgjhgj";
        }
    }





}


?>