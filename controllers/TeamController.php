<?
include_once ROOT. '/models/ModelTeam.php';

class TeamController 
{

    public static function actionList () 
    {    
        global $teamList;
        $modelTeam = new Team();
        $teamList = array();
        $teamList = $modelTeam->getTeamList();
        return $teamList;
  
    }
    
    public static function actionViewItem ($id) 
    {
        global $teamItem;
        $modelTeam = new Team();
        if($id) {
            $teamItem = $modelTeam->getTeamItemById($id);
        }
         echo '<br>'.$id;
   
        var_dump($teamItem); 

         return true;
    }

    public function actionUpdateItemTeam()
    {
        $id = $_POST['id_team'];
        if ($id != '') {
            $model = new Team();
            $model-> updateItemTeam($id);
            header('Location: adminpanel');
            return true;
        } else {
            return false;
        }

    }

    public function actionDeleteItemTeam()
    {
        $id = $_POST['id_team'];
        if ($id != '') {
            $model = new Team();
            $model-> deleteItemTeam($id);
            header('Location: adminpanel');
            return true;
        } else {
            return false;
        }

    }

    public function actionAddItemTeam()
    {
        $model = new Team();
        $model-> addItemTeam();
        header('Location: adminpanel');

        return true;
    }





}



?>