<?php

require('./config.php');
require('./id.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
  <script src="news.js"></script>

</head>
<body>
<header>
<nav id='cssmenu'>
<div class="logo"><a href="index.php">Actualités</a></div>
<div id="head-mobile"></div>
<div class="button"></div>
<ul>
<li ><a href='index.php'>HOME</a></li>
<li class='active'><a href='sport.php?id=<?php  echo($id_s)?>'>SPORT</a></li>
<li><a href='sante.php?id=<?php  echo($id_sa)?>'>SANTE</a>
</li>
<li><a href='edu.php?id=<?php  echo($id_ed)?>'>EDUCATION</a></li>
<li><a href='poli.php?id=<?php  echo($id_po)?>'>POLITIQUE</a></li>

</ul>
</nav>
</header>
                
                <?php
                

              
                $result = mysqli_query($conn,"SELECT * FROM article where categorie=1");
                    while($row = mysqli_fetch_array($result)) {
                ?>
                
                    <div class="article">
                       <h1><?php echo $row["titre"]; ?></h1>
                       <h3><?php echo $row["contenu"]; ?></h3>
                    </div><br>

                    
                       
                <?php
                  }
                ?>
            
</body>
</html>
