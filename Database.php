<!DOCTYPE html>
<!Janar Tomband Praktika 2>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title></title>
    </head>


    <body  style="background-color: #333;">


        <?php

        class Inimene {

            private $nimi;
            private $vanus;
            private $kursus;

            function __construct($nimi = "Nimi", $vanus = 99, $kursus = "Kursus") {

                $this->nimi = $nimi;
                $this->vanus = $vanus;
                $this->kursus = $kursus;
            }

            function Printandmed() {
                echo $this->nimi . " / " . $this->vanus . " / " . $this->kursus . "\n";
            }

            function Getname() {
                echo $this->nimi;
            }

            function Setname($nimi) {
                $this->nimi = $nimi;
            }

            function Getage() {
                echo $this->vanus;
            }

            function Setage($vanus) {
                $this->vanus = $vanus;
            }

            function getKursus() {
                return $this->kursus;
            }

            function setKursus($kursus) {
                $this->kursus = $kursus;
            }

        }

        $tudeng1 = new Inimene("Margus", 19, "RDIR32");
        $tudeng2 = new Inimene("Risto", 18, "RDIR21");
        $tudeng3 = new Inimene("Peeter", 21, "RDIR41");
        $tudeng4 = new Inimene("Karina", 19, "RDIR51");
        $tudeng5 = new Inimene("Laura", 18, "RDIR41");
        ?>

        <div class="container" style=" padding-top: 50px">

            <div class="jumbotron" style="align-content: center; background-color: rgba(0,0,0,.55);color: #999; word-wrap: break-word;">
                        <div class="form-group"> 
                            <br>  <h1 align="center" style="color: #336E7B; padding-bottom: 20px">Registreeritud tudengite nimekiri</h1><br>
                            <p Style="padding-left: 100px; padding-right: 100px"><span style="color: #336E7B; ">Õppeaine andmed:</span>     <?php
                            $Andmed1 = $_POST['Andmed'];
                            echo $Andmed1 . "</br>";
                            ?>
                            <span style="color: #336E7B">Õppejõud:</span>         <?php
                            $OP1 = $_POST['OP'];
                            echo $OP1 . "</br>";
                            ?>
                            <span style="color: #336E7B">Eesmärk:</span> <?php
                            $EM1 = $_POST['EM'];
                            echo $EM1 . "</br>";
                            ?>              
                            <br></p>
                            <table align="center">
                                <tr>
                                <th>Tudeng / Vanus / Grupp</th></tr>
                                <tr><td><?php
                                        $TEST1 = $_POST['TEST'];
                                        if ($TEST1 == 1) {
                                            echo $tudeng1->Printandmed();
                                        }
                                        ?>
                                    </td></tr>
                                <tr><td><?php
                                        $TEST1 = $_POST['TEST'];
                                        if ($TEST1 == 1 || $TEST1 == 2 || $TEST1 == 3) {
                                            echo $tudeng2->Printandmed();
                                        }
                                        ?>
                                    </td></tr>
                                <tr><td><?php
                                        $TEST1 = $_POST['TEST'];
                                        if ($TEST1 == 1 || $TEST1 == 2 || $TEST1 == 3) {
                                            echo $tudeng3->Printandmed();
                                        }
                                        ?>
                                    </td></tr>
                                <tr><td><?php
                                        $TEST1 = $_POST['TEST'];
                                        if ($TEST1 == 3) {
                                            echo $tudeng4->Printandmed();
                                        }
                                        ?>
                                    </td></tr>
                                <tr><td><?php
                                        $TEST1 = $_POST['TEST'];
                                        if ($TEST1 == 2 || $TEST1 == 3) {
                                            echo $tudeng5->Printandmed();
                                        }
                                        ?>
                                    </td></tr>
                            </table>
                        </div>

                <div class="col-md-50 text-center" style=" padding-top: 30px"> 
                    <form action="index.php">
                        <input class="btn" href="#" role="button" type="submit" value="Tagasi" style="background-color:#154360 ;color: #D4E6F1;" />
                </div>
            </div>
        </div>
        <footer style="padding-top: 200px"><div class="fixed-bottom p-2 text-white text-center color " style="background-color:#154360">Janar Tomband <?php echo date("Y"); ?></div></footer>

    </body>
</html>