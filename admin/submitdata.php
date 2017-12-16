<?php 
include_once('../functions/generalfunctions01.php');
require_once '../creds/creds.php';
require_once('../dbconn.php');

$val_upload     = isset($_POST['upload']) ? $_POST['upload']: "";
$val_date       = isset($_POST['date']) ? $_POST['date']: "";
$val_user       = isset($_POST['user']) ? $_POST['user']: "";
$val_title      = isset($_POST['title']) ? $_POST['title']: "";
$val_content    = isset($_POST['content']) ? $_POST['content']: "";
$val_tmccontent = isset($_POST['tmctext']) ? $_POST['tmctext']: "";
$val_FILE       = isset($_FILES['newsfile']) ? $_FILES['newsfile']: null;


$val_FILE       = $_FILES['newsfile'];

//var_dump($val_FILE);
//var_dump($_POST);
//var_dump($_FILES);

//var_dump($val_upload);
//var_dump($val_date);
//var_dump($val_user);
//var_dump($val_title);
//var_dump($val_content);
//var_dump($val_tmccontent);


$val_content = ($val_content != "") ? $val_content : $val_tmccontent;

//var_dump($val_content);


switch ($val_upload){
    case 'blog':
        if(($val_title)&&($val_content)){
    
            try{
        
                $dbh->beginTransaction();
                        $sql ="INSERT INTO blogposts (user, title, date, content) 
                                VALUES (?, ?, ?, ?)";
                        $sth = $dbh->prepare($sql);
                        
                        $res = $sth->execute(array($val_user,$val_title,getcurrentdate(),$val_content ));
                        if($res){
                            $dbh->commit();
                            $dbh = null;
                            $sth = null;
                            
                            echo "<pre><span> Your upload was sucessful  </span></pre>
                                  <div  id='preventsubmit' style='display: none;'></div>
                                 ";
                           
                }
            
            }
            catch(PDOException $e){
                        //var_dump($e);
                        $dbh->rollBack();
                        echo "Failed: " . $e->getMessage();
            }
        
        }
                    else{
                       echo "<pre><span> Error: Ensure all fields are completed</span></pre>"; 
                        
                    } 
        
            
    
    
        break;
        
        
    case 'newsletter':
    
    
        $filename = $val_FILE['name'];
        $filetmp_name = $val_FILE['tmp_name'];
        $filetype = $val_FILE['type'];
        //var_dump($filename);
        //var_dump($filetype);
        
        $position= strpos($filetype, "/"); 

        $fileextension= substr($filetype, $position + 1);
        
        $fileextension= strtolower($fileextension);
        //var_dump($fileextension);
        
        $path = 'uploads/';
        
        if($fileextension !='pdf'){
            echo "<pre><span> Error: pdf file expected</span></pre>";
    
            
        }elseif ($val_FILE["error"] > 0){
            
            echo "<pre><span>Error Return Code: " .$val_FILE["error"] . "</span></pre>";
        }
        elseif (file_exists($path. $filename)) {
            
            echo  " <span><pre> Error :".$filename ."  already exists.</span></pre>";
        }
        else{
            
            if (!empty($filename)){
                //var_dump($path.$filename);
                if (move_uploaded_file($filetmp_name, $path.$filename)) {
                    //echo 'Uploaded!';
                    
                    
                    if (!empty($val_title)){
                        try{
    
                            $dbh->beginTransaction();
                                    $sql ="INSERT INTO newsletters (user, title, date, newsfile) 
                                            VALUES (?, ?, ?, ?)";
                                    $sth = $dbh->prepare($sql);
                                    
                                    $res = $sth->execute(array($val_user,$val_title,getcurrentdate(),$path.$filename ));
                                    if($res){
                                        $dbh->commit();
                                        $dbh = null;
                                        $sth = null;
                                        
                                        echo "<pre><span> File upload was sucessful  </span></pre>
                                              <div  id='preventsubmit' style='display: none;'></div>
                                             ";
                                       
                            }
                        
                        }
                        catch(PDOException $e){
                                    //var_dump($e);
                                    $dbh->rollBack();
                                    echo "Failed: " . $e->getMessage();
                        } 
                        
                        
                    }
                    else{
                       echo "<pre><span> Error: Ensure all fields are completed</span></pre>"; 
                        
                    }
                    
                    //
                    
                }
            }
            else{
                       echo "<pre><span> Error: No File selected</span></pre>"; 
                        
                    }
            
        }
            
        
        
    
    
        break;
        
        
    case 'workshop':
    
        if(($val_title)&&($val_content)){
        
            try{
        
                $dbh->beginTransaction();
                        $sql ="INSERT INTO workshops (user, title, date, content) 
                                VALUES (?, ?, ?, ?)";
                        $sth = $dbh->prepare($sql);
                        
                        $res = $sth->execute(array($val_user,$val_title,getcurrentdate(),$val_content ));
                        if($res){
                            $dbh->commit();
                            $dbh = null;
                            $sth = null;
                            
                            echo "<pre><span> Your upload was sucessful  </span></pre>
                                  <div  id='preventsubmit' style='display: none;'></div>
                                 ";
                           
                }
            
            }
            catch(PDOException $e){
                        //var_dump($e);
                        $dbh->rollBack();
                        echo "Failed: " . $e->getMessage();
            } 
        }
        else{
            echo "<pre><span> Error: Ensure all fields are completed</span></pre>"; 
                        
            } 
        
    
        break;
        
        
    default:
    
        echo "<pre><span> Error: Unexpected Upload Type</span></pre>";
    
    
    
    
    
}



?>