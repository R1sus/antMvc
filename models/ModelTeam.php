<?


require_once(ROOT.'/GeneralModel.php');

class Team extends GeneralModel
{
    public $db;
    public function __construct() {
    $this->db = parent::getConnection();

} 

    public function getTeamItemById($id)
     {
        
        // $db = Db::getConnection();
        
        $result = $this->db->prepare( 'SELECT * FROM team WHERE id_team='.$id );
        $teamItem =  $result -> execute(array());
        return $teamItem;
        
        }





    public function getTeamList()
    {
       
        $teamList = array ();
        $result = $this->db->prepare( 'SELECT * FROM Team');
        $result -> execute(array());
       
        $i = 0;
        
        while ($row = $result->fetch()) {
            
            $teamList[$i]['id_team'] = $row['id_team'];
            $teamList[$i]['photo_url'] = $row['photo_url'];
            $teamList[$i]['name'] = $row['name'];
            $teamList[$i]['job'] = $row['job'];
            $i++;
            
      
        }

            return  $teamList;
    }


///////////////////////////////FUNCTIONS FOR EDIT TEAM TABLE\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
  public  function addItemTeam()
{ 
 
  // $db = Db::getConnection();
  $stmt = $this->db->prepare("INSERT INTO team (photo_url,name,job) VALUES (:photo_url,:name,:job)");
  // $stmt = $pdo->prepare($sql); 
  $stmt->bindParam(':photo_url', $_POST['photo_url'], PDO::PARAM_STR);
  $stmt->bindParam(':name',  $_POST['name'],PDO::PARAM_STR);
  $stmt->bindParam(':job', $_POST['job'],PDO::PARAM_STR);
  // $site_url = $_POST['site_url']; 
  // $image_url = $_POST['image_url']; 
  // $description =  $_POST['description'];
  // $newId = $pdo->lastInsertId();
  $stmt->execute();
  // header( 'Location: adminpanel' );
  // exit();

}
// function delete data by id
 public  function deleteItemTeam($id)
{
    if ($id != '') {
        $stmt = $this->db->prepare("DELETE FROM team WHERE id_team=:id");
        $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
        $stmt->execute();
//        echo "test delete item team";
        return true;
        } else {
            return false;
            }
}

// function update data by id

 public  function updateItemTeam($id)
{ 
  // $title = mysql_escape_string( $_POST['title'] ); 
  // $description = mysql_escape_string( $_POST['description'] );
    if ($id != '') {
        $query = "UPDATE team SET photo_url= :photo_url, name=:name, job= :job WHERE id_team = :id_team";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':photo_url', $_POST['photo_url'], PDO::PARAM_STR);
        $stmt->bindParam(':name',  $_POST['name'],PDO::PARAM_STR);
        $stmt->bindParam(':job', $_POST['job'],PDO::PARAM_STR);
        $stmt->bindParam(':id_team', $id, PDO::PARAM_INT);
        $stmt->execute();
//        print_r($stmt);
//        echo "test";
        return true;
    }
    else {
        return false;
    }

} 


}




?>