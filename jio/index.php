<?php
/*
    *   WebDeveloper - Prabhat Chand Zip
    *   Developer: Prabhat Kumar Chand
    *   MadhubanimIx.Com
*/
// Include prabhat files of the quiz
require_once 'prabhat/contact/6350080256/prabhat.php';
session_name('quiz_'.$prabhat['quiz_number']);
session_start();

// Count Total Number Questions
$total_questions = count($questions);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <title><?php echo $prabhat['TITLE'];?> | <?php echo $prabhat['DOMAINNAME'];?></title>
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <meta name='subtitle' content='<?php echo $prabhat['SUBTITLE'];?>'/>
        <meta name='subject' content='<?php echo $prabhat['SUBJECT'];?>'/>
        <meta name="description" content="<?php echo $prabhat['DESCRIPTION'];?>"/>
        <meta name="keywords" content="<?php echo $prabhat['KEYWORDS'];?>"/>
        <meta name='target' content='all'/>
        <meta name='HandheldFriendly' content='True'/>
        <meta name='MobileOptimized' content='320'/>
        <meta name="robots" content="index, follow"/>
        <meta name="revisit-after" content="30 days"/>
        <meta name="copyright" content="<?php echo $prabhat['DOMAINNAME'];?>"/>
        <meta name="distribution" content="global"/>
        <meta name="language" content="english"/> 
        <meta name="rating" content="safe for kids"/>
        <meta http-equiv="Cache-control" content="public"/>
        <meta name='Classification' content='Business'/>
        <meta http-equiv='Expires' content='0'/>
        <meta http-equiv='Pragma' content='no-cache'/>
        <meta http-equiv='Cache-Control' content='no-cache'/>
        <meta http-equiv='imagetoolbar' content='no'/>
        <meta http-equiv='x-dns-prefetch-control' content='off'/>
        <meta name="viewport" content="initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="../common_pages/images/favicon.ico"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../common_pages/style.css" type="text/css" media="screen" />
        <style type="text/css">
            .adslot_1 { display:inline-block; width: 320px; height: 50px; }
            @media (max-width: 400px) 
            {
             //.adslot_1 { display: none; } 
             #left-side-bar{display: none;}
             #right-side-bar{display: none;}
             #hidden-bottom{display: block; clear: both;} 
             #break-overloadded{display: none;}
            }
            @media (min-width:500px) 
            { 
                .adslot_1 { width: 468px; height: 60px; } 
                #hidden-bottom{display: none;}
                #break-overloadded{display: block; clear: both;}
            }
            @media (min-width:800px) 
            { 
                .adslot_1 { width: 728px; height: 90px; } 
                #hidden-bottom{display: none;}
                #break-overloadded{display: none;}
            }
            img.quiz-image
            {
                width: 100%;
            }

        </style>
        
    </head>
    <body>
            
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
