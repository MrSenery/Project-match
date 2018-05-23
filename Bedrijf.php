<!DOCTYPE html>
<?php include("HeaderNav.php"); 
session_start();
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
      
      <a id="test" style="background-color: white;"><?php echo 'Test<br>' . $_POST["bedrijf"];; ?></a>
      
        <div class="col-sm-8" id="LightCol" height="500px"><br>
            <h1>Novacollege</h1>
            <p></p>
            <a>Locatie: Laurens Baecklaan 23, 1942 LN Beverwijk</a>
        </div>
            <p></p>
        <div class="col-sm-8" id="LightColInfoBox" background-color="#BCD9D9">
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col"><h3>Erkend voor opleiding(en)</h3>
                        <p></p>
                            opleidingen(en)
                    </th>
                    <th scope="col">Crebonummer</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Beschikbaarheid</th>
                  </tr>
                </thead>
                    <tbody>
                      <tr>
                        <td>Applicatie-en mediaontwikkelaar</td>
                        <td>25187</td>
                        <td>4</td>
                        <td>2 Stageplaats(en)</td>
                      </tr>
                      <tr>
                        <td>ICT-beheer</td>
                        <td>25189</td>
                        <td>3</td>
                        <td>1 Stageplaats(en)</td>
                      </tr>
                      <tr>
                        <td>Alround kapper</td>
                        <td>32674</td>
                        <td>3</td>
                        <td>3 Stageplaats(en)</td>
                      </tr>
                      <tr>
                        <td>Allround monteur mobiele werktuigen</td>
                        <td>25241</td>
                        <td>3</td>
                        <td>2 Stageplaats(en)</td>
                      </tr>
                    </tbody>
            </table>
        </div>
             <p></p>
        <div class="col-sm-8" id="LightColInfoBox" background-color="#BCD9D9">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><h3>Leerbedrijf Details</h3>
                        <p></p>
                    </th>
                    <tr>
                        <th>Leerbedrijf ID</th>
                        <td>12545632</td>
                    </tr>
                    <tr>
                        <th>Adres</th>
                        <td>Laurens Baecklaan 23, 1942 LN Beverwijk</td>
                    </tr>
                    <tr>
                        <th>Telefoonnummer</th>
                        <td>023 530 3000</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td>https://www.novacollege.nl/</td>
                    </tr>
            </table>
        </div>
  </body>
</html>
