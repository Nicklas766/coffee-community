# Du har fått en kund som heter WGTOTW (We Gonna Take Over The World) och kunden har en enorm kassa och är villig att spendera en hel del på dig.
[![Build Status](https://travis-ci.org/Nicklas766/coffee-community.svg?branch=master)](https://travis-ci.org/Nicklas766/coffee-community)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Nicklas766/coffee-community/?branch=master)

# Idéer
Ha samma design för användare som på b1tre bildgalleri.

https://knowledge.klarna.com/  // Cool design för tags och top contribitours

// Ha en "this customer is liked" eller disliked :(.

# lista
1. Ändra så alla views är bra, tagga sedan modulen git push och integrera i coffee-community hemsidan
2. pagerender kan vara i projektets egna src, bara att fixa DI ✔
3. Skapa jquery för votes vyerna och titta så de stämmer


# lista idag
1. Gör så man kan rösta på kommenterarer och frågor. ✔
2. Sorteringskrav på krav 4  ✔
3. Koppla svar till frågorna samt rank ✔
4. Krav 5 funktion ✔
5. Skapa översikt av alla användare ✔
6. Gör så man kan se en användares profil ✔
7. Visa en översikt på användarens sida om all aktivitet som användaren gjort, dvs frågor, svar, kommentarer, antalet röstningar gjorda samt vilket rykte användaren har. ✔


8. Integrera nya views till coffee-community




# VIKTIGT GÖR SÅ MAN KAN REDIGERA SINA FRÅGOR, KOMMENTARER, SVAR


ha en query för up eller down, du gör ändringar i config och view även comment

# Krav 1, 2, 3: Grunden MODULEN

| Krav                                                                                                                                                                                                                  |                Checkbox                |
|:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |:--------------------------------------:|
| Skapa ett nytt repo för projektet, spara i me/kmom10.                                                                                                                                                                 |                   ✔                    |
| Webbsidan skall skyddas av inloggning. Det skall gå att skapa en ny användare. Användaren skall ha en profil som kan uppdateras. Användarens bild skall vara en gravatar.                                             |                   ✔                    |
| Webbplatsen skall ha en förstasida, en sida för frågor, en sida för taggar och en sida för användare. Det skall finnas en About-sida med information om webbplatsen, dess GitHub-repo och dig själv.                  |                   ✔                    |
| En användare kan ställa frågor, eller besvara dem. Alla inlägg som en användare gör kan kopplas till denna. Klickar man på en användare så ser man vilka frågor som användaren ställt och vilka frågor som besvarats. |                   ✔                    |
| En fråga kan ha en eller flera taggar kopplade till sig. När man listar en tagg kan man se de frågor som har den taggen. Klicka på en tagg för att komma till de frågor som har taggen kopplat till sig.              |                   ✔                    |
| En fråga kan ha många svar. Varje fråga och svar kan i sin tur ha kommentarer kopplade till sig.                                                                                                                      |                   ✔                    |
| Alla frågor, svar och kommentarer skrivs i Markdown.                                                                                                                                                                  |          Behövs kontrolleras           |
| Förstasidan skall ge en översikt av senaste frågor tillsammans med de mest populära taggarna och de mest aktiva användarna.                                                                                           | Allt går förutom mest aktiva användare |
| Webbplatsen skall finnas på GitHub, tillsammans med en README som beskriver hur man checkar ut och installerar sin egen version.                                                                                      |                 Halva                  |
| Webbplatsen skall finnas i drift med innehåll på studentservern.                                                                                                                                                      |                   X                    |
| Kommandot make test skall passera för källkoden.                                                                                                                                                                      |          Behövs kontrolleras           |
| Repot på GitHub skall vara länkat till en byggtjänst likt Travis/CircleCI och till en tjänst för kodkvalitet likt Scrutinizer/CodeClimate. README-filen på GitHub innehåller motsvarande badges.                      |                   X                    |
|                                                                                                                                                                                                                       |                                        |


# Krav 1, 2, 3: Grunden COFFEE-COMMUNITY

| Krav                                                                                                                                                                                                                  | Checkbox |
|:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |:--------:|
| Skapa ett nytt repo för projektet, spara i me/kmom10.                                                                                                                                                                 |    ✔     |
| Webbsidan skall skyddas av inloggning. Det skall gå att skapa en ny användare. Användaren skall ha en profil som kan uppdateras. Användarens bild skall vara en gravatar.                                             |    ✔     |
| Webbplatsen skall ha en förstasida, en sida för frågor, en sida för taggar och en sida för användare. Det skall finnas en About-sida med information om webbplatsen, dess GitHub-repo och dig själv.                  |    ✔     |
| En användare kan ställa frågor, eller besvara dem. Alla inlägg som en användare gör kan kopplas till denna. Klickar man på en användare så ser man vilka frågor som användaren ställt och vilka frågor som besvarats. |    ✔     |
| En fråga kan ha en eller flera taggar kopplade till sig. När man listar en tagg kan man se de frågor som har den taggen. Klicka på en tagg för att komma till de frågor som har taggen kopplat till sig.              |    ✔     |
| En fråga kan ha många svar. Varje fråga och svar kan i sin tur ha kommentarer kopplade till sig.                                                                                                                      |    ✔     |
| Alla frågor, svar och kommentarer skrivs i Markdown.                                                                                                                                                                  |    ✔     |
| Förstasidan skall ge en översikt av senaste frågor tillsammans med de mest populära taggarna och de mest aktiva användarna.                                                                                           |    ✔     |
| Webbplatsen skall finnas på GitHub, tillsammans med en README som beskriver hur man checkar ut och installerar sin egen version.                                                                                      |    X     |
| Webbplatsen skall finnas i drift med innehåll på studentservern.                                                                                                                                                      |    X     |
| Kommandot make test skall passera för källkoden.                                                                                                                                                                      |    X     |
| Repot på GitHub skall vara länkat till en byggtjänst likt Travis/CircleCI och till en tjänst för kodkvalitet likt Scrutinizer/CodeClimate. README-filen på GitHub innehåller motsvarande badges.                      |    ✔     |
|                                                                                                                                                                                                                       |          |






# Krav 4: Frågor (optionell)

| Krav                                                                                                                                                                         | Checkbox |
|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |:--------:|
| Ett svar kan märkas ut som ett accepterat svar.                                                                                                                              |    ✔     |
| Varje svar, fråga och kommentar kan röstas på av användare med +1 (up-vote) eller -1 (down-vote), summan av en fråga/svar/kommentars rank är ett betyg på hur “bra” den var. |    ✔     |
| Svaren på en fråga kan sorteras och visas antingen enligt datum, eller rank (antalet röster).                                                                                |    ✔     |
| Översikten av frågorna visar hur många svar en fråga har samt vilken rank.                                                                                                   |    ✔     |
|                                                                                                                                                                              |          |



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
EJ PÅBÖRJAD
# Krav 5: Användare (optionell)

Inför ett poängsystem som baseras på användarens aktivitet. Följande kan ge poäng:

    Skriva fråga ✔
    Skriva svar ✔
    Skriva kommentar ✔
    Ranken på skriven fråga, svar, kommentar. ✔

Summera allt och sätt det till användarens rykte.

Visa en översikt på användarens sida om all aktivitet som användaren gjort, dvs frågor, svar, kommentarer, antalet röstningar gjorda samt vilket rykte användaren har.

Du kan efter eget tycke modifiera reglerna för hur användarens rykte beräknas.



# Krav 6 (optionell)

| Krav                                                                                                                                             | Poäng | Checkbox |
|:------------------------------------------------------------------------------------------------------------------------------------------------ |:-----:|:--------:|
| Användare kan ha en kontrollfråga (favoriträtt) för att återställa lösenordet                                                                    |   2   |    ✔     |
| Jag tycker att det märks att jag ansträngt mig, jag har wrappers till olika delar, som t.ex home, design                                         |   2   |    X     |
| Jag använder ajax med hjälp av jquery för att få en snygg transaktion när man accepterar ett svar eller tummar upp något eller kommenterar.      |       |          |
| Det är givetvis javascript och inte php, men det bidrar otroligt mycket till en bättre hemsida enligt mig och det var utmanande att få till det. |   4   |    ✔     |
|                                                                                                                                                  |       |          |
|                                                                                                                                                  |       |          |
| Man skulle kunan argumentera detta är en php kurs, men det är ju även en ramverks kurs, så känns som ett logiskt extra krav, lite snygg ajax.    |   2   |    ✔     |
| Jag la till "upp" och "ner" på Svaren                                                                                                            |   1   |    ✔     |
|                                                                                                                                                  |       |          |

Jag la ner tid och energi på designen, jag ville göra en bra frontend, en sida som jag kan vara stolt över att visa andra.
Ja la ner mycket tid på hur frågorna ser ut, man kan trycka för att få up en popup med info med mera. Det som är riktigt coolt
med min question-sida, är att alla "likes", är ajax och uppdaterar endast siffrorna, så det blir en riktigt "smooth-transaktion"
