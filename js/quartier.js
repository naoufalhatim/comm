
/*
Selection de quartier et sous quartier pour ajouter avis
*/
function change()
{
document.frm.quartier.disabled = false;
document.frm.quartier.length=0;
var i =0;
var mosson = ["Mosson", "Les Hauts de Massane", "Celleneuve"];
var hopitaux_facultes = ["Hopitaux-Facultés", "Plan des 4 Seigneurs", "Aiguelongue"];
var centre = ["Centre Historique", "Boutonnet", "Les Beaux - Arts", "Les Aubes", "Les Arceaux", "Figuerolles", "Gambetta", "Gares", "Antigone", "Comédie"];
var croix_dargent = ["Estanove", "Pas du Loup", "Croix d'Argent","Lemasson"];
var cevennes = ["Alco", "Les Cevennes", "La Chamberte", "La Martelle"];
var pres_darenes = ["Près d'Arènes", "Aiguerelles", "Saint Martin"];
var port_marianne = ["Port Marianne", "Millénaire-Grammont", "La Pompignane"];

if(document.frm.q.value == "mosson"){
for(i = 0; i < mosson.length ; i++){
AjouterOption(mosson[i]);
}
}

if(document.frm.q.value == "hopitaux_facultes"){
for(i=0; i < hopitaux_facultes.length ;i++){
AjouterOption(hopitaux_facultes[i]);
}
}

if(document.frm.q.value == "centre"){
for(i=0; i < centre.length ;i++){
AjouterOption(centre[i]);
}
}

if(document.frm.q.value == "croix_dargent"){
for(i=0; i < croix_dargent.length ;i++){
AjouterOption(croix_dargent[i]);
}
}

if(document.frm.q.value == "cevennes"){
for(i=0; i < cevennes.length ;i++){
AjouterOption(cevennes[i]);
}
}

if(document.frm.q.value == "pres_darenes"){
for(i=0; i < pres_darenes.length ;i++){
AjouterOption(pres_darenes[i]);
}
}

if(document.frm.q.value == "port_marianne"){
for(i=0; i < port_marianne.length ;i++){
AjouterOption(port_marianne[i]);
}
}

}

function AjouterOption(title) {
 var nouvel_element = new Option(title,title,false,true);
 document.frm.quartier.options[document.frm.quartier.length] = nouvel_element;

}

