<!DOCTYPE html>
<?php
$FAQ = simplexml_load_string(file_get_contents("FAQ/FAQ.xml")) or die("Error: Cannot create object");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>African Bush Camps Foundation</title>
        
        <script type="text/javascript" src="script/sidebar.js"></script>
        
        <link rel="stylesheet" href="style/FAQ.css"/>
        
    </head>
    
    
    <body style="margin-top: 2cm;">
        <div class="questionbox">
            <h1 class="Q title">Frequently Asked Questions</h1>
            <?php foreach ($FAQ->question as $question): ?>
                <h2 class="Q Qtitle"> 
                    <?php echo $question->title; ?>
                </h2>
                <h3 class="Q Qsubtitle"> 
                    <?php echo $question->subtitle; ?>
                </h3>
                <t1 class="Q Qtext"> 
                    <?php echo $question->text; ?>
                </t1>
                <div class="Q imagebox">
                     <img class="separatorimage" src="content/images/divider.png">
                    </img>
                </div>
            <?php endforeach ?>
            
        </div>
         

    </body>
</html>
