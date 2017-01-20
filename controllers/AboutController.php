<?
include_once ROOT. '/models/ModelAbout.php';

class AboutController 
{

    public static function actionList () 
    {    
        
        $model_about = new About();
        $textlist = array();
        $textList = $model_about->getTextList();
        return $textList;
  
    }
    
    public static function actionViewItem ($id) 
    {
        global $textItem;
        if($id) {
            $textItem = $model_about->getTextItemById($id);
        }
         echo '<br>'.$id;
   
        var_dump($textItem); 

         return true;
    }


    public static function actionEditTableAbout()
    {

        $modelAbout = new About();
        $modelAbout->updateItemAbout();
        header('Location: adminpanel');
        return true;

    }




}



?>