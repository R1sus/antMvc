<?
require_once(ROOT.'/controllers/PortfolioController.php');
require_once(ROOT.'/controllers/TeamController.php');
require_once(ROOT.'/controllers/AboutController.php');

class MainController {

    public function actionIndex() {
        
        //  echo "we are in main controller actionIdex";
       
        $portfolioList = PortfolioController::actionIndex();

        $teamList = TeamController::actionList(); 

        $textList = AboutController::actionList(); 
        
        require_once(ROOT.'/views/layout/main_layout.php');
       
        return true;

    }
    public function actionPort() {

        $portfolioList = PortfolioController::actionIndex();
        require_once(ROOT . '/views/portfolio_page/portfolio.php');
        return true;
    }

    public function ActionPostMail () {
        $adminemail="nadyabal@gmail.com";  // e-mail admin
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sbj=$_POST['subject'];
        $msg=$_POST['message'];
        $headers =  'From:'.$email . "\r\n" .
                    'Name:'.$name . "\r\n" .
                    'X-Mailer: PHP/' . phpversion().
                    'MIME-Version: 1.0' . "\r\n".
                    'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        mail($adminemail, $sbj, $msg, $headers);
        echo  json_encode("test");

   }

} 
?>