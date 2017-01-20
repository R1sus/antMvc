<?

require_once(ROOT.'/models/ModelPortfolio.php');

class PortfolioController 
{

    public static function actionIndex () 

    {    global $portfolioList;
        $modelPortfolio = new Portfolio();
        $portfolioList = array();
        $portfolioList = $modelPortfolio->getPortfolioList();
         return $portfolioList;

        
    }
    
     public static function actionView ($id) 
    {
        global $portfolioItem;
        if($id) {
            $portfolioItem = $modelPortfolio->getPortfolioItemById($id);
        }
         echo '<br>'.$id;

//        var_dump($portfolioItem);
        return true;
    }


    public function actionDeleteItemPortfolio()
    {
        $id = $_POST['id'];
        if ($id != '') {
            $model = new Portfolio();
            $model-> deleteItemPortfolio($id);
            header('Location: adminpanel');
            return true;
        } else {
            return false;
        }

    }

    public function actionUpdateItemPortfolio()
    {
        $id = $_POST['id'];
        if ($id != '') {
            $model = new Portfolio();
            $model-> updateItemPortfolio($id);
            header('Location: adminpanel');
            return true;
        } else {
            return false;
        }

    }

    public function actionAddItemPortfolio()
    {
        $model = new Portfolio();
        $model-> addItemPortfolio();
        header('Location: adminpanel');

        return true;
    }

    public static function actionLoadFileToPortfolio() {
//        echo "actionLoadFileToPortfolio";
        $model = new Portfolio();
        $model-> loadFile();
        return;
    }



//
//    public static function actionLoadMore()
// {
//    global $portfolioData;
//    $portfolioData = array();
//    $portfolioData = $modelPortfolio->loadMoreImg();
//    return $portfolioData;
//    var_dump($portfolioData);
//    return true;
//}
}



?>