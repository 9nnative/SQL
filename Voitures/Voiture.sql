SELECT nom_modele, nom_origine, nom_motorisation
FROM modele mo, motorisation mx, voiture v, origine o
WHERE v.ID_MOTORISATION = mx.ID_MOTORISATION
AND v.ID_MODELE = mo.ID_MODELE
AND nom_origine = "Allemagne"
AND nom_motorisation = "Essence"
