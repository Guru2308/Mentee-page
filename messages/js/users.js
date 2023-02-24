const searchBar = document.querySelector(".search input"),
searchBtn = document.querySelector(".search button");
// usersList = document.querySelector(".users-list");

searchBtn.onclick = () =>{
    searchBar.classList.toggle("show");
    searchBtn.classList.toggle("active");
    searchBar.focus();
     
}

