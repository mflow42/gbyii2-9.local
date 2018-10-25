# INNER JOIN
# p - person
# ps - position


select p.id, p.name, ps.id, ps.name from `person` p inner JOIN `position` ps on ps.id = p.position_id;


select p.id, p.name, ps.id, ps.name from `person` p right JOIN `position` ps on ps.id = p.position_id;