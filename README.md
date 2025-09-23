# PAGINA DE MUSICA - TPE - Tomas A Gomez - C2

Trabajo practico especial para la materia web 2 (2025) de la carrera TUDAI.

Alumno: Tomas Agustin Gomez <br>
Email: tomas.a.gomez.zb@gmail.com

## TEMA DE LA PAGINA: REVIEWS DE USUARIOS A ALBUMS DE MUSICA

En la pagina los usuarios podran dejar sus reviews a distintos albums de musica,
quizas hasta puntuando los mismos, afectando el posicionamiento de los albums en el home.

## TABLAS y DER

La cantidad de tablas va a ser de 5. User, Albums, Artist, Reviews y Songs.

#### USER:
| user_id | username | email | password |
|---------|----------|-------|----------|
#### ALBUMS:
| album_id | album_name | album_image | artist_id | date |
|----------|------------|-------------|-----------|------|
#### ARTIST:
| artist_id | artist_name | artist_bio |
|-----------|-------------|------------|
#### REVIEWS:
| review_id | user_id | album_id | review | rating | date |
|-----------|---------|----------|--------|--------|------|
#### SONGS:
| song_id | album_id | song_number | song_name | duration |
|---------|----------|-------------|-----------|----------|

<img width="1080" height="561" alt="db_music_DER" src="https://github.com/user-attachments/assets/0d855a27-5629-4ab8-8217-1de8698a4e0e" />


