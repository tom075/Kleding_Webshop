<?php
if (!isset($_SERVER['HTTP_COOKIE'])) {
    echo "<script>
location.replace('https://tom-folkers.nl/projecten/kleding_webshop/login');
</script>
";
}
?>
<div class="md:w-1/3 w-full m-auto">
    <h1 class="text-4xl font-bold text-center">Uw account</h1>

    <dl id="billing-address" class="addresses">
        <dt>FACTUURADRES</dt>
        <dd>
            <address>Meneer&nbsp; Tom &nbsp;Folkers <br/>Johnstraat &nbsp;53 <br/>1023 JR &nbsp;Zaandam <br/>Nederland<br/><a
                        href="mailto:t.folkers@icloud.com">t.folkers@icloud.com</a></address>
    </dl>
    <br>
    <hr/>
    <p id="remember-me-enabled" class="remember-me">Om jou interessante producten te kunnen aanbieden, jouw bezoek aan
        onze website zo soepel mogelijk te laten verlopen en je te kunnen indentificeren als bestaande klant, onthouden
        wij jouw gegevens. Hiervoor slaan wij 30 dagen lang een cookie over jouw surfgedrag op mediamarkt.nl op jouw
        computer op. Dit gebeurt anoniem en is niet te herleiden naar jou als persoon. Voor aanvullende informatie over het gebruik van cookies op onze website, zie het <a title="Privacy Statement"
                                                                                             data-layer="privacy">Privacy
            Statement</a>.</p>
<br>
    <p>Onze website maakt gebruik van cookies en daarmee vergelijkbare technieken. MediaMarkt gebruikt analytische cookies om het gedrag van bezoekers na te gaan en de website aan de hand van deze gegevens te verbeteren. Daarnaast plaatsen derden tracking cookies om gepersonaliseerde advertenties te tonen. Ook worden er tracking cookies geplaatst door social media-netwerken. Jouw internetgedrag kan door middel van deze tracking cookies door deze derden gevolgd worden. Wil je niet alle cookies accepteren? Dan kan je dit aanpassen in de instellingen. Wanneer je op 'Doorgaan' klikt, geef je toestemming voor het plaatsen van cookies door jouw gehele online customer journey. Lees voor meer informatie onze cookieverklaring en privacyverklaring.

    </p>
    <button class="w-3/4 mb-10 m-auto mt-10 max-w-lg shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold w-1/5  py-2 px-4 rounded" type="button">
        <a href="/projecten/kleding_webshop/resources/templates/verify/logout.php">loguit</a></button>
</div>

