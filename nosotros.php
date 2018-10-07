<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aureus</title>
        <?php include ('include/head.html') ?>
    </head>
    <body class="khaki-color-body">
        
        
        <!-- Header Area Start Here -->
        <header>
          <?php include ('include/header.html') ?>  
        </header>
        <!-- Header Area End Here -->
        <!-- slider area-->
        <div id="body_content"> 
            <?php include ('nosotros.html') ?>  
        </div>
        <!-- Blog Area End Here -->
        <!-- Footer Start Here -->
        <?php include ('include/footer_scripts.html') ?>
         <script>



            $(document).ready(function(){
                $("#menu-nosotros").addClass("active");
                var url=String(window.location);
                var type = url.split('#');
                var hash = '';
                if(type.length > 1)
                    hash = type[1];
                    console.log(hash);
                    $("#tab-"+hash).click();
                     location.hash = "#page-area";
                
                $('.submenu').click(function(e){
                    //e.preventDefault();
                    var url=String($(this).attr('href'));
                    var type = url.split('#');
                    var hash = '';
                    if(type.length > 1)
                        hash = type[1];
                        console.log(hash);
                        $("#tab-"+hash).click();
                        location.hash = "#page-area";
                })

            
            })
        </script>
    </body>
</html>
