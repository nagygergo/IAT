<?php
function RadioRange($name,$max,$col=8)
{

    echo "<div class='row'><div class='col m-".$col."'><table><tr>";
    for ($i = 1; $i < $max + 1; $i++) {
        echo "<td><input type='radio' name='" . $name . "' value='" . $i . "' id='" . $name . $i . "' required/><label for='" . $name . $i . "'>" . $i . "</label></td>";
    }
    echo "</tr></table></div></div>";
}

function RadioRangeTableless($name,$max,$col=8){
    for ($i = 1; $i < $max + 1; $i++) {
        echo "<td><input type='radio' name='" . $name . "' value='" . $i . "' id='" . $name . $i . "' required/><label for='" . $name . $i . "'>" . $i . "</label></td>";
    }
}
function RadioRange9($name,$max,$col=8){
    RadioRangeTableless($name,$max,$col=8);
    echo "<td><input type='radio' name='" . $name . "' value='9' id='" . $name."9'/><label for='" . $name . "9' required>9</label></td>";

}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Explicit kérddív - arc</title>
    <style>
        body {
            background: #fafafa;
        }
        .question {
            margin-bottom: 10px;
        }
        td {
            padding: 0px 5px;
        }
    </style>
    <?php require_once("../services/head.php")?>
    <script> $(document).ready(function() {
            $('select').material_select();
        });</script>

    <script>
        function checkForm() {
            if(!$("#explicit")[0].checkValidity()){
                return false;
            }
            return true;
        }

    </script>
</head>

