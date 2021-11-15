<?php

    $data = array("larine ","aduh ","qifuat ","toda ","anevi ","samid ","kifuat ");

    function terurut($data){
      sort($data);
      foreach($data as $dat) {
        echo $dat;
      }
    }


?>
<!DOCTYPE html>
<html>
  
  <style>
    body {
      background-color: salmon;
      
    }
    
    p {
      font-size: 20px;
      color: darkgreen;

    }

    li {
      font-size: 20px;
      color: darkgreen;

    }
  </style>

  <body>
    <div> 
      <p> Data yang belum terurut: </p>
      <ul>
        <?php foreach($data as $dat) : ?> 
          <li> <?= $dat; ?> </li>
        <?php endforeach; ?>
        
      </ul>
      
      <p> Data yang sudah terurut: </p>
      <ul>
        <li> <?php echo terurut($data); ?> </li>
      </ul>

        </div>
  </body>
  
  <footer> 
        <h3>119140201 - Muhammad Farisi Zatwara Putra Unyi </h3>
    </footer>
</html>