<?php

//header('location: admin/login.php');
            if(isset($_POST["username"])){
                
            $user = $_POST["username"];
            $pass = $_POST["userpass"];
            
            include_once('../creds/creds.php');
        
            require_once('../dbconn.php');
            session_start();
            try {
            $sql = 'SELECT *
                    FROM uusers
                     ';
            $sth = $dbh->prepare($sql);
            
            $ress = $sth->execute( );
            
            }
            catch (PDOException $e) {
            print $e->getMessage();
            }
            
            if($ress == true){
                $logg = false;
                
                
                $data = $sth->fetchAll();
                foreach($data as $tdata){
                    if ($tdata["username"]==$user && $tdata["userpass"]==$pass){
                        $logg = true;
                        break;
                        
                    }
                    else{
                        $logg = false;
                        
                    }
                        
                    }
                    if($logg==true){
                        $_SESSION["activeuser"] = $user;
                        //var_dump($logg);
                        header('location: index.php');
                    }else{
                        //echo('WRONG PASSWORD');
                        $_SESSION["activeuser"] = "";
                        header('location: index.php');
                    }
                }
                //var_dump($data);}
            }
          
            
            



?>