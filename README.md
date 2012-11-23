Euer Projekttitel
===========

---------------
## Was ist git?

[git](http://git-scm.com/) ist ein verteiltes Version Control System, welches ihr nutzen k�nnt um kollaborativ an Source-Code zu arbeiten und eure Daten auf unserem Server zu sichern. 

* [Tutorials](http://sixrevisions.com/resources/git-tutorials-beginners/)
* [GUI-Tools](http://delicious.com/matthew.mccullough/git+gui?link_view=compact) (unsortierte Liste)


Die **Gitlab**-Webplattform (ein Klon der [GitHub](https://github.com/)-Plattform), auf der ihr euch gerade befindet, bietet euch dar�ber hinaus einen **Bugtracker** und eine **Wiki** und erm�glicht euch zudem das gesamte Repository zu durchst�bern.

### Begriffe und Commands

![Git Data Transport Commands](http://osteele.com/images/2008/git-transport.png)

Repositories in git sind technisch gesehen gleichwertig, egal ob sie auf einem Server (**Remote-Repository**) oder lokal existieren.

* **Branch**: Ein Entwicklungs-Zweig innerhalb des Repositories
* **Tag**: Referenz auf eine bestimmten Zeitpunkt (revision / commit) innerhalb der Historie
* `clone`: Klonen eines Remote-Repositories in ein lokales Repository
* `commit`: �bertragung der Ver�nderungen aus dem Arbeitsbereich in das lokale Repository (Hinzuf�gen einer neuen "Version" in die Historie)
* `push`: �bertragung aller committeten Daten (des aktuellen Branches) aus dem lokalen Repository in das Remote-Repository
* `fetch`: �bertragung aller neuen Daten (des aktuellen Branches)  aus dem Remote-Repository in das lokale Repository (ohne Zusammenf�hrung)
* `merge`: Zusammenf�hrung zweier Branches und Aufl�sung der Konflikte (sowohl Remote-Branch in lokalen Branch, als auch lokalen in lokalen Branch m�glich)
* `pull`: `fetch` mit anschlie�endem `merge` in einem Befehl

---------------
## Zugriff auf das Repository

Ihr k�nnt sowohl �ber `SSH`, als auch per `HTTP` auf das Remote-Repository zugreifen - je nachdem �ber welche URL ihr das Repository klont. Der Zugriff ist authentifiziert.

### Anmeldung mit SSH

Um euch mit dem Repository zu verbinden, m�sst ihr einen SSH-Key verwenden, welchen ihr zuvor in euren [Benutzereinstellungen](/keys) hinzuf�gen m�sst. 

* Informationen in der [GitHub-Hilfe](https://help.github.com/articles/generating-ssh-keys)
* Key-Paar-Erzeugung unter Windows z. B. mit [PuTTYgen](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)

### Anmeldung mit Gitlab-Benutzerdaten (�ber `HTTP`)

* siehe [GitHub-Hilfe](https://help.github.com/articles/set-up-git)

---------------
## Struktur des Repositories

git Repositories k�nnen beliebig viele Branches enthalten. Aktuell enth�lt euer Repository drei Branches:

* `master`: Source-Code-Branch f�r lauff�higen, stabilen Source-Code
* `development`: Source-Code-Branch / Entwicklungs-Branch mit aktuellster Version des Source-Codes
* `project_data`: F�r Dokumentationen, Berichte, Release-Executables, Recherche-Paper, etc.
 * Bitte beachtet: bin�re Dateien k�nnen das Repository immens vergr��ern und jede Version einer bin�ren Datei bleibt in der History erhalten. **�berlegt euch also gut, welche bin�ren Dateien ihr dem Repository hinzuf�gt!! Wir bitten euch, nur so viel Speicherplatz zu verbrauchen wie n�tig.**

Wie aus der Struktur ersichtlich, m�ssen Branches nicht kontextuell miteinander zusammenh�ngen, sondern k�nnen auch separiert vollkommen unabh�ngige Daten enthalten (wie hier `project_data`). Solche Waisen-Branches k�nnen mit `git checkout --orphan NEWBRANCH` angelegt werden. Derartige Branches solltet ihr euch zum einfacheren Zugriff neben dem Source-Code in ein eigenes Verzeichnis klonen.

**Tipp:** Im Sinne eurer Teammitglieder solltet ihr **keinen nicht-kompilierbaren Code** in `master` und `development` **committen**. Erstellt euch daf�r am Besten, wie unten beschrieben, Feature Branches.

### README.md

Jeder Branch (eigentlich sogar jeder Ordner) innerhalb des Repositories kann eine Datei mit dem Namen `README.md` enthalten, welche in Gitlab direkt formatiert angezeigt wird. Aktuell schaut ihr euch beispielsweise die `README.md` des `master`-Branches an.

�berarbeitet bitte eure `README.md`, sodass sie Informationen �ber euer Projekt enth�lt. Den Gro�teil der aktuellen Infos hier zu Struktur des Repositories und �hnlichem k�nnt ihr l�schen (auch wenn ein Backup sicherlich sinnvoll ist). Ganz unten befinden sich der "Build- & Deployment-Sheet" sowie die Bedienungsanleitung, welche beide neben euren Projektinformationen in der `README.md` enthalten bleiben sollen.

### Feature Branches

Branches kosten nichts. Ihr k�nnt ruhig f�r jedes neue Feature einen neuen Branch anlegen (und nach dem Mergen wieder l�schen). Schaut euch ruhig mal den Artikel [A successful Git branching model](http://nvie.com/posts/a-successful-git-branching-model/) an.

Wie in dem Artikel beschrieben, solltet ihr beim Mergen die Option _No Fast-Forward_ (`--no-ff`) benutzen, damit die historische Information �ber den Feature Branch nicht verloren geht.

**Tipp:** Achtet darauf in den richtigen Remote-Feature-Branch zu pushen!

---------------
## Problemebereiche

### Bin�re Dateien in Source-Code-Branches

Bin�re Dateien f�hren h�ufig zu Merge-Problemen, wenn mehrere Nutzer die gleiche Datei bearbeiten. Es empfiehlt sich daher bin�re Dateien, die sich h�ufig �ndern nicht dem Repository hinzuzuf�gen. 

Das schlie�t unter Anderem Build-Ordner (z. B. von C++-Projekten) und Java `class`-Dateien ein. Es empfiehlt sich generell, **aus dem Source-Code generierte Dateien nicht dem Repository hinzuzuf�gen**! 

Benutzt daf�r `.gitignore`-Dateien, innerhalb derer ihr spezielle Regeln zum Ignorieren von Dateien anlegen k�nnt. Ein Beispiel ist in der [GitHub-Hilfe](https://help.github.com/articles/ignoring-files) zu finden. Vom globalen `.gitignore` raten wir eher ab, da die Regeln darin lokal auf dem Rechner gespeichert sind und von den anderen Team-Mitgliedern somit nicht genutzt werden. Zus�tzlich gibt es auch eine [Sammlung hilfreicher .gitignore Templates](https://github.com/github/gitignore).

Um bin�re Dateien, die nicht zum Source-Code geh�ren (Release-Executables, PDFs aus Recherchen, Dependencies, Berichte etc.), zu sichern, k�nnt ihr einfach den Branch `project_data` benutzen oder sie in Gitlab direkt als Anhang von einer Wiki-Seite oder einem Bug hochladen.

### Zeilenenden

Wenn die Mitglieder des Teams auf unterschiedlichen Plattformen arbeiten, gibt es h�ufig Merge-Probleme aufgrund der unterschiedlichen Zeilenenden. 

Um dieses Problem zu umgehen, solltet ihr **alle Typen von Text-Dateien und bin�ren Dateien in der `.gitattributes`-Datei definieren**. Dies sorgt daf�r das Text-Dateien innerhalb des Repositories mit Unix-Zeilenenden gespeichert, aber beim Checkout in die Zeilenenden der jeweiligen Plattform konvertiert werden (letzteres jedoch nur wenn `core.autcrlf` auf `true` gesetzt ist). Dies muss f�r jeden Branch gemacht werden! Mehr Informationen gibt es in der [GitHub-Hilfe](https://help.github.com/articles/dealing-with-line-endings).

### Ihr habt schon ein git Repository?

Wenn ihr schon ein Repository habt, dann l�scht einfach die Remote-Branches, welche dieselben Namen wie die Branches eures Repositories haben (h�chstwahrscheinlich geh�rt dazu `master`) und pushed eure Branches hier in dieses Repository. Vergesst nicht die `README.md` und `.gitattributes` zuvor in euer altes Repository zu �bernehmen.

--------
## Projekt-Abgabe

Sofern nicht anders ausgemacht, sollte das Repository am Ende des Projektes folgende Daten enthalten:

* kommentierter Source-Code (doh!)
* ausf�hrbare Version / Executable (am besten in einem einzelnen Schritt ausf�hrbar) - in `project_data`
* Abschlussbericht - in `project_data`
 * Anhang: Build- und Deployment-Sheet (siehe unten)
 * Anhang: Bedienungsanleitung f�r die Applikation
* Pr�sentationsmaterial & Medien - in `project_data`
 * Screenshots / Videos
 * Flyer / Abstract f�r Print und Web

--------
```ruby
"Bis an diese Stelle steht es euch frei die README.md zu bearbeiten wie es euch beliebt (auch wenn ein Backup sicherlich sinnvoll ist, falls man sp�ter noch mal etwas nachschauen m�chte). Der folgende Build- & Deployment-Sheet ist jedoch Teil der Abgabe und sollte innerhalb dieser Datei erhalten bleiben!"
```
--------
## Build- & Deployment-Sheet

Dieses Dokument liefert alle notwendigen Informationen um die Applikation erfolgreich zu erstellen und auszuf�hren.

--------
### Development-PC

Betriebssystem: 

#### Abh�ngigkeiten:

* SDKs, Bibliotheken, etc. mit Version

--------
### Deployment-Device

Betriebssystem:  

#### Abh�ngigkeiten:

* Software
 * Bibliotheken, etc. mit Version
* Hardware (Sensoren)

--------
### Zus�tzliche technische Abh�ngigkeiten

z. B. Wii-Motes, Kinect, etc.

--------
### Build-Documentation

Vollst�ndige Dokumentation �ber die notwendigen Schritte zur Erzeugung einer lauff�higen Version der Applikation.

--------
### Deploy-Documentation

Vollst�ndige Dokumentation �ber die notwendigen Schritte zum Deployment auf das Endger�t.

Nach dem Ausf�hren dieser Schritte, muss die Applikation mit Hilfe der folgenden Run-Documentation wiederholt ausf�hrbar sein.

Falls manche Einstellungen beim ersten Ausf�hren der Applikation gesetzt werden, so geh�rt die daf�r notwendige Dokumentation auch in diesen Teil.

--------
### Run-Documentation

Vollst�ndige Dokumentation �ber die notwendigen Schritte zum Ausf�hren der Applikation.

--------
## Bedienungsanleitung

**TODO** 