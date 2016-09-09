<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>Demográfiai adatok</title>
    <?php include_once("services/head.php");?>
    <script src="services/adatok.js" type="text/javascript"></script>
    <link rel="stylesheet" href="services/adatok.css"></link>
</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-content row">
            <div class="col m10 offset-m1">
                <p>
                <h5 class="center-align">Kérjük adja meg demográfiai és foglalkozási adatait!</h5>
                <ol>
                    <li> Próbálja mindíg megtalálni a saját adataihoz legközelebb álló válaszlehetőséget! </li>
                    <li> <b>Ha nem talál </b> ilyet, ellenőrizze, hogy a korábbi kérdéseknél biztosan jól választott e a felkínált válaszlehetőségek közül! </li>
                    <li> <b style="color:red">FONTOS:</b> Minden kérdésre válaszolnia kell a teszt folytatásához.</li>
                    <li>Innentől a vizsgálatban 25 éves kor felett a szövegek magázó formában jelennek meg, 25 éves kor alatt pedig tegező formában.
                </ol>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <form id="szemelyes-adatok" method="post" onsubmit="return checkForm()" action="router.php">
        <input type="hidden" name="origin" value="adatok">
        <div class="card" id="altalanos">
            <div class="card-content">
                <div class="card-title">Személyes adatok</div>
                <div class="question">
                    <div class="row">
                        <div class="col m2 input-field">
                            <select name="nem">
                                <option value="" disabled selected>Nem</option>
                                <option value="ferfi">Férfi</option>
                                <option value="no">Nő</option>
                            </select>
                        </div>

                        <div class="input-field col m2">
                            <input placeholder="Kor" type="number" name="kor">
                            <label for="kor">Írja a mezőbe korát</label>
                        </div>
                        <div class="col m4 s8 input-field">
                            
                            <select name="lakhely" class="invalid">
                                <option value="" disabled selected>Lakóhely</option>
                                <option value="fovaros">főváros</option>
                                <option value="megyeszekhely">megyeszékhely</option>
                                <option value="varos">város</option>
                                <option value="falu">falu</option>
                                <option value="tanya">tanya</option>
                            </select>
                        </div>
                        <div class="col m4 s8 input-field">
                            <input placeholder="Település" type="text" name="telepules">
                            <label for="telepules">Írja a mezőbe a település nevét ahol él!</label>
                        </div>

                        <div class="col m6 s8 input-field">
                            <select name="csaladiallapot">
                                <option value="" disabled selected>Családi állapot</option>
                                <option value="hazas">Házasságban élek</option>
                                <option value="parkapcsolat">Párkapcsolatban élek</option>
                                <option value="elvalt">Elváltam</option>
                                <option value="egyedulallo">Egyedülálló vagyok</option>
                                <option value="ozvegy">Özvegy vagyok</option>
                            </select>
                        </div>
                         <div class="col m6 s8 input-field">
                            <select name="gyerek" id="gyerek">
                                <option value="" disabled selected>Gyermekeim száma</option>
                                <option value="nincs">Nincs gyerekem </option>
                                <option value="1">1 </option>
                                <option value="2">2</option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                                <option value="7/több">7 vagy több </option>
                            </select>
                        </div>


                        <div class=" col m6 s8 input-field">
                            <select name="iskolaivegzettseg" id="iskolaivegzettseg">
                                <option value="" disabled selected>Legmagasabb iskolai végzettség</option>
                                <option value="altiskola">Általános iskola</option>
                                <option value="koziskola">Középiskola (gimnázium, szakközépiskola, szakiskola)</option>
                                <option value="jelenlegdiak">Középiskolai tanuló vagyok</option>
                                <option value="jelenleghallgato">Hallgatói jogviszonnyal rendelkezem (főiskolás, egyetemista, phd hallgató) </option>
                                
                                <option value="foiskola">Főiskolai diploma</option>
                                <option value="egyetem">Egyetemi diploma</option>
                                <option value="posztgrad">Posztgraduális képesítéssel rendelkezem</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="dolgozik" style="display: none;">
            <div class="card-content">
                <div class="card-title">Fogalkozási adatok</div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="dolgozik_statusz" id="dolgozik_statusz">
                            <option value="" disabled selected>Státusz</option>
                            <option value="alkalmazott">Alkalmazott</option>
                            <option value="tanulo">Tanuló</option>
                            <option value="vezeto">Vezető</option>
                            <option value="vallalkozo">Vállalkozó</option>
                            <option value="haztartasbeli">Háztartásbeli</option>
                            <option value="munkanelkuli">Munkanélküli</option>
                            <option value="nyugdijas">Nyugdíjas</option>
                        </select>
                    </div>
                    <div class="input-field col m6 s8">
                        <input tpye="text" name="dolgozik_foglalkozas" placeholder="Foglalkozás">
                        <label for="dolgozik_foglalkozas">Írja a mezőbe foglalkozását!</label>
                    </div>
                    <div class="input-field col m6 s8">
                        <select name="dolgozik_munkaterulet" id="munkaterulet">
                            <option value="" disabled selected>Munka jellege</option>
                            <option value="adminisztracio">Adminisztráció/Titkári</option>
                            <option value="bank">Bank</option>
                            <option value="biztonsag">Biztonság/Honvédelem</option>
                            <option value="egeszsegugy"> Egészségügy / Szociális ellátás</option>
                            <option value="emberierof"> Emberi erőforrások</option>
                            <option value="info"> Információs technológia / Elektronika</option>
                            <option value="jog"> Jog/Jogi tanácsadás</option>
                            <option value="kereskedelem">Kereskedelem</option>
                            <option value="kultart">Kultúra / Művészetek / Szórakozás</option>
                            <option value="közlekedés">Közlekedés / Logisztika</option>
                            <option value="reklám">Marketing / Reklám</option>
                            <option value="menedzsment">Menedzsment</option>
                            <option value="mezogazdasag">Mezőgazdaság / Környezettudományok</option>
                            <option value="media">Média / PR</option>
                            <option value="oktatas">Oktatás / Tudomány</option>
                            <option value="penzugy">Pénzügy / Könyvelés</option>
                            <option value="szolgaltatas">Szolgáltatás</option>
                            <option value="telekommunikacio">Telekommunikáció</option>
                            <option value="termeles">Termelés / Gyártás</option>
                            <option value="turizmus">Turizmus / Hotelek / Vendéglátás</option>
                            <option value="allami">Állami adminisztráció / Igazgatásszervezés</option>
                            <option value="epitoipar">Építőipar / Ingatlanforgalmazás</option>
                        </select>
                    </div>

                    <div class="input-field col m6 s8" id="tudfokozat">
                        <select name="tudfokozat">
                            <option value="" disabled selected>Tudományos fokozat</option>
                            <option value="nincs">Nincs</option>
                            <option value="phd">Phd</option>
                            <option value="kandidatus">Kandidátus</option>
                            <option value="habilitacio">Habilitáció</option>
                            <option value="nagydoktor">Nagydoktor</option>
                        </select>
                    </div>
                </div>
                <div class="col 12 center-align" id="nyugdijasszoveg" style="display: none">A fenti cellákat a korábbi foglalkozásának megfelelően töltse ki.</div>
            </div>
        </div>

        <div class="card" id="hallgato" style="display: none">
            <div class="card-content">
                <div class="card-title">Tanulmányi adatok</div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="hallgato_szaktipus">
                            <option value="" selected disabled>Tudományterület</option>
                            <option value="bolcsesz">Bölcsész</option>
                            <option value="egeszsegugyi">Egészségügyi</option>
                            <option value="gazdasagi">Gazdasági</option>
                            <option value="info">Informatikai</option>
                            <option value="jogi">Jogi</option>
                            <option value="muszaki">Műszaki</option>
                            <option value="muveszeti">Művészeti</option>
                            <option value="orvosipreklinikum">Orvosi - preklinikum</option>
                            <option value="orvosiklinikum">Orvosi - klinikum</option>
                            <option value="termeszettud">Természettudományi</option>
                            <option value="egyeb">Egyéb</option>
                        </select>
                    </div>

                    <div class="input-field col m6 s8">
                        <select name="hallgato_varos">
                            <option value="null" disabled selected>Város</option>
                            <option value="budapest">Budapest</option>
                            <option value="debrecen">Debrecen</option>
                            <option value="godollo">Gödöllő</option>
                            <option value="gyor">Győr</option>
                            <option value="kaposvar">Kaposvár</option>
                            <option value="miskolc">Miskolc</option>
                            <option value="sopron">Sopron</option>
                            <option value="szeged">Szeged</option>
                            <option value="pecs">Pécs</option>
                            <option value="veszprem">Veszprém</option>
                            <option value="egyeb">Egyéb </option>
                        </select>
                    </div>
                    <div class="input-field col m6 s8">
                        <input placeholder="Szak" type="text" name="hallgato_szak">
                        <label for="hallgato_szak">Szak</label>
                    </div>
                    <div class="input-field col m6 s8">
                        <select name="hallgato_kepzes">
                            <option value="" disabled selected>Képzés</option>
                            <option value="ba/bsc">Ba/Bsc</option>
                            <option value="ma/msc">Ma/Msc</option>
                            <option value="osztatlan">Osztatlan</option>
                            <option value="phd">Phd</option>
                        </select>
                        </div>
                        <div class="input-field col m6 s8">
                            <select name="hallgato_evfolyam">
                                <option value="" disabled selected>Évfolyam</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


        <div class="card" id="diak" style="display: none">
            <div class="card-content">
                <div class="card-title">Tanulmányi adatok</div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="diak_iskola">
                            <option value="" disabled selected>Iskolád típusa</option>
                            <option value="gimnazium4">Gimnázium - 4 osztályos</option>
                            <option value="gimnazium6">Gimnázium - 6 osztályos</option>
                            <option value="gimnazium8">Gimnázium - 8 osztályos</option>
                            <option value="szakkozep">Szakközépiskola</option>
                            <option value="szakiskola">Szakiskola</option>
                        </select>
                    </div>
                    <div class="input-field col m6 s8">
                        <select name="diak_szuloiskolaivegzettseg">
                            <option value="" disabled selected>Szüleid legmagasabb iskolai végzettsége</option>
                            <option value="altiskola">Általános iskola</option>
                            <option value="koziskola">Középiskola (gimnázium, szakközépiskola, szakiskola)</option>
                            <option value="foiskola">Főiskolai diploma</option>
                            <option value="egyetem">Egyetemi diploma</option>
                            <option value="posztgrad">Posztgraduális képesítés</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="egeszsegugyicard" style="display: none">
            <div class="card-content">
                <div class="card-title">Egészségügyi Munkaterület</div>
                <p>
                    <input type="hidden" name="szakrend" value="none">
                    <input type="checkbox" name="szakrend" class="filled-in" id="szakrend">
                    <label for="szakrend">Szakrendelés </label>
                </p>
                <p>
                    <input type="hidden" name="surgossegi" value="none">
                    <input type="checkbox" class="filled-in" name="surgossegi" id="surgossegi">
                    <label for="surgossegi">Sürgősségi ellátás</label>
                </p>
                <p>
                    <input type="hidden" name="fekvobeteg" value="none">
                    <input type="checkbox" class="filled-in" name="fekvobeteg" id="fekvobeteg">
                    <label for="fekvobeteg">Fekvőbeteg ellátás </label>
                </p>
                <p>
                    <input type="hidden" name="diagnosztika" value="none">
                    <input type="checkbox" class="filled-in" name="diagnosztika" id="diagnosztika">
                    <label for="diagnosztika">Diagnosztikai osztály </label>
                </p>
                <p>
                    <input type="hidden" name="kutatokt" value="none">
                    <input type="checkbox" class="filled-in" name="kutatokt" id="kutatokt">
                    <label for="kutatokt">Kutatás és oktatás</label>
                </p>
                <p>
                    <input type="hidden" name="gazdmuegyeb" value="none">
                    <input type="checkbox" class="filled-in" name="gazdmuegyeb" id="gazdmuegyeb">
                    <label for="gazdmuegyeb">Gazdasági, mûszaki, egyéb osztályok</label>
                    </p>
                <p>
                    <input type="hidden" name="igazgatosag" value="none">
                    <input type="checkbox" class="filled-in" name="igazgatosag" id="igazgatosag">
                    <label for="igazgatosag">Igazgatóság</label>
                </p>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="egeszsegugyi_vegzettseg" id="egeszsegugyivegzettseg">
                            <option value="" disabled selected>Végzettség</option>
                            <option value="orvos">Orvos</option>
                            <option value="ffkv">Felsőfokú végzettségű</option>
                            <option value="szakdolgozo">Egészségügyi szakdolgozó</option>
                            <option value="mas">Egyéb</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="egeszsegugyiorvos" style="display: none">
            <div class="card-content">
                <div class="card-title">Orvos</div>
                <div class="input-field col m6 s8">
                    <select name="orvos_vegzettseg">
                        <option value="" disabled selected>Végzettség</option>
                        <option value="orvos">Orvos</option>
                        <option value="szakorvos">Szakorvos</option>
                        <option value="fogorvos">Fogrvos</option>
                        <option value="fogszakorvos">Fogszakorvos</option>
                    </select>
                </div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="orvos_beosztas">
                            <option value="" disabled selected>Beosztás</option>
                            <option value="rezidens">Rezidens/ Szakorvos jelölt</option>
                            <option value="orvos">Orvos</option>
                            <option value="szakorvos">Szakorvos</option>
                            <option value="tanarseged">Tanársegéd</option>
                            <option value="adjunktus">Adjunktus</option>
                            <option value="docens">Docens/tanár</option>
                            <option value="osztvez">Osztályvezető/ részlegvezető</option>
                            <option value="foorvos">Főorvos</option>
                            <option value="professzor">Professzor</option>
                        </select>
                    </div>

                    <div class="col m4 s8 input-field">
                        <input placeholder="Szakvizsga/szakvizsgák" type="text" name="orvos_szakvizsga">
                        <label for="orvos_szakvizsga">Szakvizsga/szakvizsgák</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="egeszsegugyiegsszak" style="display: none">
            <div class="card-content">
                <div class="card-title">Egészségügi szakdolgozó</div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="egeszsegugyi_munkakor">
                            <option value="" disabled selected>Munkakör</option>
                            <option value="apolo">Ápoló/ szakápoló</option>
                            <option value="segedapolo">Segédápoló</option>
                            <option value="gytornasz">Gyógytornász/masszőr</option>
                            <option value="szuleszno">Szülésznő</option>
                            <option value="mentos">Mentőtiszt/ mentőápoló</option>
                            <option value="mvezeto">Mentő gépkocsi/helikopter vezető</option>
                            <option value="bszallito">Betegszállító/betegkísérő</option>
                            <option value="mutos"> Műtőtechnikus/ műtőssegéd</option>

                            <option value="bonc">Boncmester/boncsegéd</option>
                            <option value="orvosirnok">Orvosírnok</option>
                            <option value="asszisztens">Asszisztens</option>
                            <option value="laborans">Laboráns/technikus</option>
                            <option value="szocmunk">Szociális munkás/gondozó</option>
                            <option value="egyeb">Egyéb</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="egeszsegugyiffkv" style="display: none">
            <div class="card-content">
                <div class="card-title">Felsőfokú végzettség</div>
                <div class="row">
                    <div class="input-field col m6 s8">
                        <select name="egeszsegugyi_munkakor">
                            <option value="" disabled selected>Munkakör</option>
                            <option value="	pszichologus">Pszichológus</option>
                            <option value="klnikaipszi">Klinikai szakpszichológus</option>
                            <option value="laborvegy">Laboratóriumi vegyész, vegyészmérnök, biológus</option>
                            <option value="klinkem">Klinikai sugárfizikus, klinikai biokémikus/ mikrobiológus, molekuláris biológiai diagnosztikus</option>
                            <option value="gyogyped">Gyógypedagógus</option>
                            <option value="logopedus">Logopédus</option>
                            <option value="fizikus">Fizikus</option>
                            <option value="kemikus">Kémikus</option>
                            <option value="egyeb">Egyéb</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
            <div class="col m2 offset-m5">
                <a id="submit-button" href="#" class="waves-effect waves-light blue btn" onclick="$('#szemelyes-adatok').submit(); ">Tovább</a>
            </div>
    </form>
</div>

</body>

</html>