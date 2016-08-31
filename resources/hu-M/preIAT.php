<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once ('services/head.php');?>
        <meta charset="UTF-8">
        <title>Üdvözöljük az IAT tesztben!</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col m10 l10 offset-l1 offset-m1">
                        <h3 class="center-align">Üdvözöljük az IAT tesztben!</h3>

                        <p>Az IAT tesztben (az Implicit Asszociációs Tesztről bővebben <a href="https://implicit.harvard.edu/implicit/hungary/background/index.jsp" target="_blankss">link</a>), szavakat és képeket kell minél gyorsabban kategóriákba rendeznie.</p>


                        <p>
                            A következő feladatban egy-egy csoportba tartozó szavak vagy képek sorát fogja látni. Az egyes tételeket, amilyen gyorsan csak lehet, sorolja be a hozzájuk tartozó kategóriába! (Lehetőség szerint a legkevesebb félreütéssel. A túl lassú haladás vagy a túl sok félreütés értelmezhetetlen eredményhez vezet.)

                        </p>
                        <p style="padding-bottom: 20px">
                            A következőkben a kategóriákat és a hozzájuk tartozó elemek listáját láthatja.
                        </p>
                        <div class="row">
                            <div class="col m10 l10 offset-l1 offset-m1">
                                <table class="striped centered">
                                    <thead>
                                        <tr>
                                            <th data-field="kategoriak">Kategóriák</th>
                                            <th data-field="tetelek">Tételek</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Negatív</td>
                                            <td>Gyötrődés, Rettenetes, Szörnyű, Undok, Gonosz, Borzasztó, Hiba, Bántalom</td>
                                        </tr>
                                        <tr>
                                            <td>Pozitív</td>
                                            <td>Élvezet, Szerelem, Béke, Csodálatos, Gyönyör, Ragyogó, Nevetés, Boldog</td>
                                        </tr>
                                        <tr>
                                            <td>Sérült</td>
                                            <td>Sérült arcokról képek</td>
                                        </tr>
                                        <tr>
                                            <td>Egészséges</td>
                                            <td>Egészséges arcokról képek</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                         <h5 style="color:red;"> <b>Jegyezze meg!</b> </h5> 
                        <ul>
                            <li>Tegye a mutatóujjait az <b>'E'</b> és <b>'I'</b> billentyűkre, hogy minél gyorsabban tudjon válaszolni.</li>
                            <li>Felül két kategórianév jelzi, melyik billentyűhöz mely szavak vagy képek tartoznak.</li>
                            <li>Minden szó vagy kép egyértelműen besorolható az egyik fennt megadott kategóriába.</li>
                            <li>Kérjük, haladjon, amilyen gyorsan csak tud!</li>
                            <li>Elképzelhető, hogy félre üt néhányszor a gyorsaság miatt. Ez nem probléma.</li>
                            <li>A legjobb eredmény érdekében, csökkentse le a zavaró tényezőket, és próbáljon koncentrálni!</li>
                            <li>Ne tartson szünetet az egyes kategorizációs feladat blokkon belül, csak közöttük!</li>
                        </ul>

                        <p>Kérjük, vegye figyelembe a fent említett utasításokat, és azoknak megfelelően végezze el a feladatot!</p>
                        <h5 class="center-align">Jó munkát!</h5>

                        <h5>Technikai információk</h5>
                        <ul style="list-style-type:square">
                            <li>A legpontosabb eredmény elérése érdekében lehetőség szerint csökkentse le a környezeti zajokat, zárja be a háttérben futó programokat.</li>
                            <li>Engedélyezze a JavaScriptet és a felugró ablakokat, a programban való részvételhez.</li>
                            <li><b>Ha erről az oldalról kilép, az a vizsgálat végét jelenti!</b></li>
                            <li>Ha nem látszik jól a feladat, állítssa maximumra a világosság beállítást, győződjön meg róla, hogy a böngésző háttérszínt és szövegszínt felülíró funkciója ki van-e kapcsolva.</li>                        <li>Ha továbbra is probléma van, technikai segítséget emailben kérhet (pszikutmodszertan@gmail.com)</li>
                        </ul>

                        <form method="post" action="router.php" id="preIAT">
                            <input type="hidden" name="origin" value="preIAT">
                            <div class="center-align">
                                <a id="submit-button" class="waves-effect waves-light blue btn" onclick="$('#preIAT').submit();">Tovább</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>