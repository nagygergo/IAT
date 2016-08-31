<?php
function RadioRange($name,$max,$col=8)
{

    echo "<div class='row'><div class='col m-".$col."'><table><tr>";
    for ($i = 1; $i < $max + 1; $i++) {
        echo "<td><input type='radio' name='" . $name . "' value='" . $i . "' id='" . $name . $i . "' required/><label for='" . $name . $i . "'>" . $i . "</label></td>";
    }
    echo "</tr></table></div></div>";
}

function RadioRangeWithTitles($name, $max, $col=8, $leftTitle, $middleTitle, $rightTitle){

    echo "<div class='row'><div class='col m-".$col."'><table class='centered'><tr>";
    for ($i = 1; $i < $max + 1; $i++) {
        echo "<td><input type='radio' name='" . $name . "' value='" . $i . "' id='" . $name . $i . "' required/><label for='" . $name . $i . "'>" . $i . "</label></td>";
    }
    echo"</tr>";
    echo"<tr><td colspan='3'>".$leftTitle."</td><td colspan='4'>".$middleTitle."</td><td colspan='3'>".$rightTitle."</td></tr>";
    echo "</table></div></div>";
}

function RadioRangeTableless($name,$max){
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
    <?php require_once("services/head.php")?>
    <script> $(document).ready(function() {
            $('select').material_select();
        });</script>

    <script>
        function checkForm() {
            $('#megjegyzesek').prop('valid', true);
            if(!$("#explicit")[0].checkValidity()){
                return false;
            }

            return true;
        }


    </script>
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
</head>

<body>
<div class="card">
        <div class="card-content row">
            <div class="col m10 offset-m1">
                <p>
                <h5 class="center-align" style="color:red">A teszt befejezéséhez minden kérdésnél meg kell jelölnie válaszlehetőséget! </h5>
                <ol>
                    <li> Próbálja mindíg a saját tapasztalataihoz, véleményéhez legközelebb álló lehetőséget választani! </li>
                     <li>Amennyiben az adatfelvételi lappal vagy a teszttel kapcsolatban kiegészítése, kérdése lenne, kérjük írja be a lap alján található "Megjegyzések" mezőbe!</li>
                     <li><b> A válaszokon ne gondolkodjon sokáig! </b>Az első, automatikus válaszaira vagyunk kíváncsiak. </li>
                   
                </ol>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form id="explicit" action="router.php" onsubmit="return checkForm()" method="post">
        <input type="hidden" name="origin" value="explicit">

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">1. Visel szemüveget vagy fülbevalót??</div>
                    <p>
                        <input name="fulbevaloszemuveg" type="radio" id="fulbevaloszemuveg1" value="fulbevalo"/>
                        <label for="fulbevaloszemuveg1">Fülbevalót hordok</label>
                    </p>
                    <p>
                        <input name="fulbevaloszemuveg" type="radio" id="fulbevaloszemuveg2" value="szemuveg"/>
                        <label for="fulbevaloszemuveg2">Szemüveget hordok</label>
                    </p>
                    <p>
                        <input name="fulbevaloszemuveg" type="radio" id="fulbevaloszemuveg3" value="mindketto"/>
                        <label for="fulbevaloszemuveg3">Fülbevalót és szemüveget is hordok</label>
                    </p>
                    <p>
                        <input name="fulbevaloszemuveg" type="radio" id="fulbevaloszemuveg4" value="egyiksem"/>
                        <label for="fulbevaloszemuveg4">Nem hordok egyiket sem</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">2. Használ sminket?</div>
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
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">3. Van-e tetoválása, kozmetikai tetoválása, piercinge? (Egyszerre többet is bejelölhet)</div>
                    <p>
                        <input type="hidden" name="tetovalas_van" value="none">
                        <input type="checkbox" class="filled-in" name="tetovalas_van" id="tetovalas">
                        <label for="tetovalas">Van tetoválásom.</label>
                    </p>
                    <p>
                        <input type="hidden" name="tetovalas_kozmetikai" value="none">
                        <input type="checkbox" class="filled-in" name="tetovalas_kozmetikai" id="koztetovalas">
                        <label for="koztetovalas">Van kozmetikai tetoválásom.</label>
                    </p>
                    <p>
                        <input type="hidden" name="tetovalas_piercing" value="none">
                        <input type="checkbox" class="filled-in" name="tetovalas_piercing" id="piercing">
                        <label for="piercing">Van testékszerem.</label>
                    </p>

                    <p>
                        <input type="hidden" name="nincsnemszeretne" value="none">
                        <input type="checkbox" class="filled-in" id="nincsnemszeretne">
                        <label for="nincsnemszeretne">Nincs, és soha nem is szeretnék</label>
                    </p>
                    <p>
                        <input type="hidden" name="nincsszeretne" value="none">
                        <input type="checkbox" class="filled-in" id="nincsszeretne">
                        <label for="nincsszeretne">Nincs, de szeretnék</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">4. Mások azt mondanák rám, hogy:</div>
                    <p>
                        <input name="masokmondjak" type="radio" id="masokmondjak1" value="nagyonszep"/>
                        <label for="masokmondjak1">Nagyon szép az arcom</label>
                    </p>
                    <p>
                        <input name="masokmondjak" type="radio" id="masokmondjak2" value="szep"/>
                        <label for="masokmondjak2">Szép az arcom</label>
                    </p>
                    <p>
                        <input name="masokmondjak" type="radio" id="masokmondjak3" value="atlagos"/>
                        <label for="masokmondjak3">Átlagos az arcom</label>
                    </p>
                    <p>
                        <input name="masokmondjak" type="radio" id="masokmondjak4" value="nemtulszep"/>
                        <label for="masokmondjak4">Nem túl szép az arcom</label>
                    </p>
                    <p>
                        <input name="masokmondjak" type="radio" id="masokmondjak5" value="csunya"/>
                        <label for="masokmondjak5">Csúnya az arcom.</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">5. Mennyire meghatározó az Ön számára saját arca önértékelése szempontjából?</div>
                    <?php RadioRangeWithTitles("onertekeles",10,8,"Egyáltalán nem","","Teljes mértékben");?>
                </div>
            </div>
        </div>
        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">6. A hibátlan arcú személyekkel kapcsolatos érzelmeit hogyan értékelné az alábbi skálán?</div>
                    <?php RadioRangeWithTitles("hibatlanarcuerzelmek",10,8,"Nagyon negatív","Semleges","Nagyon pozitív");?>
                </div>
            </div>
        </div>

        

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">7. Egy ismeretlen női vagy férfi arcról mi alapján dönti el, hogy szimpatikus-e? Mekkora hangsúlyt kapnak az alábbi vonások az első benyomás kialakítása során?</div>
                    <div class="row">
                        <div class="col m10 l6 offset-m1">
                            <div class="center-align"><b>Női arc esetén</b></div>
                            <table class="centered">
                                <tr>
                                    <td colspan="4">Egyáltalán nem</td>
                                    <td colspan="3">Teljes mértékben</td>
                                </tr>
                                <tr>
                                    <td>Orr</td>
                                    <?php RadioRangeTableless("elsobenyomas_no_orr",7);?>
                                </tr>
                                <tr>
                                    <td>Arccsont</td>
                                    <?php RadioRangeTableless("elsobenyomas_no_arccsont",7);?>
                                </tr>

                                <tr>
                                    <td>Homlok</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_homlok",7);?>
                                </tr>
                                <tr>
                                    <td>Az arc egésze</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_egeszarc",7);?>
                                </tr>
                                <tr>
                                    <td>Szemek</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_szemek",7);?>
                                </tr>
                                <tr>
                                    <td>Fülek</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_fulek",7);?>
                                </tr>
                                <tr>
                                    <td>Arcbőr</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_arcbor",7);?>
                                </tr>
                                <tr>
                                    <td>Száj, ajkak</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_szaj",7);?>
                                </tr>
                                <tr>
                                    <td>Haj</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_haj",7);?>
                                </tr>
                                <tr>
                                    <td>Áll</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_no_all",7);?>
                                </tr>
                                <tr>
                                    <td>Fogak</td>
                                    <?php RadioRangeTableless("elsobenyomaarcs_no_fogak",7);?>
                                </tr>
                            </table>
                        </div>
                        <div class="col m10 l6 offset-m1">
                            <div class="center-align"><b>Férfi arc esetén</b></div>
                            <table class="centered">
                                <tr>
                                    <td colspan="4">Egyáltalán nem</td>
                                    <td colspan="3">Teljes mértékben</td>
                                </tr>
                                <tr>
                                    <td>Orr</td>
                                    <?php RadioRangeTableless("elsobenyomas_ferfi_orr",7);?>
                                </tr>
                                <tr>
                                    <td>Arccsont</td>
                                    <?php RadioRangeTableless("elsobenyomas_ferfi_arccsont",7);?>
                                </tr>

                                <tr>
                                    <td>Homlok</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_homlok",7);?>
                                </tr>
                                <tr>
                                    <td>Az arc egésze</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_egeszarc",7);?>
                                </tr>
                                <tr>
                                    <td>Szemek</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_szemek",7);?>
                                </tr>
                                <tr>
                                    <td>Fülek</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_fulek",7);?>
                                </tr>
                                <tr>
                                    <td>Arcbőr</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_arcbor",7);?>
                                </tr>
                                <tr>
                                    <td>Száj, ajkak</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_szaj",7);?>
                                </tr>
                                <tr>
                                    <td>Haj</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_haj",7);?>
                                </tr>
                                <tr>
                                    <td>Áll</td>
                                    <?php RadioRangeTableless("elsobenyomasarc_ferfi_all",7);?>
                                </tr>
                                <tr>
                                    <td>Fogak</td>
                                    <?php RadioRangeTableless("elsobenyomaarcs_ferfi_fogak",7);?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">8.Érte-e már valaha jelentősebb sérülés az arcát? (Egyszerre többet is bejelölhet)</div>
                    <p>
                        <input type="hidden" name="arcserules_nem" value="none">
                        <input type="checkbox" class="filled-in" name="arcserules_nem" id="arcserules_nem">
                        <label for="arcserules_nem">Nem.</label>
                    </p>
                    <p>
                        <input type="hidden" name="arcserules_vagas" value="none">
                        <input type="checkbox" class="filled-in" name="arcserules_vagas" id="arcserules_vagas">
                        <label for="arcserules_vagas">Igen - vágás</label>
                    </p>
                    <p>
                        <input type="hidden" name="arcserules_eges" value="none">
                        <input type="checkbox" class="filled-in" name="arcserules_eges" id="arcserules_eges">
                        <label for="arcserules_eges">Igen - égés</label>
                    </p>
                    <p>
                        <input type="hidden" name="arcserules_tores" value="none">
                        <input type="checkbox" class="filled-in" name="arcserules_tores" id="arcserules_tores">
                        <label for="arcserules_tores">Igen - törés</label>
                    </p>
                    <p>
                        <input type="hidden" name="arcserules_egyeb" value="none">
                        <input type="checkbox" class="filled-in" name="arcserules_egyeb" id="arcserules_egyeb">
                        <label for="arcserules_egyeb">Igen - egyéb</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">9.Van-e mások számára is észrevehető elváltozás, szépséghiba az Ön arcán? (Egyszerre többet is bejelölhet)</div>
                    <p>
                        <input type="hidden" name="elvaltozas_nem" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_nem" id="elvaltozas_nem">
                        <label for="elvaltozas_nem">Nincs.</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_anyajegy" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_anyajegy" id="elvaltozas_anyajegy">
                        <label for="elvaltozas_anyajegy">Nagyobb anyajegy / szemölcs / szeplő</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_pigmentfolt" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_pigmentfolt" id="elvaltozas_pigmentfolt">
                        <label for="elvaltozas_pigmentfolt">Pigmentfolt</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_egesiserules" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_egesiserules" id="elvaltozas_egesiserules">
                        <label for="elvaltozas_egesiserules">Égési sérülés</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_baleset" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_baleset" id="elvaltozas_baleset">
                        <label for="elvaltozas_baleset">Baleseti sérülés nyoma</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_mutet" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_mutet" id="elvaltozas_mutet">
                        <label for="elvaltozas_mutet">Műtéti heg</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_veleszuletett" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_veleszuletett" id="elvaltozas_veleszuletett">
                        <label for="elvaltozas_veleszuletett">Veleszuletett rendellenesség</label>
                    </p>
                    <p>
                        <input type="hidden" name="elvaltozas_egyeb" value="none">
                        <input type="checkbox" class="filled-in" name="elvaltozas_egyeb" id="elvaltozas_egyeb">
                        <label for="elvaltozas_egyeb">Egyéb</label>
                    </p>

                </div>
            </div>
        </div>


        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">10. Mennyire érez együtt Ön azokkal a személyekkel, akik maradandó sérülést szenvedtek az arcukon?</div>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez1" value="egyaltalannem"/>
                        <label for="eggyutterez1">Egyáltalán nem</label>
                    </p>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez2" value="valamennyire"/>
                        <label for="eggyutterez2">Valamennyire</label>
                    </p>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez3" value="kozepesen"/>
                        <label for="eggyutterez3">Közepesen</label>
                    </p>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez4" value="elegge"/>
                        <label for="eggyutterez4">Eléggé</label>
                    </p>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez5" value="teljesen"/>
                        <label for="eggyutterez5">Teljesen</label>
                    </p>
                    <p>
                        <input name="eggyutterez" type="radio" id="eggyutterez6" value="enis"/>
                        <label for="eggyutterez6">Én is maradandó sérülést szenvedtem az arcomon</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">11.Ismer-e olyan személyt, akinek az arcán esztétikai hiba, sérülés van (pl. heg, pigmentfolt, égési sérülés)? (Egyszerre többet is bejelölhet.)</div>
                    <p>
                        <input type="hidden" name="ismer_nem" value="none">
                        <input type="checkbox" class="filled-in" name="ismer_nem" id="ismer_nem">
                        <label for="ismer_nem">Nem.</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismer_ismeroseim" value="none">
                        <input type="checkbox" class="filled-in" name="ismer_ismeroseim" id="ismer_ismeroseim">
                        <label for="ismer_ismeroseim">Igen, ismerőseim közt van ilyen.</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismer_csaladomban" value="none">
                        <input type="checkbox" class="filled-in" name="ismer_csaladomban" id="ismer_csaladomban">
                        <label for="ismer_csaladomban">Igen, családomban van ilyen.</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismer_talalkozom" value="none">
                        <input type="checkbox" class="filled-in" name="ismer_talalkozom" id="ismer_talalkozom">
                        <label for="ismer_talalkozom">Igen, találkozok ilyen személyekkel (pl. munkám során)</label>
                    </p>

                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">11.2. Ha az előző kérdésre igennel válaszolt, milyen személyes tapasztalatai érzései vannak az adott személlyel kapcsolatban? (Egyszerre többet is bejelölhet.)</div>
                    <p>
                        <input type="hidden" name="ismertapasztalat_pozitiv" value="none">
                        <input type="checkbox" class="filled-in" name="ismertapasztalat_pozitiv" id="ismertapasztalat_pozitiv">
                        <label for="ismertapasztalat_pozitiv">pozitív</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismertapasztalat_negativ" value="none">
                        <input type="checkbox" class="filled-in" name="ismertapasztalat_negativ" id="ismertapasztalat_negativ">
                        <label for="ismertapasztalat_negativ">negatív</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismertapasztalat_semleges" value="none">
                        <input type="checkbox" class="filled-in" name="ismertapasztalat_semleges" id="ismertapasztalat_semleges">
                        <label for="ismertapasztalat_semleges">semleges</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismertapasztalat_vegyes" value="none">
                        <input type="checkbox" class="filled-in" name="ismertapasztalat_vegyes" id="ismertapasztalat_vegyes">
                        <label for="ismertapasztalat_vegyes">vegyes</label>
                    </p>
                    <p>
                        <input type="hidden" name="ismertapasztalat_nincs" value="none">
                        <input type="checkbox" class="filled-in" name="ismertapasztalat_nincs" id="ismertapasztalat_nincs">
                        <label for="ismertapasztalat_nincs">Nincs ilyen ismrősöm</label>
                    </p>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">12.Milyen jellegű legközelebbi viszonyt fogadna el szívesen, a felsorolt jellemzőkkel rendelkező személlyel?
                    Jelölje be a legközelebbi viszonynak megfelelő számot, minden jellemzőnél csak egyet!</div>
                    <div class="row">
                        <div class="col m6">
                            <ol>
                                <li>Családomba fogadnám.</li>
                                <li>Elfogadnám barátomnak.</li>
                                <li>Elfogadnám osztálytársamnak/ munkatársamnak.</li>
                                <li>Elfogadnám szomszédnak.</li>
                            </ol>
                        </div>
                        <div class="col m6">
                            <ol>

                                <li value="5">Egy városban, faluban laknék vele.</li>
                                <li>Egy országban sem laknék vele.</li>
                                <li value="9">Nem tudom.</li>
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
                                        <td>Roma</td><?php RadioRange9("roma",6, 12);?>
                                    </tr>
                                    <tr>
                                        <td>Pedofil</td><?php RadioRange9("pedofil",6, 12);?>
                                    </tr>
                                    <tr>
                                        <td>Veri a feleségét</td><?php RadioRange9("asszonyvero",6, 12);?>
                                    </tr>
                                    
                                    <tr>
                                        <td>Háborús veterán</td><?php RadioRange9("veteran",6, 12);?>
                                    </tr>
                                    <tr>
                                        <td>Bűnöző</td><?php RadioRange9("bunozo",6, 12);?>
                                    </tr>
                                    
                                    <tr>
                                        <td>Féllábú</td><?php RadioRange9("fellabu",6, 12);?>
                                    </tr>
                                    <tr>
                                        <td>Serülés nyoma van az arcán</td><?php RadioRange9("serulasazarcon",6, 12);?>
                                    </tr>
                                    <tr>
                                        <td>Extrémsportoló</td><?php RadioRange9("extremsport",6, 12);?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">13. Milyen mértékben határozza meg egy adott személyről kialakított benyomását annak arcának szépsége?</div>
                    <?php RadioRangeWithTitles("benyomas",10,8,"Egyáltalán nem","","Teljes mértékben");?>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">14. A környezetemben lévő emberekhez képest az én arcom:</div>
                    <p>
                        <input name="kornyezetviszonyit" type="radio" id="kornyezetviszonyit1" value="szep"/>
                        <label for="kornyezetviszonyit1">Szép</label>
                    </p>
                    <p>
                        <input name="kornyezetviszonyit" type="radio" id="kornyezetviszonyit2" value="szebb"/>
                        <label for="kornyezetviszonyit2">Szebb</label>
                    </p>
                    <p>
                        <input name="kornyezetviszonyit" type="radio" id="kornyezetviszonyit3" value="atlagos"/>
                        <label for="kornyezetviszonyit3">Átlagos</label>
                    </p>
                    <p>
                        <input name="kornyezetviszonyit" type="radio" id="kornyezetviszonyit4" value="csunyabb"/>
                        <label for="kornyezetviszonyit4">Csúnyább</label>
                    </p>
                    <p>
                        <input name="kornyezetviszonyit" type="radio" id="kornyezetviszonyit5" value="nemszep"/>
                        <label for="kornyezetviszonyit5">Nem szép</label>
                    </p>
                </div>
            </div>
        </div>

        
         <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">15. Mennyire pozitív vagy negatív érzelmeid vannak a sérült arcú személyekkel kapcsolatban?</div>
                    <?php RadioRangeWithTitles("serultarcuerzelmek",10,8,"Nagyon negatív","Semleges","Nagyon pozitív");?>
                </div>
            </div>
        </div>

        <div class="question-wrapper">
            <div class="card z-depth-0">
                <div class="card-content">
                    <div class="card-title">Megjegyzések</div>
                    <div class="input-field">
                        <input type="hidden" name="megjegyzesek" value="none">
                        <textarea id="megjegyzesek" name="megjegyzesek" class="materialize-textarea"></textarea>
                        <label for="megjegyzesek">(opcionális)</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
            <div class="col m2 offset-m5">
                <a id="submit-button" href="#" class="waves-effect waves-light blue btn" onclick="$('#explicit').submit(); ">Küldés</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
