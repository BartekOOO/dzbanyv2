function bladPolaczenia(){
    alert("Nastąpił nieczekiwany błąd połączenia z bazą danych");
}

function bladDodawania(){
    alert("Nie uzupełniłeś pól"); 
    var zdjecie = document.createElement('img');
    zdjecie.src = "../Images/dzban.png";
    zdjecie.classList.add("dzban");
    const kontener = document.getElementById("kontener");
    kontener.appendChild(zdjecie);

}