<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $SERVER['PHP_FORM'];?>" method="post">
	n1: <input type="number" name="n1_form"><br>
	n2: <input type="number" name="n2_form"><br>
	<input type="submit">
</form>

<?php
  $n = 25;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$n1 = $_POST['n1_form'];
    $n2 = $_POST['n2_form'];
    $numbers = array();
    $min = $n2;
    $max = $n1;
  
    $n = (int)sqrt($n);
  
    for ($i = 0; $i <= $n; $i++) {
      $line = array();
      for ($j = 0; $j <= $n; $j++) {
        $elem = rand($n1, $n2);
        array_push($line, $elem);
        if ($elem > $max) {
          $max = $elem;
        }
        if ($elem < $min) {
          $min = $elem;
        }
      }
      array_push($numbers, $line);
    }
  
    echo "<h3>Random numbers v3</h3>";
    echo "<center><table>";
    for ($i = 0; $i <= $n; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= $n; $j++) {
        if($numbers[$i][$j] == $min) 
          echo "<td id='red'>" . $numbers[$i][$j] . "</td>";
        else
          if ($numbers[$i][$j] == $max)
            echo "<td id='blue'>" . $numbers[$i][$j] . "</td>";
          else 
            if ($numbers[$i][$j] <= 50)
              echo "<td id='orange'>" . $numbers[$i][$j] . "</td>";
            else
              if ($numbers[$i][$j] >= 50)
                echo "<td id='green'>" . $numbers[$i][$j] . "</td>";
              else
                echo "<td>" . $numbers[$i][$j] . "</td>";
      }
      echo "</tr>";
    }
    echo "</table></center>";
}
?> 

</body>
<style>
  table {
    align-self: center;
    border: 1px solid black;
  }
  td {
    border: 1px solid black;
  }
  #red {
    font-weight: 900;
    color: red;
  }
  #blue {
    font-weight: 900;
    color: blue;
  }
  #orange { color: orange; }
  #green { color: green; }
</style>
</html>
