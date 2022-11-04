window.onload = () => {
    var index = 'schedule[0]';
    var article = document.getElementsByClassName(index);
    article[0].style.display = "block";

    let tab = document.getElementById('tab');
    tab.style.height = article[0].offsetHeight + "px";
};

function schedule(id){
    let articles = document.getElementsByClassName("item");
    let items =  document.getElementsByClassName("items");
    let tab = document.getElementById('tab');

    for (let index = 0; index < items.length; index++) {
        items[index].classList.remove('selected');
        articles[index].style.display = "none";
    }

    var index = 'schedule['+ id+ ']';
    var article = document.getElementsByClassName(index)[0];
    items[id].classList.add('selected');
    article.style.display = "block";

    tab.style.height = article.offsetHeight + "px";
}