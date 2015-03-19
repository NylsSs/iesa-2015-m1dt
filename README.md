# iesa-2015-m1dt 
Syntaxe markdown : http://daringfireball.net/projects/markdown/syntax

# JavaScript
* Google Map : mettre des dimensions dans la div
* Mettre un ";" à la fin de chaque instruction
* Ressource : https://pragprog.com/
* Devops : courant mettant en avant le travail "colaboratif" entre développeurs et chargés de l'exploitation des applications
* Une instruction avec 3 opérateurs tels que 3<=b<=5 ne fonctionne PAS !
* Sur mac, pour écrire "|" : alt + shift + L
* Différents opérateurs pour la console : log / info / warn / error / debug

## Tableau
* Definition : var nomTable = [valeur, valeur, ...];
ou var nomTable ();
nomtable[0] = valeur;
nomtable[1] = valeur;
nomtable[2] = valeur;
...
* Fonctions du tableau : nomTable.reverse(); | nomTable.join(); | nomTable.sort();

# GIT
* Process de publication : add | commit -m | push
* Lors de la suppression d'un (ou plusieurs) fichier(s) : faire un git rm
* pwd : connaître le nom du répertoire dans lequel on se trouve
* ls -la : tous ce qui se trouve dans un répertoire
* cd : entrer dans un répertoire
* open . : ouvre le répertoire actuel

## Cloner un répertoire
* git clone https://github.com/NylsSs/iesa-2015-m1dt.git (adresse du répertoire)



# CSS
* Border dotted : carrés s/ Chrome
* HSLA : 0, 100%, 100%, 0.5 (premier paramètre pas en %)
* Dans la déclaration des media queries, une "," sépare les propertie et le "and" sépare les expressions
  -> media=screen, projection and (min-width: 481px)

# PHP
* Une constante s'écrit en majuscule par convention
* Essayer de ne garder qu'une seule responsabilité par entité
* 9 types de données basiques :
* 4 scalaires :

1. boolean
2. integer
3. float
4. string

* 2 types composes

1. array
2. object

$ 2 types spéciaux

1. resource
2. NULL

### Signature d'une fonction
* C'est ce qu'il y a entre ()
* ex : function monNom (param1, param2) {}
* Lors de l'appel de la fonction, on passe en paramêtre les variables à traiter
* ex : monNom (var1, var2);