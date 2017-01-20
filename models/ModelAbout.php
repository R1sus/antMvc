<? 

require_once(ROOT.'/GeneralModel.php');

class About extends GeneralModel
 {  
    public $db;
    public function __construct(){
    $this->db = parent::getConnection();
    }

  
    public function getTextItemById($id)
     {
   
        // $db = Db::getConnection();
        $result = $this->db->prepare( 'SELECT * FROM About_us WHERE id='.$id );
        $textItem =  $result -> execute(array());
        return $textItem;
     
        }





    public  function getTextList()
    {
        // $db = Db::getConnection();
        $textList = array ();
        $result = $this->db->prepare( "SELECT * FROM About_us " );
        $result -> execute(array());
        $i = 0;
        
        while ($row = $result->fetch()) {
            
            $textList[$i]['id'] = $row['id'];
            $textList[$i]['title'] = $row['title'];
            $textList[$i]['text'] = $row['text'];
            $i++;
      
        }
            
            return  $textList;
    }

    // function update data by id

 public function updateItemAbout()
{ 

    if ($_POST['title']!="" && $_POST['text']!="") {
        $query = "UPDATE About_us SET title= :title, text=:text";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
        $stmt->bindParam(':text', $_POST['text'], PDO::PARAM_STR);
//    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();
    }
  // header( 'Location: '.$_SERVER['PHP_SELF'] );
  // exit();
} 

}
?>