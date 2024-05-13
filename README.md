**TAK23 blogile funktsionaalsus PDO lisamine**

Kodutöö ja ühtlasi ka mooduli veebirakenduse loomise lõputööks sai tehtud enda blogi robustne versioon. 

# Esmane seadistus
1. confif/blog.sql importida phpmyadmin abil endale sobivasse andmebaasi.
2. config/init.php seadistada vastavalt andmebaasi ühendamiseks vajalikud andmed
3. ROOT URL on seadistatud kui: http://localhost/~maiu/blog_Maiu/ Peab muutma vastavalt oma ROOT URL'i **init.php** real 2

Veebilehe selgitus. 
Avaleht on index.php'ga tehtud. Korduste vältimiseks **includes** folderis **header.php**, **footer.php** ja **navbar.php**. Stiilid on **styles** folderis **style.css** failis. 
Avalehele saab tagasi, valides Pealeht ülevalt menüüst. Avaleht on kujundatud nii, et postitused tuleksid kohe sinna alla. Postituste lähemalt vaatamiseks saab vajutada **Loe postitust** nuppu. Seda tehes avaneb postitus, kus on võimalus lisaks seda postitust nii muuta kui ka kustutada. Lisaks on postitust avades näha ka postituse all kõiki postitusi kuupäevade järgi ning on võimalus ka kohe neid avada. 
Menüüs on lisaks pealehele ka võimalus valida **Minust** kui ka **Kontaktid**. Mõlema info tuleb andmebaasist. 
Veebilehe sai disainitud vähemate värvidega ning lõppmulje tundub parem ja silmale sõbralikum kui esialgne esimese veebi kodutöö disain.  
Postitused on lihtsamad kui esialgses veebilehes, kuid kõik on lisatud kasutades veebilehte, mitte ei ole sisestatud otse andmebaasi. 
Andmebaasiga ühendus töötab. Lisada saab uusi postitusi, neid ka muuta kui ka kustutada. Tegin eraldi tabeli postituste jaoks, tabeli minust ning ka kontaktide jaoks eraldi tabeli. Siis on iga asja jaoks oma tabel olemas ning mulle tundus niiviisi lihtsam ja loogilisem. 
