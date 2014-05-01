Redovisning
====================================

Kmom02: Kontroller och Modeller
------------------------------------

Som vanligt tar kursmomenten längre tid än vad man planerat för. Fastnade med Github många timmar men förhoppningsvis ska det fungera nu. Läsanvisningarna var bra, man känner igen mycket i ramverket från Phalcon’s manual.

Jag är “klar” med kmom02, men där finns ett par grejer som ska fixas innan jag påbörjar kmom03, bl. a. ska jag fixa så att man kan ha olika kommentarer på startsidan samt redovisningssidan. Finns ett antal sätt att lösa detta på, har för tillfället 2  alternativ, frågan är bara vilket som är smidigast och kräver minst kodande? Ska man använda sig av ‘post’ och skicka med pageID beroende på vilken sidan man gör inlägget på och lägga i sessionen? Eller ska man lägga till ett pageID i arrayen för comments och sedan loopa igenom den?

Github känns både viktigt och nyttigt att kunna. Version control är ett bra verktyg för att komma åt tidigare versioner av den fil/filer man arbetar med, sedan är det förstås smidigt om man är flera och jobbar med ett projekt att använda sig av Git.

**Hur känns det att jobba med Composer?**

Detta var nytt för mig. Verkar vara ett bra verktyg för att installera paket/bibliotek till ens projekt. Det gick väldigt smidigt att installera ‘kommentarspaketet’ från Packagist med Composer.

**Vad tror du om de paket som finns i Packagist, är det något du kan tänka dig att använda och hittade du något spännande att inkludera i ditt ramverk?**

Där finns säkert mycket nyttigt i Packagist. Var inne och bläddrade bland paket med hittade inget direkt som jag kände behov av att installera.

**Hur var begreppen att förså med klasser som kontroller som tjänster som dispatchas, fick du ihop allt?**

Fortfarande mycket nytt att ta in. Men jag tror jag har koll på det mesta.

**Hittade du svagheter i koden som följde phpmvc/comment? Kunde du förbättra något?**

Inte direkt. Fixade till så att tiden (timestamp) då man gjorde ett inlägg visas rätt. Använder functionen date() som tar timestamp som en parameter.

Nästa steg blir att ägna ytterligare några timmar på att förstå github bättre.

 
Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------
Bra start på kursen. Kändes som att man hängde med bättre i version 2 av phpmvc. Det tog som vanligt längre tid än beräknat att genomföra kursmomentet, men det berodde mestadels på att jag läste om texter flera gånger för att få en bättre förståelse hur saker och ting fungerar. Kan inte påstå att jag bemästrar ramverket, men det börjar gå åt rätt håll. 
 
**Vilken utvecklingsmiljö?**

Jag använder mig ut av programmet PHPDesigner när jag sitter och jobbar i Windows. Annars har jag en tendens att växla mellan olika programm i OSX då jag inte riktigt kan bestämma mig vilket jag tycker bäst om. Kmodo, Espresso, IntelliJ IDEA 12, Aptana Studio och Sublime Text. Alla har sina för och nackdelar.

**Är du bekan med ramverk tidigare?**

Begreppet ramverk är kännt sedan tidigare. Har kikat lite på CMF som WordPress, Joomla och Drupal. Dock har jag bara arbetat med ramverk i version 1 av kursen phpmvc tidigare. Att lära sig hur ANAX fungerar kan säkerligen vara till stor nytta då olika typer av ramverk säkerligen kommer att användas och ingå i framtida arbetsuppgifter.

**Är du sedan tidigare bekant med de lite mer avancerade begrepp som introduceras?**

Det mest känns för mig nytt även då jag läst andra programmerings kurser i bland annat C och Java. På något sätt blir det mycket att hålla reda på när man arbetar med PHP, HTML, CSS och databaser samtidigt. Här kan säkerligen mvc underlätta förståelsen om man delar upp koden i olika delar.

**Din uppfattning om Anax, och speciellt Anax-MVC?**

Nu i början är det mycket att ta in. Man får läsa igenom “manualen” mer än en gång för att försöka försa vilka olika delar som gör vad och var man ska redigera för att lägga till eller ändra en funktion i ramverket.
 
Har som synes inte lagt någon tid på att få till en behaglig design på sidan men hoppas kunna lägga lite tid på det till nästa kursmoment.