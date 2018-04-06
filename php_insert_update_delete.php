<?php

$dsn = 'mysql:host=localhost;dbname=smart-team';
$username = 'root';
$password = '';

try{
    // Connect To MySQL Database
    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    
    echo 'Not Connected '.$ex->getMessage();
    
}

$id_mohon = '';
$no_tiket = '';
$sekolah = '';
$kod_sekolah = '';

function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['id_mohon'];
    $posts[1] = $_POST['no_tiket'];
    $posts[2] = $_POST['sekolah'];
    $posts[3] = $_POST['kod_sekolah'];
    
    return $posts;
}

//Search And Display Data 

if(isset($_POST['search']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
        echo 'Enter The User Id To Search';
    }  else {
        
        $searchStmt = $con->prepare('SELECT * FROM permohonan WHERE id_mohon = :id_mohon');
        $searchStmt->execute(array(
                    ':id_mohon'=> $data[0]
        ));
        
        if($searchStmt)
        {
            $mohon = $searchStmt->fetch();
            if(empty($mohon))
            {
                echo 'No Data For This Id';
            }
            
            $id_mohon    = $mohon[0];
            $no_tiket = $mohon[1];
            $sekolah = $mohon[2];
            $kod_sekolah  = $mohon[3];
        }
        
    }
}

// Insert Data

if(isset($_POST['insert']))
{
    $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]))
    {
        echo 'Enter The User Data To Insert';
    }  else {
        
        $insertStmt = $con->prepare('INSERT INTO permohonan(no_tiket,sekolah,kod_sekolah) VALUES(:no_tiket,:sekolah,:kod_sekolah)');
        $insertStmt->execute(array(
                    ':no_tiket'=> $data[1],
                    ':sekolah'=> $data[2],
                    ':kod_sekolah'  => $data[3],
        ));
        
        if($insertStmt)
        {
                echo 'Data Inserted';
        }
        
    }
}

//Update Data

if(isset($_POST['update']))
{
    $data = getPosts();
    if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]))
    {
        echo 'Enter The User Data To Update';
    }  else {
        
        $updateStmt = $con->prepare('UPDATE permohonan SET no_tiket = :no_tiket, sekolah = :sekolah, kod_sekolah = :kod_sekolah WHERE id_mohon = :id_mohon');
        $updateStmt->execute(array(
                    ':id_mohon'=> $data[0],
                    ':no_tiket'=> $data[1],
                    ':sekolah'=> $data[2],
                    ':kod_sekolah'  => $data[3],
        ));
        
        if($updateStmt)
        {
                echo 'Data Updated';
        }
        
    }
}

// Delete Data

if(isset($_POST['delete']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
        echo 'Enter The User ID To Delete';
    }  else {
        
        $deleteStmt = $con->prepare('DELETE FROM permohnan WHERE id_mohon = :id_mohon');
        $deleteStmt->execute(array(
                    ':id_mohon'=> $data[0]
        ));
        
        if($deleteStmt)
        {
                echo 'User Deleted';
        }
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP (MySQL PDO): Insert, Update, Delete, Search</title>  
    </head>
    <body>
        <form action="php_insert_update_delete.php" method="POST">

            <input type="text" name="id_mohon" placeholder="No Id" value="<?php echo $id_mohon;?>"><br><br>
            <input type="text" name="no_tiket" placeholder="Nombor Tiket" value="<?php echo $no_tiket;?>"><br><br>
            <input type="text" name="sekolah" placeholder="Nama Sekolah" value="<?php echo $sekolah;?>"><br><br>
            <input type="text" name="kod_sekolah" placeholder="Kod Sekolah" value="<?php echo $kod_sekolah;?>"><br><br>
            
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Search">

        </form>
        
    </body>    
</html>