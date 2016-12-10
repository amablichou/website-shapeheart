function calcul() {

    // Récupération du temps donné par l'utilisateur, en hh:mm:ss
    var input_temps = document.getElementById("temps");
    var temps = input_temps.value;

    // Vérification que c'est bien le format hh:mm:ss
    if (temps.length == 5) {
        temps = temps + ":00";
    }
    // Passage en secondes
    temps = hmsToSecondsOnly(temps);

    // Calcul du temps au 10km en compet
    var input_fcmax = document.getElementById("fcmax");
    var input_fcmoy = document.getElementById("fcmoy");
    var fcmax = Number(input_fcmax.value);
    var fcmoy = Number(input_fcmoy.value);

    var amelioration = 1 - (fcmoy/(0.95*fcmax));
    var temps_10km = (1 - amelioration) * temps;

    // Affichage de ce temps en hh:mm:ss
    var input_temps_10km = document.getElementById("temps_10km");
    input_temps_10km.value = temps_10km.toString().toHHMMSS();

    // Calcul de l'allure
    var allure_10km = temps_10km / 10;

    // Affichage de l'allure en mm'ss
    var input_allure_10km = document.getElementById("allure_10km");
    input_allure_10km.value = allure_10km.toString().toMMSS();

    // Calcul des vitesses pour les trois courses
    var vitesse_10km = 10 * 3600 / temps_10km;
    var vitesse_semi = vitesse_10km - 1;
    var vitesse_marathon = vitesse_10km - 2;

    // Calcul des temps pour les deux autres courses
    var temps_semi =  21.097 * 3600 / vitesse_semi;
    var temps_marathon =  42.194 * 3600 / vitesse_marathon;

    // Affichage de ces temps
    var input_temps_semi = document.getElementById("temps_semi");
    input_temps_semi.value = temps_semi.toString().toHHMMSS();
    var input_temps_marathon = document.getElementById("temps_marathon");
    input_temps_marathon.value = temps_marathon.toString().toHHMMSS();

    // Calcul des allures pour les deux courses
    var allure_semi = temps_semi / 21.097;
    var allure_marathon = temps_marathon / 42.194;

    // Affichage de ces allures
    var input_allure_semi = document.getElementById("allure_semi");
    input_allure_semi.value = allure_semi.toString().toMMSS();
    var input_allure_marathon = document.getElementById("allure_marathon");
    input_allure_marathon.value = allure_marathon.toString().toMMSS();
}