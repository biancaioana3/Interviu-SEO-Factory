# Interviu-SEO-Factory

Inainte de a incepe:
-La urmatoarele 3 probe se urmareste:
--Scrierea curata a codului.
--Analizarea cerintelor si rezolvarea acestora in cel mai optim mod. 
--Pentru cerintele de front-end se cere un design simplu, generalizat, se 
pot folosi modele de design de pe internet, cunoasterea de design la un 
nivel mediu spre avansat este un bonus. (Orice adaugare de design , 
spre exemplu: animatii, efecte, etc va fi luata in considerare)
--Pentru cerintele de back-end se urmareste logica aplicata si gandirea. 
In cazul in care o cerinta nu este dusa pana la capat, si o rezolvare 
partiala sau o incercare va fi luata in considerare. Acest lucru este 
valabil si pentru cerintele de front-end.
-Timpul de rezolvare nu este urmarit si sunt alocate 24h pentru 
rezolvarea cerintelor. Estimarea noastra de rezolvare ar fi intre 2,5-5 
ore pentru toate cerintele.
Succes!

Proba 1
- Dezvoltarea unui landing page folosind HTML si CSS/SASS/LESS si 
javascript/jQuery.
-Pagina poate fi despre orice (exemple: produse de casa, animale, 
covoare, jucarii, obiecte casnice, etc), continutul text nu este necesar sa 
fie relevant (se poate folosi Lorem Ipsum) si va trebui sa contina 
urmatoarele elemente:
-Un navbar care sa contina un logo, 3 elemente de meniu (Home, About 
Us, Contact), o iconita de search si o iconita de cart. Navbarul trebuie sa 
fie sticky (sa ramana sus la scroll). Pe telefon se face un navbar care sa 
contina un buton de tip “burger”, logo, si cele 2 iconite de search si cart 
plus un meniu de telefon care sa contina cele 3 elemente, care sa apara 
in momentul apasarii pe butonul “burger”. (se poate folosi ca exemplu 
emag.ro pentru meniul de telefon)
-Un banner principal sub navbar.
-Doua/Patru sectiuni de tipul “Imagine/Scris” si “Scris/Imagine” (pentru 
mobil acestea trebuie sa stea una sub alta).

Proba 2

-Generarea unui formular care sa contina urmatoarele inputuri: 
--Nume, Prenume, Email, Telefon, Mesaj, Multiselect cu cel putin 4 
optiuni, Input de tip fisier care sa accepte doar imagini si pdf-uri 
---Adaugare unei optiuni de schimbare a inputurilor din formular 
(Persoana Fizica/Persoana Juridica), persoana fizica fiind default avand 
inputurile mentionate mai sus, iar optiunea de persoana juridica 
trebuie sa inlocuiasca inputurile de Nume si Prenume cu inputurile de 
Nume Companie si CUI.
-Adaugare validare pe front-end in javascript a respectivelor inputuri cu 
mesaje personalizate pentru fiecare input in cazul introducerii incorecta 
sau a lasarii inputului necompletat (Toate inputurile mai putin cel de 
fisier si mesajul sunt obligatorii).
-Stilizarea formularului.
-Captarea datelor in javascript si afisarea lor in consola, (dupa submit 
formularul nu trebuie sa dea refresh la pagina iar inputurile trebuie 
golite).
-Deasemenea se poate folosi jQuery in loc de javascript, este la libera 
alegere.

Proba 3

-Crearea a 2 tabele in mySql: formular_persoane_fizice si 
formular_persoane_juridice.
--Fiecare tabela trebuie sa aiba ca structura o cheie primara numita “id” 
care va fi unica pentru fiecare entry, urmata de coloane pentru fiecare 
input din respectivul formular, plus o coloana numita “date” care va 
capta ziua/luna/anul/ora/minutul la care utilizatorul a completat 
formularul.
-Crearea unui fisier de php numit post.php is crearea unui folder numit 
files.
--Trimiterea datelor din front-end catre fisierul de php folosind un POST 
request (se poate folosi orice modalitate de request, ex: AJAX, Axios, 
etc).
---Adaugare validare de email in php (in cazul in care un utilizator 
incearca sa se inregistreze cu un email deja inregistrat, eroarea sa se 
trimita in front-end si sa se afiseze un mesaj corespunzator)
---De asemenea se face aceasi validare ca la email si in cazul inputului 
de CUI pentru persoanele juridice
--Salvarea fisierului primit in formular pe server in folderul files si 
captarea linkului catre acesta.
---Adaugare validare extensie fisier in php cu trimiterea erorii in front- 
end.
--Trimiterea datelor venite din formular in baza de date (in cazul 
inputului de tip fisier se trimite calea intreaga catre fisier 
https://domeniu/files/fisier) pentru fiecare formular in parte (in cazul 
completarii formularului de persoane fizice se trimite catre tabela pentru persoane fizice si in cazul persoanelor juridice catre tabela 
pentru persoane juridice)
