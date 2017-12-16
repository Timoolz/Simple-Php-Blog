    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>&nbsp;</h4>
                <h1 class="size-50">The Beckley <br /> Blog</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">


<?php 

try {
            $sql = 'SELECT *
                    FROM blogposts
                    order by date ';
            $sth = $dbh->prepare($sql);
            
            $ress = $sth->execute();
            
}
catch (PDOException $e) {
    print $e->getMessage();
}

if($ress == true){
                
    $data = $sth->fetchAll();
    //var_dump($data); 
    
    if(!empty($data)){
        
        foreach ($data as $blogdata){
            
            
            $blogtitle   = $blogdata['title'];
            $bloguser    = $blogdata['user'];
            $blogdate    = $blogdata['date'];
            $blogcontent = $blogdata['content']; 
            
            

        


?>    
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo date_convert($blogdate); ?></p>
                            <!--<h3>Intern</h3>-->
                            <h4>Uploaded by  <?php echo $bloguser; ?></h4>
                            <form action="blogview.php" method="post">
                            <input type="hidden" name="date" id="date" value="<?php echo date_convert($blogdate);; ?>"/>
                            <input type="hidden" name="title" id="title" value="<?php echo $blogtitle; ?>"/>
                            <input type="hidden" name="user" id="user" value="<?php echo $bloguser; ?>"/>
                            <input type="hidden" name="content" id="content" value="<?php echo $blogcontent; ?>"/>
                            <input type="submit" value="<?php echo $blogtitle?>" />
                            <!--<p><strong><a target="_blank" href="blogview.php"></a></strong>-->
                            </form>    
                        </div>
                    </li>


    
    
    
    
    
<?php 
            
        }

    }
    else{
        
        echo "<pre><span> No Blogs Exist</span></pre>";
    }           
 
}
?>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->