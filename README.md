# Règles

Votre but est de développer un simulateur de combat entre 2 joueurs.

## Départ
En entré, vous recevez 2 lignes. Chacune formaté comme suit:
> \<Nom> \<point de vie> \<attaque> \<défense>

exemple:
>    Bob 30 7 4 \
>    Alice 20 9 2

## Déroulement d'un tour
A chaque tour, 
le joueur 1 attaque le joueur 2. Puis le joueur 2 attaque le joueur 1,\
Suivant la formule: **pv_j1 = pv_j1 - (attaque_j2 - def_j1)** \
Vous devez afficher les points de vie de chacun, formaté comme suit:
> \<vie joueur 1> \<vie joueur 2>

## Fin
Lorsque l'un des joueurs n'a plus de vie, vous devez afficher le nom du gagnant avec ses PV restant.
> \<nom gagnant> \<pv gagnant>


# Exemple d'une partie

> Bob 30 7 4 \
> Alice 20 9 2 \
> 25 15 \
> 20 10 \
> 15 5 \
> Bob 15

Note: Bob n'a pas eu le temps de se faire tapper par Alice. Il reste donc à 15 pv

# Notation

Vous serez jugé sur votre qualité à produire un code propre, bien structuré, respectant des bonnes pratiques.

# Préparation

## Installation

> git clone https://github.com/sohelzerdoumi/phpfightgame.git \
> cd phpfinghtgame \
> composer install

## lancer les tests

> php bin/kahlan

## Production

Vous devez travailler dans le repertoire **src/**.\
La classe **Game** est le point d'entré d'une partie.