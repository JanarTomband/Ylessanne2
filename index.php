<!DOCTYPE html>
<!Janar Tomband Praktika 2>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="C:\xampp\htdocs\PhpProject1\CSS" type="text/css">
        <title>Informatsioon</title>

    </head>
    <body style="background-color: #333;">

        <div class="container" style=" padding-top: 50px">
            <div class="row">
                <div class="col">
                    <div class="jumbotron w-55 p-3" style="background-color: rgba(0,0,0,.55);color: #999; word-wrap: break-word;">
                        <h1  style="color: #336E7B">Ülessanne:</h1> <h2 >Kolledzi tudengite registreerimine kursustele (PHP)</h2><br>
                        Loo veebirakendus, mis sisaldab informatsiooni kursuste ja registreeritud tudengitekohta

                        Pealehel ilmub kursuste nimekiri (kursuse nimetus ja kood)
                        Kasutaja võib valida kursuse ja vaadata teiselt lehelt kursuse täisinformatsiooni ja registreeritud tudengite nimesid.
                        Realiseerimisel looge klassid, mis kirjeldavad süsteemi mudelit

                        Hindamise ajal hinnatakse ka kasutajaliidest

                        Kasutage Git
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="jumbotron w-300 p-4" style="background-color: rgba(0,0,0,.55);color: #999; padding-left: 20px; word-wrap: break-word;">
                        <h3  style="color: #336E7B">RAR0470<br> Side</h3><br>
                        Õppejõud: Larissa Joonas<br>
                        EAP: 3.5<br>
                        Hindeline<br>
                        <div class="col-md-50 text-center" style=" padding-top: 30px"> 
                            <form action="Database.php"  method="post">
                                <input type="hidden" name="Andmed" value="RAR0470 Side">
                                <input type="hidden" name="OP" value="Larissa Joonas">
<input type="hidden" name="EM" value="Eesmärgiks on õpetada ja aidata arusaada kuidas toimib andmete edastamine, mille kaudu ning õppida terminid ning märgistused, mida kasutatakse  tööd tehes sidega">
                                <input type="hidden" name="TEST" value="1">
                                <input class="btn" href="#"  role="button" type="submit" value="Rohkem infot" style="background-color:#154360 ;color: #D4E6F1;" />
                            </form>    
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="jumbotron w-300 p-4" style="background-color: rgba(0,0,0,.55);color: #999; padding-left: 20px; word-wrap: break-word;">
                        <h3  style="color: #336E7B" >RAM0070 Andmeanalüüs</h3><br>
                        Õppejõud: Olga Dunajeva<br>
                        EAP: 2<br>
                        Arvestuslik<br>                       
                        <div class="col-md-50 text-center" style=" padding-top: 30px"> 
                            <form action="Database.php"  method="post">
                                <input type="hidden" name="Andmed" value="RAM0070 Andmeanalüüs">
                                <input type="hidden" name="OP" value="Olga Dunajeva">
                                <input type="hidden" name="EM" value="Eesmärk on anda teadmisi andmete korrastamisest, kirjeldavast statistikast 
                                       statistiliste hüpoteeside kontollimisest ja andmeanalüüsi meetoditest ja nende rakendamisest, andmeanalüüsi tulemuste vormistamisest ja tõlgendamisest.">
                                <input type="hidden" name="TEST" value="2">
                                <input class="btn" href="#" role="button" type="submit" value="Rohkem infot" style="background-color:#154360 ;color: #D4E6F1;" />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="jumbotron w-300 p-4" style="background-color: rgba(0,0,0,.55);color: #999;padding-bottom: 20px; word-wrap: break-word;">
                        <h3  style="color: #336E7B">RAR0181<br> Arvutid 1</h3><br>
                        Õppejõud: Oleg Shvets <br>
                        EAP: 5<br>
                        Hindeline<br>
                        <div class="col-md-50 text-center" style=" padding-top: 30px"> 
                            <form action="Database.php"  method="post">
                                <input type="hidden" name="Andmed" value="RAR0181 Arvutid 1">
                                <input type="hidden" name="OP" value="Oleg Shvets">
                                <input type="hidden" name="EM" value="Õppeaine eesmärgiks on anda teadmisi arvuti riistvara funktsioneerimise põhialustest.
                                       Käsitletakse põhiprintsiipe, mis on ühised kõigile arvutitele ja protsessoritele, sõltumata nende tootjast.">
                                <input type="hidden" name="TEST" value="3">
                                <input class="btn" href="#" role="button" type="submit" value="Rohkem infot" style="background-color:#154360 ;color: #D4E6F1;" />
                        </div>

                    </div>

                </div>
                <footer style="padding-top: 200px"><div class="fixed-bottom p-2 text-white text-center color " style="background-color:#154360">Janar Tomband <?php echo date("Y"); ?></div></footer>
                <div class="col">

                </div>
            </div>
    </body>       
</html>
