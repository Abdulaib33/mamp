/* Les id et noms de tous les monstres 
   triés par ordre alphabétique  */
/*
SELECT id, name 
FROM retro_monsters_2025.monsters
ORDER BY name;
*/

   
/* Id, nom et image d'un monstre aléatoire  */

/*

SELECT id, name, image_url
FROM retro_monsters_2025.monsters
ORDER BY rand();

*/




/* Toutes les infos du monstre n°23  */


/*

SELECT *
FROM retro_monsters_2025.monsters
WHERE id = 23;

*/


/* Les id et noms des monstres de type n°2  */

/*

SELECT id, name
FROM retro_monsters_2025.monsters
WHERE id = 2;

*/

/* Toutes les infos du dernier monstre ajouté  */


/*
SELECT *
FROM retro_monsters_2025.monsters
ORDER BY id DESC
LIMIT 1;
*/
/*
SELECT *
FROM retro_monsters_2025.monsters
ORDER BY created_ad DESC
LIMIT 1;
*/


/* Les id, PV et noms des monstres de plus de 20 PV
	triés par PV croissants */

/*

SELECT id, pv, name
FROM retro_monsters_2025.monsters
WHERE pv > 20
ORDER BY pv;


*/

/**/

/*

SELECT name, attack, defense
FROM monsters
WHERE attack BETWEEN 20 and 50
AND defense BETWEEN 30 and 80
AND type_id = 3 
AND rarety_id = 2 
ORDER BY name ASC;

*/



/*
SELECT name, attack, defense 
FROM monsters
WHERE attack BETWEEN 20 AND 50
AND defense BETWEEN 30 AND 80
AND type_id = 3
AND rarety_id = 2
ORDER BY name ASC;
*/

/* Toutes les infos du monstre n21 */

SELECT *
FROM monsters
JOIN rareties ON rarety_id = rareties.id
JOIN monster_types ON type_id = monster_types.id
WHERE monsters.id = 21;

SELECT *
FROM monsters m
JOIN rareties r ON m.rarety_id = r.id
JOIN monsters_types t ON m.type_id = t.id 
WHERE m.id = 21;

/* Nom de monster et nom du type de touts les monstres triés par ordre alphabétique de type de nom de monstre*/

SELECT m.name, m.type_id, t.id, t.name
FROM monsters m 
JOIN monsters_types t on m.type_id = t.id
ORDER BY t.name ASC, m.name ASC;

SELECT monsters.name, monsters.type_id, monster_types.id, monster_types.name
FROM monsters
JOIN monster_types ON monsters.type_id  = monster_types.id
ORDER BY monster_types.name ASC, monsters.name ASC


/*
Nom de monstre, attack, defense, nom de rareté de tous les monstres d'attaque supérieur à 50 triés par attaque croissante */



/*
Noms de monstre, nom de type
de tous les monstres dont le nom de type commence par "V"
triés par ordre alphabétique
*/
