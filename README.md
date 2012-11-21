Euer Projekttitel
===========

---------------
## Was ist git?

[git](http://git-scm.com/) ist ein verteiltes Version Control System, welches ihr nutzen k�nnt um kollaborativ an Source-Code zu arbeiten und eure Daten auf unserem Server zu sichern. Wenn ihr euch mit git noch nicht auskennt, dann gibt es [hier](http://sixrevisions.com/resources/git-tutorials-beginners/) ein paar Tutorials.

Ihr k�nnt git entweder �ber die Konsole benutzen oder mit Hilfe eines [GUI-Tools](http://delicious.com/matthew.mccullough/git+gui?link_view=compact) (die Liste ist leider nicht sortiert).

Die Gitlab-Webplattform, auf der ihr euch gerade befindet, bietet euch dar�ber hinaus einen Bugtracker und eine Wiki und erm�glicht euch zudem das gesamte Repository zu durchst�bern.

---------------
## Zugriff auf das Repository

Um das Repository klonen und auf den Server pushen zu k�nnen, gibt es zwei M�glichkeiten.

### Anmeldung mit SSH

Um euch mit dem Repository zu verbinden, m�sst ihr einen SSH-Key verwenden, welchen ihr zuvor in euren [Benutzereinstellungen](/keys) hinzuf�gen m�sst. Dies funktioniert nur wenn ihr das Repository �ber die `SSH`-URL klont. N�here Information dar�ber findet ihr in der [GitHub-Hilfe](https://help.github.com/articles/generating-ssh-keys).

Zudem k�nnt ihr unter Windows auch [PuTTYgen](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html) benutzen um euer Key-Paar zu erzeugen.

### Anmeldung mit Passwort

Alternativ k�nnt ihr git mit eurem Gitlab Passwort benutzen, jedoch nur wenn ihr das Repository �ber die `http`-URL klont. Dazu m�sst ihr wie in der [GitHub-Hilfe](https://help.github.com/articles/set-up-git) beschrieben eure Email-Adresse angeben und der Benutzerfreundlichkeit halber das Passwort-Caching aktivieren.

---------------
## Struktur des Repositories

git Repositories k�nnen beliebig viele Branches enthalten. Aktuell enth�lt euer Repository drei Branches:

* `master`: Source-Code-Branch f�r lauff�higen, stabilen Source-Code
* `development`: Source-Code-Branch / Entwicklungs-Branch mit aktuellster Version des Source-Codes
* `project_data`: F�r Dokumentationen, Manuels, Berichte, Release-Executables, Recherche-Paper, etc.

Im Sinne eurer Teammitglieder solltet ihr **keinen nicht-kompilierbaren Code** in `master` und `development` **committen**. Erstellt euch daf�r am Besten, wie unten beschrieben, Feature Branches.

Manche Branches haben gemeinsame Vorfahren (_base_) und k�nnen ineinander ge-merged werden (z. B. `master` und `development`). Ihr k�nnt allerdings auch vollkommen neue Branches anlegen, welche ganz andere Daten beinhalten (wie z. B. `project_data`). Solche Branches solltet ihr euch zum einfacheren Zugriff neben dem Source-Code in ein eigenes Verzeichnis klonen.

**Tipp:** Jeder Branch (eigentlich sogar jeder Ordner) innerhalb des Repositories kann eine Datei mit dem Namen `README.md` enthalten, welche in Gitlab direkt formatiert angezeigt wird und bestenfalls Informationen �ber den aktuellen Branch bieten sollte. Aktuell schaut ihr euch beispielsweise die `README.md` des `master`-Branches an. Fangt doch gleich mal damit an und �ndert den Projekttitel am Anfang dieser Datei.

### Feature Branches

Branches kosten nichts. Ihr k�nnt ruhig f�r jedes neue Feature einen neuen Branch anlegen (und nach dem Mergen wieder l�schen). Schaut euch ruhig mal den Artikel [A successful Git branching model](http://nvie.com/posts/a-successful-git-branching-model/) an.

Wie in dem Artikel beschrieben, solltet ihr beim Mergen die Option _No Fast-Forward_ (`--no-ff`) benutzen, damit die historische Information �ber den Feature Branch nicht verloren geht.

**Tipp:** Achtet darauf in den entsprechenden Remote-Feature-Branch zu pushen!

---------------
## Probleme

### Bin�re Dateien in Source-Code-Branches

Bin�re Dateien f�hren h�ufig zu Merge-Problemen, wenn mehrere Nutzer die gleiche Datei bearbeiten. Es empfiehlt sich daher bin�re Dateien, die sich h�ufig �ndern nicht dem Repository hinzuzuf�gen. 

Das schlie�t unter Anderem Build-Ordner (z. B. von C++-Projekten) und Java `class`-Dateien ein. Es empfiehlt sich generell, **aus dem Source-Code generierte Dateien nicht dem Repository hinzuzuf�gen**! 

Benutzt daf�r `.gitignore`-Dateien, innerhalb derer ihr spezielle Regeln zum Ignorieren von Dateien anlegen k�nnt. Ein Beispiel ist in der [GitHub-Hilfe](https://help.github.com/articles/ignoring-files) zu finden. Vom globalen `.gitignore` raten wir eher ab, da die Regeln darin lokal auf dem Rechner sind und den anderen Team-Mitgliedern somit nicht genutzt werden. Zus�tzlich gibt es auch eine [Sammlung hilfreicher .gitignore Templates](https://github.com/github/gitignore).

Um bin�re Dateien, die nicht zum Source-Code geh�ren (Release-Executables, PDFs aus Recherchen, Dependencies, Berichte etc.), zu sichern, k�nnt ihr einfach den Branch `project_data` benutzen oder sie in Gitlab direkt als Anhang von einer Wiki-Seite oder einem Bug hochladen.

### Zeilenenden

Wenn die Mitglieder des Teams auf unterschiedlichen Plattformen arbeiten, gibt es h�ufig Merge-Probleme aufgrund der unterschiedlichen Zeilenenden. 

Um dieses Problem zu umgehen, solltet ihr **alle Typen von Text-Dateien und bin�ren Dateien in der `.gitattributes`-Datei definieren**. Dies sorgt daf�r das Text-Dateien innerhalb des Repositories mit Unix-Zeilenenden gespeichert, aber beim Checkout in die Zeilenenden der jeweiligen Plattform konvertiert werden (letzteres jedoch nur wenn `core.autcrlf` auf `true` gesetzt ist). Dies muss f�r jeden Branch gemacht werden! Mehr Informationen gibt es in der [GitHub-Hilfe](https://help.github.com/articles/dealing-with-line-endings).

### Ihr habt schon ein git Repository?

Wenn ihr schon ein Repository habt, dann l�scht einfach die Remote-Branches, welche dieselben Namen wie die Branches eures Repositories haben (h�chstwahrscheinlich geh�rt dazu `master`) und pushed eure Branches hier in dieses Repository. Vergesst nicht die `README.md` und `.gitattributes` zuvor in euer altes Repository zu �bernehmen.