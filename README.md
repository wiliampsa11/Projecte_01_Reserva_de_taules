# CONDE DOOKU RESTAURANT 🌌🔫

© Projecte de DAW2 - Uiliam | Alejandro | Alex - 2022

## Introducció 🫡

Aquest és el nostre de projecte de DAW2 que consisteix en una intranet que usessin tant els cambrers del restaurant com els treballadors de manteniment que podran visualitzar les incidències que marquin els cambrers com a taules i cadires trencades.

## Enunciado 📋

Creació d'un lloc web desde zero. El disseny gràfic no és gaire important (no hi ha temps), però el lloc ha de fer servir un full d'estils i ser tot homogeni. Es tracta d'un lloc web que aniria integrat en una intranet, on els cambrers d'un restaurant poden veure la disponibilitat de taules i llocs que té cada taula així com sales i la seva capacitat (3 terrasses, 2 menjadors, 4 sales privades, ...), i reservar-los.

Un recurs estarà lliure o ocupat, no es reserva per a un dia i una hora. Un cop s'allivera el recurs, s'ha d'accedir a la pàgina per marcar-lo com lliure. S'haurà de guardar el dia i la hora a la que s'ha agafat un recurs i a la que s'ha alliberat. El sistema haurà de permetre visualitzar les reserves que s'han realitzat dels recursos, filtrant per recurs i ubicació (sala) del recurs, i així veure si un recurs concret s'ha fet servir molt, poc...

La reserva d'un recurs va associada a un usuari, per tant s'ha de poder fer login/logout.

Els usuaris ja estan creats a la base de dades (com si vinguessin d'una altra BD), és a dir, no calen formularis d'alta/baixa/modificació d'usuaris.

## Instruccions d'ús 📜

GitHub Pages no executa PHP; cal provar-lo en local:

1. Instal·la XAMPP (Apache + MySQL) i copia el projecte a `htdocs`.
2. Importa `sql/bd_dooku - buena.sql` a phpMyAdmin (crea la base de dades `bd_dooku`).
3. Revisa les credencials a `config/config.php` (per defecte `root` sense contrasenya).
4. Obre http://localhost/Projecte_01_Reserva_de_taules/ i entra amb un usuari de la taula `tbl_user` (cambrer) o `tbl_man` (manteniment).

## Tecnologies 🛠️

PHP 8 + MySQL (mysqli amb consultes preparades), HTML, CSS i JavaScript (particles.js, SweetAlert).


⌨️ amb ❤️ per [Alejandro Lay](https://github.com/AlejandroLay), [Uíliam Mateu](https://github.com/uiliam11), [Alex Muga](https://github.com/MuGaTy7) 😊