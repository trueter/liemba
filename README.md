Euer Projekttitel
===========

---------------
## Was ist git?

[git](http://git-scm.com/) ist ein verteiltes Version Control System, welches ihr nutzen könnt um kollaborativ an Source-Code zu arbeiten und eure Daten auf unserem Server zu sichern. 

* [Tutorials](http://sixrevisions.com/resources/git-tutorials-beginners/)
* [GUI-Tools](http://delicious.com/matthew.mccullough/git+gui?link_view=compact) (unsortierte Liste)


Die **Gitlab**-Webplattform (ein Klon der [GitHub](https://github.com/)-Plattform), auf der ihr euch gerade befindet, bietet euch darüber hinaus einen **Bugtracker** und eine **Wiki** und ermöglicht euch zudem das gesamte Repository zu durchstöbern.

### Begriffe und Commands

![Git Data Transport Commands](http://osteele.com/images/2008/git-transport.png)

Repositories in git sind technisch gesehen gleichwertig, egal ob sie auf einem Server (**Remote-Repository**) oder lokal existieren.

* **Branch**: Ein Entwicklungs-Zweig innerhalb des Repositories
* **Tag**: Referenz auf eine bestimmten Zeitpunkt (revision / commit) innerhalb der Historie
* `clone`: Klonen eines Remote-Repositories in ein lokales Repository
* `commit`: Übertragung der Veränderungen aus dem Arbeitsbereich in das lokale Repository (Hinzufügen einer neuen "Version" in die Historie)
* `push`: Übertragung aller committeten Daten (des aktuellen Branches) aus dem lokalen Repository in das Remote-Repository
* `fetch`: Übertragung aller neuen Daten (des aktuellen Branches)  aus dem Remote-Repository in das lokale Repository (ohne Zusammenführung)
* `merge`: Zusammenführung zweier Branches und Auflösung der Konflikte (sowohl Remote-Branch in lokalen Branch, als auch lokalen in lokalen Branch möglich)
* `pull`: `fetch` mit anschließendem `merge` in einem Befehl

---------------
## Zugriff auf das Repository

Ihr könnt sowohl über `SSH`, als auch per `HTTP` auf das Remote-Repository zugreifen - je nachdem über welche URL ihr das Repository klont. Der Zugriff ist authentifiziert.

### Anmeldung mit SSH

Um euch mit dem Repository zu verbinden, müsst ihr einen SSH-Key verwenden, welchen ihr zuvor in euren [Benutzereinstellungen](/keys) hinzufügen müsst. 

* Informationen in der [GitHub-Hilfe](https://help.github.com/articles/generating-ssh-keys)
* Key-Paar-Erzeugung unter Windows z. B. mit [PuTTYgen](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)

### Anmeldung mit Gitlab-Benutzerdaten (über `HTTP`)

* siehe [GitHub-Hilfe](https://help.github.com/articles/set-up-git)

---------------
## Struktur des Repositories

git Repositories können beliebig viele Branches enthalten. Aktuell enthält euer Repository drei Branches:

* `master`: Source-Code-Branch für lauffähigen, stabilen Source-Code
* `development`: Source-Code-Branch / Entwicklungs-Branch mit aktuellster Version des Source-Codes
* `project_data`: Für Dokumentationen, Berichte, Release-Executables, Recherche-Paper, etc.
 * Bitte beachtet: binäre Dateien können das Repository immens vergrößern und jede Version einer binären Datei bleibt in der History erhalten. **Überlegt euch also gut, welche binären Dateien ihr dem Repository hinzufügt!! Wir bitten euch, nur so viel Speicherplatz zu verbrauchen wie nötig.**

Wie aus der Struktur ersichtlich, müssen Branches nicht kontextuell miteinander zusammenhängen, sondern können auch separiert vollkommen unabhängige Daten enthalten (wie hier `project_data`). Solche Waisen-Branches können mit `git checkout --orphan NEWBRANCH` angelegt werden. Derartige Branches solltet ihr euch zum einfacheren Zugriff neben dem Source-Code in ein eigenes Verzeichnis klonen.

**Tipp:** Im Sinne eurer Teammitglieder solltet ihr **keinen nicht-kompilierbaren Code** in `master` und `development` **committen**. Erstellt euch dafür am Besten, wie unten beschrieben, Feature Branches.

### README.md

Jeder Branch (eigentlich sogar jeder Ordner) innerhalb des Repositories kann eine Datei mit dem Namen `README.md` enthalten, welche in Gitlab direkt formatiert angezeigt wird. Aktuell schaut ihr euch beispielsweise die `README.md` des `master`-Branches an.

Überarbeitet bitte eure `README.md`, sodass sie Informationen über euer Projekt enthält. Den Großteil der aktuellen Infos hier zu Struktur des Repositories und Ähnlichem könnt ihr löschen (auch wenn ein Backup sicherlich sinnvoll ist). Ganz unten befinden sich der "Build- & Deployment-Sheet" sowie die Bedienungsanleitung, welche beide neben euren Projektinformationen in der `README.md` enthalten bleiben sollen.

### Feature Branches

Branches kosten nichts. Ihr könnt ruhig für jedes neue Feature einen neuen Branch anlegen (und nach dem Mergen wieder löschen). Schaut euch ruhig mal den Artikel [A successful Git branching model](http://nvie.com/posts/a-successful-git-branching-model/) an.

Wie in dem Artikel beschrieben, solltet ihr beim Mergen die Option _No Fast-Forward_ (`--no-ff`) benutzen, damit die historische Information über den Feature Branch nicht verloren geht.

**Tipp:** Achtet darauf in den richtigen Remote-Feature-Branch zu pushen!

---------------
## Problemebereiche

### Binäre Dateien in Source-Code-Branches

Binäre Dateien führen häufig zu Merge-Problemen, wenn mehrere Nutzer die gleiche Datei bearbeiten. Es empfiehlt sich daher binäre Dateien, die sich häufig ändern nicht dem Repository hinzuzufügen. 

Das schließt unter Anderem Build-Ordner (z. B. von C++-Projekten) und Java `class`-Dateien ein. Es empfiehlt sich generell, **aus dem Source-Code generierte Dateien nicht dem Repository hinzuzufügen**! 

Benutzt dafür `.gitignore`-Dateien, innerhalb derer ihr spezielle Regeln zum Ignorieren von Dateien anlegen könnt. Ein Beispiel ist in der [GitHub-Hilfe](https://help.github.com/articles/ignoring-files) zu finden. Vom globalen `.gitignore` raten wir eher ab, da die Regeln darin lokal auf dem Rechner gespeichert sind und von den anderen Team-Mitgliedern somit nicht genutzt werden. Zusätzlich gibt es auch eine [Sammlung hilfreicher .gitignore Templates](https://github.com/github/gitignore).

Um binäre Dateien, die nicht zum Source-Code gehören (Release-Executables, PDFs aus Recherchen, Dependencies, Berichte etc.), zu sichern, könnt ihr einfach den Branch `project_data` benutzen oder sie in Gitlab direkt als Anhang von einer Wiki-Seite oder einem Bug hochladen.

### Zeilenenden

Wenn die Mitglieder des Teams auf unterschiedlichen Plattformen arbeiten, gibt es häufig Merge-Probleme aufgrund der unterschiedlichen Zeilenenden. 

Um dieses Problem zu umgehen, solltet ihr **alle Typen von Text-Dateien und binären Dateien in der `.gitattributes`-Datei definieren**. Dies sorgt dafür das Text-Dateien innerhalb des Repositories mit Unix-Zeilenenden gespeichert, aber beim Checkout in die Zeilenenden der jeweiligen Plattform konvertiert werden (letzteres jedoch nur wenn `core.autcrlf` auf `true` gesetzt ist). Dies muss für jeden Branch gemacht werden! Mehr Informationen gibt es in der [GitHub-Hilfe](https://help.github.com/articles/dealing-with-line-endings).

### Ihr habt schon ein git Repository?

Wenn ihr schon ein Repository habt, dann löscht einfach die Remote-Branches, welche dieselben Namen wie die Branches eures Repositories haben (höchstwahrscheinlich gehört dazu `master`) und pushed eure Branches hier in dieses Repository. Vergesst nicht die `README.md` und `.gitattributes` zuvor in euer altes Repository zu übernehmen.

--------
## Projekt-Abgabe

Sofern nicht anders ausgemacht, sollte das Repository am Ende des Projektes folgende Daten enthalten:

* kommentierter Source-Code (doh!)
* ausführbare Version / Executable (am besten in einem einzelnen Schritt ausführbar) - in `project_data`
* Abschlussbericht - in `project_data`
 * Anhang: Build- und Deployment-Sheet (siehe unten)
 * Anhang: Bedienungsanleitung für die Applikation
* Präsentationsmaterial & Medien - in `project_data`
 * Screenshots / Videos
 * Flyer / Abstract für Print und Web

--------
```ruby
"Bis an diese Stelle steht es euch frei die README.md zu bearbeiten wie es euch beliebt (auch wenn ein Backup sicherlich sinnvoll ist, falls man später noch mal etwas nachschauen möchte). Der folgende Build- & Deployment-Sheet ist jedoch Teil der Abgabe und sollte innerhalb dieser Datei erhalten bleiben!"
```
--------
## Build- & Deployment-Sheet

Dieses Dokument liefert alle notwendigen Informationen um die Applikation erfolgreich zu erstellen und auszuführen.

--------
### Development-PC

Betriebssystem: 

#### Abhängigkeiten:

* SDKs, Bibliotheken, etc. mit Version

--------
### Deployment-Device

Betriebssystem:  

#### Abhängigkeiten:

* Software
 * Bibliotheken, etc. mit Version
* Hardware (Sensoren)

--------
### Zusätzliche technische Abhängigkeiten

z. B. Wii-Motes, Kinect, etc.

--------
### Build-Documentation

Vollständige Dokumentation über die notwendigen Schritte zur Erzeugung einer lauffähigen Version der Applikation.

--------
### Deploy-Documentation

Vollständige Dokumentation über die notwendigen Schritte zum Deployment auf das Endgerät.

Nach dem Ausführen dieser Schritte, muss die Applikation mit Hilfe der folgenden Run-Documentation wiederholt ausführbar sein.

Falls manche Einstellungen beim ersten Ausführen der Applikation gesetzt werden, so gehört die dafür notwendige Dokumentation auch in diesen Teil.

--------
### Run-Documentation

Vollständige Dokumentation über die notwendigen Schritte zum Ausführen der Applikation.

--------
## Bedienungsanleitung

**TODO** 