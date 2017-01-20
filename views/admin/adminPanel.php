<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Administrator Panel</title>
    <link rel="stylesheet" href="/views/admin/css/style.css">
</head>

<body>
    <div class="wrapper-panel">
        <h3>Welcome to Admin Panel!</h3>
        <h4>You can do all CRUD operations, that you want.</h4>

        <form id="logout-form" action="logout" method ="post">
            <button id="logout" type="submit">Log out</button>
        </form>

<!----------------------EDIT TABLE PORTFOLIO------------------------------->

        <div class="editBlock edit-portfolio">
            <h4>Edit portfolio</h4>

            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Site URL</th>
                    <th>Image name</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>
                <?php foreach ( $portfolioList as $portfolioItem):?>


                <tr>
                    <form action = "updatePortfolio" method="POST" >
                    <td>
                        <input type="hidden" name="id" value="<?php echo $portfolioItem['id'] ?>">
                        <?php echo $portfolioItem['id'];?>
                    </td>
                    <td>
                        <input type="text" name="site_url" value = "<?php echo $portfolioItem['site_url'];?>"/>
                    </td>
                    <td>
                        <input type="text" name="image_url" value = "<?php echo $portfolioItem['image_url'];?>"/>
                    </td>
                    <td>
                        <input type="text" name="description" value = "<?php echo $portfolioItem['description'] ;?>">
                    </td>
                    <td>
                        <input type="submit" id="edit" value = "&#9998;">
                    </td>
                    </form>
                    <td>

                        <form action="deletePortfolio" method="POST">
                            <input type="hidden" name="id" value="<?php echo $portfolioItem['id'] ?>">
                            <input type="submit" value="&#10008;">
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>

            </table>

            <h4>Add</h4>
            <form name="addform" action="addToPortfolio" method="POST">
                <table>
                    <tr>
                        <td>Image name</td>
<!--                        <form id="edit-portfolio" action="loadToPortfolio" method="post" enctype='multipart/form-data'>-->
<!--                            <p class="load-block">-->
<!--                                <input type="file" name="uploadfile" />-->
<!--                                <input type="submit" value="Load" />-->
<!--                            </p>-->
<!--                        </form>-->
                        <td><input type="text" name="image_url" value="" required="required"/></td>
                    </tr>
                    <tr>
                        <td>Site URL</td>
                        <td><input type="text" name="site_url" value="" required="required"/></td>
                    </tr>

                    <tr>
                        <td>Description</td>
                        <td><textarea name="description" required="required"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Save"></td>
                        <td><button type="button" >Cansel</button></td>
                    </tr>
                </table>
            </form>
 <!--------------------------load file to portfolio-------------------------------->

            <form id="edit-portfolio" action="loadToPortfolio" method="post" enctype='multipart/form-data'>
                <p class="load-block">
                    <input type="file" name="uploadfile" />
                    <input type="submit" value="Load" />
                </p>
            </form>
        </div>

<!----------------------EDIT TABLE TEAM------------------------------->

        <div class="editBlock edit-team">
            <h4>Edit team</h4>
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Employee's photo</th>
                    <th>Employee's name</th>
                    <th>Job</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>

                <?php foreach ($teamList as $teamItem ):?>
                <tr>
                    <form action="updateTeam" method="POST">
                    <td>
                        <input type="hidden" name="id_team" value="<?php echo $teamItem['id_team'] ?>">
                        <?php echo $teamItem['id_team']; ?>
                    </td>
                    <td>
                        <input type="text" name="photo_url" value = "<?php echo $teamItem['photo_url']; ?>"/>
                    </td>
                    <td>
                        <input type="text" name="name" value = "<?php echo $teamItem['name']; ?>"/>
                    </td>
                    <td>
                        <input type="text" name="job" value = "<?php  echo $teamItem['job']; ?>"/>
                    </td>
                    <td>
                        <input type="submit" id="edit" value="&#9998;" />
                    </td>
                    </form>
                    <td>
                        <form action="deleteTeam" method="POST">
                            <input type="hidden" name="id_team" value="<?php echo $teamItem['id_team'] ?>"/>
                            <input type="submit" value="&#10008;"/>
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>


            <h4>Add to team</h4>
            <form name="addformTeam" action="addToTeam" method="POST">
                <table>
                    <tr>
                        <td>Photo URL</td>
                        <td><input type="text" name="photo_url" value="" required="required" /></td>
                    </tr>
                    <tr>
                        <td>Employee name</td>
                        <td><input type="text" name="name" value="" required="required" /></td>
                    </tr>
                    <tr>
                        <td>Employee job</td>
                        <td><input type="text" value="" name="job" required="required"/></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Save"></td>
                        <td><button type="button">Cansel</button></td>
                    </tr>
                </table>
            </form>

<!--------------------------load file to team-------------------------------->

            <form id="edit-team" action="loading.php" method="post" enctype='multipart/form-data'>
                <p class="load-block">
                    <input type="file" name="filename" />
                    <input type="submit" value="Load" />
                </p>
            </form>
<!--                <p class="load-block">-->
<!--                    <input type="file" name="filename" />-->
<!--                    <input type="submit" value="Load" />-->
<!--                </p>-->

        </div>
<!----------------------EDIT TABLE ABOUT----------------------------------------->
        <div class="editBlock edit-text">
            <h4>Edit about us text</h4>
            <form id="edit-about-us"  action="editAbout" method="POST">
                <?php foreach ( $textList as $textItem):?>
                    <label for="about-title">Title</label>
                    <input id="about-title" type="text" name="title" value="<?php echo $textItem['title'];?>" required="required"/>
                    <label for="text-edit">About us</label>
                    <textarea id="text-edit" name="text" required="required"><?php echo $textItem['text'];?></textarea>
                <?php endforeach;?>
                <input id="save-text" type="submit" value = "Ok"/>
            </form>
        </div>
</div>
</body>
</html>