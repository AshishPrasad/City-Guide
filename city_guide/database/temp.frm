TYPE=VIEW
query=select `city_guide`.`city`.`city_id` AS `city_id`,`city_guide`.`city`.`name` AS `name`,`city_guide`.`city`.`state` AS `state`,`city_guide`.`city`.`zone` AS `zone`,`city_guide`.`city`.`country` AS `country`,`city_guide`.`city`.`image` AS `image`,`city_guide`.`city`.`weather` AS `weather`,`city_guide`.`city`.`best_time_to_visit` AS `best_time_to_visit`,`city_guide`.`city`.`description` AS `description` from `city_guide`.`city` where (`city_guide`.`city`.`city_id` = \'c1\')
md5=34ccd306f6e636c5457c387bd09287b9
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2010-11-25 08:24:45
create-version=1
source=SELECT * FROM city\n                                                WHERE city_id= \'c1\'
client_cs_name=latin1
connection_cl_name=latin1_swedish_ci
view_body_utf8=select `city_guide`.`city`.`city_id` AS `city_id`,`city_guide`.`city`.`name` AS `name`,`city_guide`.`city`.`state` AS `state`,`city_guide`.`city`.`zone` AS `zone`,`city_guide`.`city`.`country` AS `country`,`city_guide`.`city`.`image` AS `image`,`city_guide`.`city`.`weather` AS `weather`,`city_guide`.`city`.`best_time_to_visit` AS `best_time_to_visit`,`city_guide`.`city`.`description` AS `description` from `city_guide`.`city` where (`city_guide`.`city`.`city_id` = \'c1\')
