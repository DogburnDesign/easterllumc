<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'www.llumc.org/easter/') == true){
        header('Location: http://llumc.org/easter/');
    }
?>
<!DOCTYPE html>
<html>
    <!-- START HEADER.PHP -->
    <?php include 'includes/header.php'?>
        <!-- END HEADER.PHP -->
        
        <div class="container llumc-easter-event-list">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="easter-list-header">Holy Week Schedule:</h1>
                </div>
            </div>
            
        </div>
    <!-- FOOTER.PHP -->
        <?php include 'includes/footer.php' ?>
    <!-- END FOOTER.PHP -->
</html>