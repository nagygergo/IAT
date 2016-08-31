<!DOCTYPE html>
<html>
<head>
<meta lang="hu">
   <?php require_once("services/head.php");?>
    <script src="services/index.js"></script>
    <style>
        ul {
            margin-left: 40px;
        }
        ul li {
            list-style-type: disc;

        }
        .mini{
            font-size: 15px;
            padding-top: 20px;
            padding-bottom: 20px;
        }</style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-content row">
            <div class="col m10 offset-m1">
            <h3 class="center-align">Kedves Kitöltő!</h3>
                <p class="flow-text">Szegedi Tudományegyetem Pszichológiai Intézetében az SZTE SZAKK ÁOK Arc-, Állcsont- és Szájsebészeti Klinika munkatársaival együttműködésben végzett, az emberi arc észlelésével kapcsolatos kutatásunkhoz kérjük a segítségét/segítségedet.
                </p>
            <h5>A teszt részei:</h5>
            <ol>
                <li>demográfiai adatok</li>
                <li>teszt: képeket és szavakat kell minnél gyorsabban előre megadott kategóriákba sorolni</li>
                <li>rövid kérdőív kitöltése</li>
            </ol>
            <h5>A kitöltés</h5>
            <ul>
                <li>kb. 15-20 percet vesz igénybe</li>
                <li>anonim és utólag be nem azonosítható.</li>
                <li>önkéntes alapon zajlik, bármikor meg lehet szakítani (az addigi adatok automatikusan törlődnek)</li>
                <li>során kellemetlen ingerek fordulhatnak elő
                (gyógyulás folyamatában lévő sérülések képe)</li>
                <li>során kapott adatokat szigorúan bizalmasan kezeljük</li>
                <li> során nincsenek jó vagy rossz válaszok</li>
                <li> után nincs lehetőség diagnosztikai jellegű visszajelzést kérni.</li>
            </ul>
                <div class="row">
                    <div class="col m10">
                        <p style="color:red;display: inline; padding-bottom: 20px"><b> <u>Ha folytatja a vizsgálatot:  </u> NE TÖLTSE ÚJRA az oldalt, illetve ne lépjen vissza az előző oldalra, mert akkor a legelejére ugrik vissza a program! <br> FIGYELMESEN OLVASSA EL AZ UTASÍTÁSOKAT!  </b></p>
                        </div>
                    </div>
                        <div class="row">
                <div class="col m10">
            <form method="post" action="router.php" id="index" onsubmit="return checkForm()">
                <input type="hidden" name="origin" value="index">
                <input type="checkbox" class="filled-in" id="terms" >
                <label for="terms"><u>Kitöltési feltételek:<br> </u> Tudomásul veszem, hogy az általam szolgáltatott adatokat a vizsgálatvezető bizalmasan kezeli, 
                illetve kijelentem, hogy a vizsgálat céljáról és jellegéről kielégítő tájékoztatást kaptam.
                A vizsgálatokhoz való hozzájárulásomért anyagi ellenszolgáltatást sem én, sem hozzátartozóm nem kaptunk.  </label>
               <p class="mini"> A kutatással kapcsolatban felmerülő kérdéseket a pszikutmodszertan@gmail.com email címen, IAT tárggyal várjuk.</p> <br>
                <div class="center-align">
                <p class="center-align" style="color:red"> A vizsgálat folytatásához a kitöltési feltételek elfogadása szükséges.</p>
                <a id="submit-button" href="#" class="waves-effect waves-light blue btn" onclick="$('#index').submit();">Tovább</a>
                </div>
            </form>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
</body>