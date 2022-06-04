<?php
  $kat = NULL;
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Karate</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/icon.png" type="image/png">
    <meta name="keywords" content="Karate, borba, vještine, samoobrana, povijest, japan, kihon, kate, kumite">
    <meta name="description" content="Informacije o sportu Karate">
    <meta name="author" content="Petar Orešković">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/eff7ce4bd1.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--HEADER-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4">
                    <img src="images/icon-white.png">
                </div>
                <div class="col-xl-2 col-lg-7 col-md-7 col-sm-8">
                    <h1>Karate</h1>
                </div>
                <div class="col-xl-8 col-lg-3 col-md-12 col-sm-12">
                    <nav>
                        <ul>
                            <li><a href="">O nama</a></li>
                            <li><a href="Novosti/novosti.html">Novosti</a></li>
                            <li><a href="">Kontakt</a></li>
                            <li><a href="shop/shop.html">Trgovina</a></li>
                            <li><a href="#prijava">Prijava</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--MAIN-->
    <main>
        <img width="100%" src="images/header.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="caption">Karate (jap. 空手) je japanska borilačka vještina koja koristi sve dijelove tijela u svrhu samoobrane. Postojbina karatea je otok Okinawa koji se nalazi
                        južno od Japana u otočju Ryu Kyu.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><a name="history"></a>
                    <h2><i class="fas fa-history"></i> Kratka povijest</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="history">arate biva otkriven kada je jedan nepoznati vojni liječnik primijetio da su vojnici s Okinawe izuzetno fizički spremni. Kada se o tome
                        raspitao, saznao je da oni treniraju borilačku vještinu zvanu Te. To se pročulo i do japanskog cara i on je pozvao okinavljanske majstore da je javno prikažu.
                         Za demonstraciju je određen okinavljanin Gichin Funakoshi. On je cijeli svoj život posvetio popularizaciji karate vještine i prozvan je ocem modernog karatea.
                          Godine 1930. on je promijenio naziv vještine iz Te u Karate što na japanskom znači prazna ruka ili borba bez oružja. Nakon toga karate se proširio po čitavom 
                          svijetu.
                   </p>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 15px;" src="images/Okinawa_povijest.jpg" class="okinawa">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12"><a name="modern"></a>
                    <p class="caption" id="dolje"><i class="fas fa-quote-right"></i> "The more understanding you have about Karate, the less you need to change or modify it.” – Tsuguo Sakumoto
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="pomakniDolje"><i class="fas fa-hand-rock"></i> Moderni karate</h2> 
                    <p class="modern">oderni karate se obično dijeli na Kihon, Kumite i Kate.
                    Kod osnovne tehnike uče se pojedinačni udarci, blokovi, stavovi itd. Kate su poseban skup točno određenih pokreta (udaraca, stavova i blokova) koji se izvode,
                    a pokazuju borbu sa zamišljenim protivnikom (jednim ili više). Borba može biti slobodna ili dogovorena (dogovori se koji će se izvesti udarac, i kojim blokom se
                    blokira taj udarac).
                    </p>
                </div>
                <div class="col-xl-6">
                    <img style="border-radius: 15px;" src="images/modernK.jpg">
                </div>
            </div>

            <!--Prijava-->

            <div class ="row">
                <div class="col-xl-12">
                    <h2 class="NaslovLog">Prijava</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <form id="prijava" method="post">
                        <input type="text" id="uName" name="uName" placeholder="Korisničko ime"><br>
                        <input type="password" id="pass" name="pass" placeholder="Lozinka"><br>
                        <input type="submit" name="logButton" value="Prijavi me">
                    </form>
                </div>
            </div>

            <div id="welcomeMes" class="flex-container"><span id="status"></span></div>
           
              

            <!--TABLICA-->
            <table id="tablica" cellspacing="9" cellpadding="10" ><a name="wkftablica"></a>
                <tr>
                    <th colspan="5">Statistika</th>; 
                </tr>
                <tr class="prijelaz">
                    <td id = "proba">WKF RANK</td>
                    <td>IME, PREZIME</td>
                    <td>ZEMLJA</td>
                    <td>BODOVI</td>
                    <td>KATEGORIJA</td>
                </tr>
                <tr class="prijelaz">
                    <td id="rank" ></td>
                    <td id="ime" ></td>
                    <td id="zemlja" ></td>
                    <td id="bodovi" ></td>
                    <td id="kat" ></td>
                </tr>
            </table>
        </div>
    </main>

    <?php

        $username="";
        $password="";
            
            if (empty($_POST["uName"]))  {
                echo '
                <script type="text/javascript">
                    document.getElementById("welcomeMes").style.display = "flex";
                    document.getElementById("status").innerHTML = "oops! Neka polja nisu popunjena!";
                </script>';
                
                    }
            else if (empty($_POST["pass"]))  {
                echo '
                <script type="text/javascript">
                    document.getElementById("welcomeMes").style.display = "flex";
                    document.getElementById("status").innerHTML = "oops! Neka polja nisu popunjena!";
                </script>';
                
                    }
            else {
                $username= $_POST["uName"];
                $password= $_POST["pass"];
            
                prijava($username,$password);
            }

        function prijava($username, $password) {
            
            $xml=simplexml_load_file("Natjecatelji.xml");
            
            foreach ($xml->natjecatelj as $kumite) {

                $kName = $kumite->username;
                $kPass = $kumite->password;
                $ime=$kumite->ime;
                $prezime=$kumite->prezime;
                $WKF = $kumite->rankWKF;
                $country = $kumite->zemlja;
                $kat = $kumite->kategorija;
                $points = $kumite->bodovi;

                if($kName==$username){
                    if($kPass == $password){
                        echo '
                        <script type="text/javascript">
                            document.getElementById("welcomeMes").style.display = "flex";
                            document.getElementById("status").innerHTML = "Dobrodošao ' . $ime . " " . $prezime . '!' .'";
                            document.getElementById("tablica").style.display = "inline-table";
                            document.getElementById("rank").innerHTML = "' . $WKF .'";
                            document.getElementById("ime").innerHTML = "' . $ime . " " . $prezime . '";
                            document.getElementById("zemlja").innerHTML = "' . $country .'";
                            document.getElementById("kat").innerHTML = "' . $kat .'";
                            document.getElementById("bodovi").innerHTML = "' . $points .'";

                        </script>';
                        return;
                        }
                    else{
                        echo '
                        <script type="text/javascript">
                            document.getElementById("welcomeMes").style.display = "flex";
                            document.getElementById("status").innerHTML = "Pogrešna lozinka!";
                        </script>';
                        return;
                        }
                    }
                }
                
            echo '<script type="text/javascript">
                    document.getElementById("welcomeMes").style.display = "flex";
                    document.getElementById("status").innerHTML = "Korisnik ne postoji!";
                </script>';
            return;
        }
        ?>


    <!--FOOTER-->
    <footer>
        Student: Petar Orešković
        <br />
        JMBAG: 0246094443
    </footer>
</body>
</html>