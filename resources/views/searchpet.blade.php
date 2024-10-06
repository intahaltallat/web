<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<div class="search">
    <div>

      <input id="searchbar" class="nav-input" type="text" name="s" autocomplete="off" placeholder="Search for products">
        <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <ul id="searchlist">

        </ul>
        </div>
        <script>document.getElementById("searchbar").addEventListener("keyup", () => {
    let searchValue = document.getElementById("searchbar").value;
    const route = "/search/" + searchValue;
    searchList = document.getElementById("searchlist");
    searchList.innerHTML = "";

    console.log(route);
    fetch(route)
        .then((response) => {
            if (!response.ok) {
                throw new Error(`Http error! Status : ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            data.forEach((product) => {
                const listItem = document.createElement("li");
                listItem.textContent = product.nickname;
                searchList.appendChild(listItem);
            });
        })
        .catch((error) => {
            console.error("Error: ", error);
        });
});</script>

</body>
</html>