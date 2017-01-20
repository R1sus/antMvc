<?


require_once(ROOT . '/GeneralModel.php');

class Portfolio extends GeneralModel
{

    public $db;

    public function __construct()
    {
        $this->db = parent::getConnection();

    }

    public function getPortfolioItemById($id)
    {

        $result = $this->db->prepare('SELECT * FROM portfolio WHERE id=' . $id);

        $portfolioItem = $result->fetch();
        return $portfolioItem;

    }


    public function getPortfolioList()
    {


        $portfolioList = array();
        $result = $this->db->prepare("SELECT * FROM portfolio ORDER BY id  ");
        $result->execute(array());
        $i = 0;
        while ($row = $result->fetch()) {
            $portfolioList[$i]['id'] = $row['id'];
            $portfolioList[$i]['image_url'] = $row['image_url'];
            $portfolioList[$i]['description'] = $row['description'];
            $portfolioList[$i]['site_url'] = $row['site_url'];
            $i++;
        }
        return $portfolioList;
    }


    // function add new

    public function addItemPortfolio()
    {

        // $db = Db::getConnection();
        $stmt = $this->db->prepare("INSERT INTO portfolio (site_url,image_url,description) VALUES (:site_url, :image_url, :description)");
        // $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':site_url', $_POST['site_url'], PDO::PARAM_STR);
        $stmt->bindParam(':image_url', $_POST['image_url'], PDO::PARAM_STR);
        $stmt->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
        // $site_url = $_POST['site_url'];
        // $image_url = $_POST['image_url'];
        // $description =  $_POST['description'];
        // $newId = $pdo->lastInsertId();
        $stmt->execute();

    }

// function delete data by id
    public function deleteItemPortfolio($id)
    {
        if ($id != '') {
//            var_dump($id);
            $stmt = $this->db->prepare('DELETE FROM portfolio WHERE id=:id');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } else {
            return false;
        }
//        print_r($stmt);
//        var_dump($id);
        // $stmt = $pdo->prepare($sql);
//  $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
//        $stmt->execute();
        // $deleteItem =  $stmt -> fetch();
    }

// function update data by id

    public function updateItemPortfolio($id)
    {

        if ($id != '') {
            $query = "UPDATE portfolio SET site_url= :site_url, image_url=:image_url, description= :description WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':site_url', $_POST['site_url'], PDO::PARAM_STR);
            $stmt->bindParam(':image_url', $_POST['image_url'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
//            echo "test";
            // header( 'Location: '.$_SERVER['PHP_SELF'] );
            // exit();
        } else {
            return false;
        }
    }

    public function loadFile()
    {

//        $dir  = "views/layout/img/uploads";
//        if(file_exists($dir)) {
//            echo "директория существует";
//
//        }
//        else {
//            mkdir("views/layout/img/uploads", 0777);
//        }

//        var_dump( $imageinfo);
        $blacklist = array(".php", ".phtml", ".php3", ".php4");

        foreach ($blacklist as $item) {
            if (preg_match("/$item\$/i", $_FILES['uploadfile']['name'])) {
                echo "We do not allow uploading PHP files\n";
                return false;
            }
        }

        $path = "views/layout/img/";
        $uploadfile = $path . basename($_FILES['uploadfile']['name']);
        $imageinfo = getimagesize($_FILES['uploadfile']['tmp_name']);

//        if($_FILES['uploadfile']['type'] != "image/png" && $_FILES['uploadfile']['type']!= "image/jpeg")


        if ($imageinfo['mime'] != 'image/png' && $imageinfo['mime'] != 'image/jpeg') {
            echo "Sorry,wrong image type";
        } else {
            if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
                echo "<h3>Файл успешно загружен на сервер</h3>";
            } else {
                echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
            }
        }
        print_r($_FILES);


        if ($uploadfile != '') {
            $stmt = $this->db->prepare('INSERT into portfolio ' );
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } else {
            return false;
        }




        return true;

    }


    public function loadMoreImg()
    {

        $countView = (int)$_POST['count_add'];
        $startIndex = (int)$_POST['count_show'];

        $portfolioData = array();

        $result = $this->db->prepare("SELECT * FROM portfolio  LIMIT $startIndex, $countView");
        $result->execute(array());

        while ($row = $result->fetch()) {
            $portfolioData[] = $row;
        }

        if (empty($portfolioData)) {

            echo json_encode(array(
                'result' => 'finish'
            ));
        } else {

            echo json_encode(array(
                'result' => 'success',
                'html' => 'html'
            ));
        }
        return $portfolioData;


    }


}


?>