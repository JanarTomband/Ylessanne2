<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Inimene {

            private $nimi;
            private $vanus;

            function __construct($nimi = "Nimi", $vanus = 99) {
                $this->nimi = $nimi;
                $this->vanus = $vanus;
            }

            function Printandmed() {
                echo $this->nimi . "__" . $this->vanus . "\n";
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

        }

        $tudeng1 = new Inimene("Urmas", 19);
        $tudeng2 = new Inimene("Risto", 18);
        $tudeng3 = new Inimene("Peeter", 21);#
        $tudeng4 = new Inimene("Karina", 19);
        $tudeng5 = new Inimene("laura", 18);
        ?>
        
        <table>
            <tr>
                <th>Objekt</th><th>Väärtus</th>
            </tr>
            <tr><td>tudeng1</td><td><?php echo $tudeng1->Getname();
        echo "<br>";
        $tudeng1->Getage();
        ?>
                </td></tr>
            <tr><td>tudeng2</td><td><?php echo $tudeng2->Getname();
        echo "<br>";
        $tudeng2->Getage();
        ?>
                </td></tr>
            <tr><td>tudeng3</td><td><?php echo $tudeng3->Getname();
        echo "<br>";
        $tudeng3->Getage();
        ?>
                </td></tr>
            <tr><td>Print</td><td>tudeng1</td><td><?php echo $tudeng1->Printandmed(); ?>
                </td></tr>
            <tr><td>Print</td><td>tudeng2</td><td><?php echo $tudeng2->Printandmed(); ?>
                </td></tr>
            <tr><td>Print</td><td>tudeng3</td><td><?php echo $tudeng3->Printandmed(); ?>
                </td></tr>
        </table>
    </body>
</html>