SELECT `title`, `summary`
FROM `film`
WHERE `summary`
LIKE '%Vincent%'
ORDER BY `id_film` ASC;