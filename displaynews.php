    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>&nbsp;</h4>
                <h1 class="size-50">Beckley Small Business <br /> Newsletters. Download formats</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">


<?php 

try {
            $sql = 'SELECT *
                    FROM newsletters
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
        
        foreach ($data as $newsdata){
            
            
            $newstitle   = $newsdata['title'];
            $newsuser    = $newsdata['user'];
            $newsdate    = $newsdata['date'];
            $newscontent = $newsdata['newsfile']; 
            
            

        


?>    
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?php echo date_convert($newsdate); ?></p>
                            <!--<h3>Intern</h3>-->
                            <h4>Uploaded by  <?php echo $newsuser; ?></h4>
                            
                            <input type="hidden" name="date" id="date" value="<?php echo date_convert($newsdate);; ?>"/>
                            <input type="hidden" name="title" id="title" value="<?php echo $newstitle; ?>"/>
                            <input type="hidden" name="user" id="user" value="<?php echo $newsuser; ?>"/>
                            <input type="hidden" name="content" id="content" value="<?php echo $newscontent; ?>"/>
                            
                            <p><strong><a target="_blank" href="admin/<?php echo $newscontent; ?>">Download </a></strong>
                            <br><?php echo $newstitle ;?></p>
                            </form>    
                        </div>
                    </li>
                    
                    



    
    
    
    
    
<?php 
            
        }

    }
    else{
        
        echo "<pre><span> No Newsletters have been uploaded</span></pre>";
    }           
 
}
?>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->