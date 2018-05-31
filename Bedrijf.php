<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['Loggedin']) && $_SESSION['Loggedin'] == true)
{
    if (isset($_SESSION['Admin']) && $_SESSION['Admin'] == "admin")
    {
        include("AdminNav.php");
    }
    else
    {
        include("DocentNav.php");
    }
}
else
{
    include("HeaderNav.php");
}
?>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Bedrijf informatie - Match Maker</title>
  </head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="CSS.css" rel="stylesheet">
  <style>
      .col-sm-8 {
          max-width: 1200px;
          margin: auto;
          padding: 10px;;
      }
  </style>
  <body>

      <a id="test" style="background-color: white;">
              </a>
        <?php
          //echo 'Test<br>' . $_POST["bedrijf"];
          $con = mysqli_connect($host, $username, $password, $db_name);
          $Bedrijf = $_POST['bedrijf'];
          $sql = "SELECT * FROM bedrijfsinfo WHERE BedrijfsNaam='$Bedrijf'";

          if ($result = mysqli_query($con, $sql))
          {

              // output data of each row
              while ($row = mysqli_fetch_row($result))
              {
              echo "<div class='col-sm-8' id='LightCol' height='500px'><br>
                      <h1>" . $row['1'] . "</h1>
                      <p></p>
                      <a>Locatie: " . $row['4'] . "</a>
                    </div>";
              echo "<p></p>";
              echo "<div class='col-sm-8' id='LightColInfoBox' background-color='#BCD9D9'>
                      <table class='table'>
                          <thead>
                            <tr>
                              <th scope='col'><h3>Leerbedrijf Details</h3>
                                  <p></p>
                              </th>
                              <tr>
                                  <th>Info</th>
                                  <td>" . $row['3'] . "</td>
                              </tr>
                              <tr>
                                  <th>Email adres</th>
                                  <td>" . $row['2'] . "</td>
                              </tr>
                              <tr>
                                  <th>Telefoonnummer</th>
                                  <td>" . $row['5'] . "</td>
                              </tr>
                              <tr>
                                  <th>Website</th>
                                  <td>" . $row['6'] . "</td>
                              </tr>
                              <tr>
                                  <th>Contact persoon</th>
                                  <td>" . $row['7'] . "</td>
                              </tr>
                      </table>
                  </div>";
            }
          } else { echo "<script> alert('" . $result . "'); </script>"; }
        ?>


  </body>
</html>
