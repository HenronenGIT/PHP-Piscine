SELECT COUNT(`date_last_film`) AS 'movies'
FROM `member`
WHERE `date_last_film` BETWEEN '2006-10-30' AND '2007-07-27'
AND DAY(`date_last_film`) = '24' AND MONTH(`date_last_film`) = '12';