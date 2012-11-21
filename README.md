Euer Projekttitel
===========

---------------
## Was ist git?

[git](http://git-scm.com/) ist ein verteiltes Version Control System, welches ihr nutzen könnt um kollaborativ an Source-Code zu arbeiten und eure Daten auf unserem Server zu sichern. Wenn ihr euch mit git noch nicht auskennt, dann gibt es [hier](http://sixrevisions.com/resources/git-tutorials-beginners/) ein paar Tutorials.

Ihr könnt git entweder über die Konsole benutzen oder mit Hilfe eines [GUI-Tools](http://delicious.com/matthew.mccullough/git+gui?link_view=compact) (die Liste ist leider nicht sortiert).

Die Gitlab-Webplattform, auf der ihr euch gerade befindet, bietet euch darüber hinaus einen Bugtracker und eine Wiki und ermöglicht euch zudem das gesamte Repository zu durchstöbern.

---------------
## Zugriff auf das Repository

Um das Repository klonen und auf den Server pushen zu können, gibt es zwei Möglichkeiten.

### Anmeldung mit SSH

Um euch mit dem Repository zu verbinden, müsst ihr einen SSH-Key verwenden, welchen ihr zuvor in euren [Benutzereinstellungen](/keys) hinzufügen müsst. Dies funktioniert nur wenn ihr das Repository über die `SSH`-URL klont. Nähere Information darüber findet ihr in der [GitHub-Hilfe](https://help.github.com/articles/generating-ssh-keys).

Zudem könnt ihr unter Windows auch [PuTTYgen](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html) benutzen um euer Key-Paar zu erzeugen.

### Anmeldung mit Passwort

Alternativ könnt ihr git mit eurem Gitlab Passwort benutzen, jedoch nur wenn ihr das Repository über die `http`-URL klont. Dazu müsst ihr wie in der [GitHub-Hilfe](https://help.github.com/articles/set-up-git) beschrieben eure Email-Adresse angeben und der Benutzerfreundlichkeit halber das Passwort-Caching aktivieren.

---------------
## Struktur des Repositories

git Repositories können beliebig viele Branches enthalten. Aktuell enthält euer Repository drei Branches:

* `master`: Source-Code-Branch für lauffähigen, stabilen Source-Code
* `development`: Source-Code-Branch / Entwicklungs-Branch mit aktuellster Version des Source-Codes
* `project_data`: Für Dokumentationen, Manuels, Berichte, Release-Executables, Recherche-Paper, etc.

Im Sinne eurer Teammitglieder solltet ihr **keinen nicht-kompilierbaren Code** in `master` und `development` **committen**. Erstellt euch dafür am Besten, wie unten beschrieben, Feature Branches.

Manche Branches haben gemeinsame Vorfahren (_base_) und können ineinander ge-merged werden (z. B. `master` und `development`). Ihr könnt allerdings auch vollkommen neue Branches anlegen, welche ganz andere Daten beinhalten (wie z. B. `project_data`). Solche Branches solltet ihr euch zum einfacheren Zugriff neben dem Source-Code in ein eigenes Verzeichnis klonen.

**Tipp:** Jeder Branch (eigentlich sogar jeder Ordner) innerhalb des Repositories kann eine Datei mit dem Namen `README.md` enthalten, welche in Gitlab direkt formatiert angezeigt wird und bestenfalls Informationen über den aktuellen Branch bieten sollte. Aktuell schaut ihr euch beispielsweise die `README.md` des `master`-Branches an. Fangt doch gleich mal damit an und ändert den Projekttitel am Anfang dieser Datei.

### Feature Branches

Branches kosten nichts. Ihr könnt ruhig für jedes neue Feature einen neuen Branch anlegen (und nach dem Mergen wieder löschen). Schaut euch ruhig mal den Artikel [A successful Git branching model](http://nvie.com/posts/a-successful-git-branching-model/) an.

Wie in dem Artikel beschrieben, solltet ihr beim Mergen die Option _No Fast-Forward_ (`--no-ff`) benutzen, damit die historische Information über den Feature Branch nicht verloren geht.

**Tipp:** Achtet darauf in den entsprechenden Remote-Feature-Branch zu pushen!

---------------
## Probleme

### Binäre Dateien in Source-Code-Branches

Binäre Dateien führen häufig zu Merge-Problemen, wenn mehrere Nutzer die gleiche Datei bearbeiten. Es empfiehlt sich daher binäre Dateien, die sich häufig ändern nicht dem Repository hinzuzufügen. 

Das schließt unter Anderem Build-Ordner (z. B. von C++-Projekten) und Java `class`-Dateien ein. Es empfiehlt sich generell, **aus dem Source-Code generierte Dateien nicht dem Repository hinzuzufügen**! 

Benutzt dafür `.gitignore`-Dateien, innerhalb derer ihr spezielle Regeln zum Ignorieren von Dateien anlegen könnt. Ein Beispiel ist in der [GitHub-Hilfe](https://help.github.com/articles/ignoring-files) zu finden. Vom globalen `.gitignore` raten wir eher ab, da die Regeln darin lokal auf dem Rechner sind und den anderen Team-Mitgliedern somit nicht genutzt werden. Zusätzlich gibt es auch eine [Sammlung hilfreicher .gitignore Templates](https://github.com/github/gitignore).

Um binäre Dateien, die nicht zum Source-Code gehören (Release-Executables, PDFs aus Recherchen, Dependencies, Berichte etc.), zu sichern, könnt ihr einfach den Branch `project_data` benutzen oder sie in Gitlab direkt als Anhang von einer Wiki-Seite oder einem Bug hochladen.

### Zeilenenden

Wenn die Mitglieder des Teams auf unterschiedlichen Plattformen arbeiten, gibt es häufig Merge-Probleme aufgrund der unterschiedlichen Zeilenenden. 

Um dieses Problem zu umgehen, solltet ihr **alle Typen von Text-Dateien und binären Dateien in der `.gitattributes`-Datei definieren**. Dies sorgt dafür das Text-Dateien innerhalb des Repositories mit Unix-Zeilenenden gespeichert, aber beim Checkout in die Zeilenenden der jeweiligen Plattform konvertiert werden (letzteres jedoch nur wenn `core.autcrlf` auf `true` gesetzt ist). Dies muss für jeden Branch gemacht werden! Mehr Informationen gibt es in der [GitHub-Hilfe](https://help.github.com/articles/dealing-with-line-endings).

### Ihr habt schon ein git Repository?

Wenn ihr schon ein Repository habt, dann löscht einfach die Remote-Branches, welche dieselben Namen wie die Branches eures Repositories haben (höchstwahrscheinlich gehört dazu `master`) und pushed eure Branches hier in dieses Repository. Vergesst nicht die `README.md` und `.gitattributes` zuvor in euer altes Repository zu übernehmen.