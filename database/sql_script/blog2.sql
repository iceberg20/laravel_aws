use blog;
SELECT * FROM blog.studysections;

ALTER TABLE studysections
ADD time datetime;

ALTER TABLE studysections
Drop time;

UPDATE `blog`.`studysections` SET `time`='0000-00-00 00:20:00' WHERE `id`='19';
