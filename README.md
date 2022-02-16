## Do Quoc Tan 

# Php_et_MySQL

Qquestion 2 :   
B) SELECT * FROM `personnage`

Question 3 :   
B) SELECT * FROM `personnage` INNER JOIN voiture WHERE id_voiture = voiture.id

C) SELECT * FROM `personnage` INNER JOIN voiture WHERE id_sport = sport.id

Question 4 : 

Pour "concours de mangeur de pâté de crabe" :   
SELECT * FROM `personnage` INNER JOIN sport WHERE id_sport = sport.id and id_sport = 4 

Pour "sous-marin" :   
SELECT * FROM `personnage` INNER JOIN voiture WHERE id_voiture = voiture.id and id_voiture = 3