<body>
<div class="container">
    <form id="explicit" action="../router.php" onsubmit="return checkForm()" method="post">
        <div class="card z-depth-0">
            <div class="card-content">

                <div class="question">
                    <h5>Van-e tetoválása, kozmetikai tetoválása, piercinge? (Egyszerre többet is bejelölhet)</h5>
                    <p>
                        <input type="checkbox" class="filled-in" id="tetovalas">
                        <label for="tetovalas">Van tetoválásom.</label>
                    </p>
                    <p>
                        <input type="checkbox" class="filled-in" id="koztetovalas">
                        <label for="koztetovalas">Van kozmetikai tetoválásom.</label>
                    </p>
                    <p>
                        <input type="checkbox" class="filled-in" id="piercing">
                        <label for="piercing">Van testékszerem.</label>
                    </p>

                </div>
                <div class="question">
                    <h5>Visel szemüveget vagy fülbevalót? (Egyszerre többet is bejelölhet)</h5>
                    <p>
                        <input type="checkbox" class="filled-in" id="fulbevalo">
                        <label for="fulbevalo">Fülbevalót hordok.</label>
                    </p>
                    <p>
                        <input type="checkbox" class="filled-in" id="szemuveg">
                        <label for="szemuveg">Szemüveget hordok.</label>
                    </p>


                </div>
                <div class="question">
                    <h5>Használ sminket?</h5>
                    <p>
                        <input name="smink" type="radio" id="smink1" value="nem"/>
                        <label for="smink1">Nem használok.</label>
                    </p>
                    <p>
                        <input name="smink" type="radio" id="smink2" value="naponta"/>
                        <label for="smink2">Naponta használok.</label>
                    </p>
                    <p>
                        <input name="smink" type="radio" id="smink3" value="alkalmankent"/>
                        <label for="smink3">Alkalmanként használok.</label>
                    </p>

                </div>
                <div class="question">
                    <p>Mennyire fontos Önnek a saját arcának szépsége önértékelése szempontjából?</p>
                    <?php RadioRange("onertekeles",10); ?>

                </div>
            </div>
        </div>
        <div class="card z-depth-0">
            <div class="card-content">

                <div class="question">
                    <h5>Szenvedett már életében jelentősebb sérülést az arcán?</h5>
                    <p>
                        <input name="korabbiserules" type="radio" id="korabbiserules1" value="igen" required/>
                        <label for="korabbiserules1">Igen.</label>
                    </p>
                    <p>
                        <input name="korabbiserules" type="radio" id="korabbiserules2" value="nem"/>
                        <label for="korabbiserules2">Nem.</label>
                    </p>
                </div>

                <div class="question">
                    <h5>Ismer olyan személyt akinek az arcán esztétikai hiba, sérülés van (pl: heg, pigmentfolt, égési sérülés)?</h5>
                    <p>
                        <input name="ismereszthiba" type="radio" id="ismereszthiba1" value="nem" required/>
                        <label for="ismereszthiba1">Nem</label>
                    </p>
                    <p>
                        <input name="ismereszthiba" type="radio" id="ismereszthiba2" value="ismeros" />
                        <label for="ismereszthiba2">Igen, ismerőseim között van ilyen.</label>
                    </p>
                    <p>
                        <input name="ismereszthiba" type="radio" id="ismereszthiba3" value="csalad" />
                        <label for="ismereszthiba3">Igen, ismerőseim között van ilyen.</label>
                    </p>
                    <p>
                        <input name="ismereszthiba" type="radio" id="ismereszthiba4" value="talakozom"/>
                        <label for="ismereszthiba4">Igen, találkozom ilyen személyekkel</label>
                    </p>
                </div>

                <div class="question">
                    <h5>Szenvedett már életében jelentősebb sérülést az arcán?</h5>
                    <p>
                        <input name="korabbitapasztalat" type="radio" id="korabbitapasztalat1" value="pozitiv" required/>
                        <label for="korabbitapasztalat1">Pozitív</label>
                    </p>
                    <p>
                        <input name="korabbitapasztalat" type="radio" id="korabbitapasztalat3" value="negativ"/>
                        <label for="korabbitapasztalat3">Negativ.</label>
                    </p>
                    <p>
                        <input name="korabbitapasztalat" type="radio" id="korabbitapasztalat2" value="semleges"/>
                        <label for="korabbitapasztalat2">Semleges.</label>
                    </p>
                </div>


            </div>
        </div>
        <div class="card z-depth-0">
            <div class="card-content">
                <div class="question">
                    <h5>Milyen mértékben határozza meg egy adott emberről kialakított képét, véleményét annak arca?</h5>
                    <?php RadioRange("velemeny", 10);?>

                </div>
                <h5>Milyen mértékben ért egyet az alábbi szólásmondásokkal?</h5>
                <div class="card z-depth-0">
                    <div class="card-content">
                        <div class="question">
                            <p>Egy bizonyos kor után mindenki felelős az arcáért (Albert Camus)</p>
                            <?php RadioRange("szolas1",7);?>

                        </div>
                        <div class="question">
                            <p>Bélyeges arcnak ne higgy! (magyar közmondás) (Margalits, 1990), (Nagy, 2010)</p>
                            <?php RadioRange("szolas2",7);?>
                        </div>
                        <div class="question">
                            <p>A szív tolmácsa az arc (magyar közmondás)</p>
                            <?php RadioRange("szolas3",7);?>
                        </div>
                        <div class="question">
                            <p>Akit a természet megbélyegzett, nem kell annak hinni. (magyar közmondás)</p>
                            <?php RadioRange("szolas4",7);?>

                        </div>
                        <div class="question">
                            <p>Az emberek gondolatai, érzései, szándékai az arcukra van írva. (magyar szólás)</p>
                            <?php RadioRange("szolas5",7);?>
                        </div>
                        <div class="question">
                            <p>“Titkos írás az arc, de annak, aki a kulcsát bírja, nyitott könyv.” (Jókai Mór)</p>
                            <?php RadioRange("szolas6",7);?>
                        </div>
                        <div class="question">
                            <p>Akinek szép az arca, sokra viszi. (angol közmondás (Nagy György, 2013))</p>
                            <?php RadioRange("szolas7",7);?>
                        </div>
                        <div class="question">
                            <p>Tiszta arc nem szorul másra. (magyar közmondás)</p>
                            <?php RadioRange("szolas8",7);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card z-depth-0">
            <div class="card-content question">
                <h5>Egy személyről kialakított benyomásában milyen szerepet játszanak az alábbi vonások?</h5>
                <div class="row">
                    <div class="col m8 offset-m1">
                        <table class="">
                            <tr>
                                <td>Alkat</td><?php RadioRangeTableless("alkat",7, 12);?>
                            </tr>
                            <tr>
                                <td>Arc</td><?php RadioRangeTableless("arc",7, 12);?>
                            </tr>
                            <tr>
                                <td>Magasság</td><?php RadioRangeTableless("magassag",7, 12);?>
                            </tr>
                            <tr>
                                <td>Testbeszéd</td><?php RadioRangeTableless("testbeszed",7, 12);?>
                            </tr>
                            <tr>
                                <td>Mimika</td><?php RadioRangeTableless("mimika",7, 12);?>
                            </tr>
                            <tr>
                                <td>Öltözködés</td><?php RadioRangeTableless("oltozkodes",7, 12);?>
                            </tr>
                            <tr>
                                <td>Mozgás</td><?php RadioRangeTableless("mozgas",7, 12);?>
                            </tr>
                            <tr>
                                <td>Bőr</td><?php RadioRangeTableless("bor",7, 12);?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card z-depth-0">
            <div class="card-content question">
                <h5>Egy arcról mi alapján dönti el, hogy szimpatikus-e?</h5>
                <div class="row">
                    <div class="col m8 offset-m1">
                        <table>
                            <tr>
                                <td>Az arc egésze</td><?php RadioRangeTableless("egeszarc",7, 12);?>
                            </tr>
                            <tr>
                                <td>Arccsont</td><?php RadioRangeTableless("arccsont",7, 12);?>
                            </tr>
                            <tr>
                                <td>Száj</td><?php RadioRangeTableless("szaj",7, 12);?>
                            </tr>
                            <tr>
                                <td>Homlok</td><?php RadioRangeTableless("homlok",7, 12);?>
                            </tr>
                            <tr>
                                <td>Orr</td><?php RadioRangeTableless("orr",7, 12);?><
                            </tr>
                            <tr>
                                <td>Szemek</td><?php RadioRangeTableless("szemek",7, 12);?>
                            </tr>
                            <tr>
                                <td>Fülek</td><?php RadioRangeTableless("fulek",7, 12);?>
                            </tr>
                            <tr>
                                <td>Arcbőr</td><?php RadioRangeTableless("arcbor",7, 12);?>
                            </tr>
                            <tr>
                                <td>Ajkak</td><?php RadioRangeTableless("ajkak",7, 12);?>
                            </tr>
                            <tr>
                                <td>Haj</td><?php RadioRangeTableless("haj",7, 12);?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card z-depth-0">
            <div class="card-content question">
                <h5>Milyen legközelebbi viszonyt fogadnál el szívesen, a felsorolt tulajdonságokkal rendelkező személlyel?</h5>
                <div class="row">
                    <div class="col m6">
                        <ol>
                            <li>családomba fogadnám</li>
                            <li>elfogadnám barátomnak</li>
                            <li>elfogadnám osztálytársamnak</li>
                            <li>elfogadnám szomszédnak</li>
                        </ol>
                    </div>
                    <div class="col m6">
                        <ol>

                            <li value="5">egy városban, faluban laknék vele</li>
                            <li>egy országban sem laknék vele</li>
                            <li value="9">nem tudom</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col m8 offset-m1">
                            <table class="" style="border-spacing: 100px;">
                                <tr>
                                    <td>Alkoholista</td><?php RadioRange9("alkoholista",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Barátságtalan</td><?php RadioRange9("baratsagtalan",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Zsidó</td><?php RadioRange9("zsido",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Roma</td><?php RadioRange9("roma",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Pedofil</td><?php RadioRange9("pedofil",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Veri a feleségét</td><?php RadioRange9("asszonyvero",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Igénytelen</td><?php RadioRange9("igenytelen",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Veterán</td><?php RadioRange9("veteran",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Bűnöző</td><?php RadioRange9("bunozo",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Önző</td><?php RadioRange9("onzo",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Fukar</td><?php RadioRange9("fukar",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Hiszékeny</td><?php RadioRange9("hiszekeny",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Munkamániás</td><?php RadioRange9("munkamanias",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Féllábú</td><?php RadioRange9("fellabu",6, 12);?>
                                </tr>
                                <tr>
                                    <td>Serülés nyoma van az arcán</td><?php RadioRange9("serulasazarcon",6, 12);?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
            <div class="col m2 offset-m5">
                <a id="submit-button" href="#" class="waves-effect waves-light blue btn" onclick="$('#explicit').submit(); ">Küldés</a>
            </div>


    </form>
</div>
</body>
</html>
