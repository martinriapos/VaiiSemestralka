document.addEventListener("DOMContentLoaded", function () {
    let searchInput = document.getElementById("search");
    let items = document.querySelectorAll(".list-item");
    if (searchInput && items.length > 0) {
        searchInput.addEventListener("keyup", function () {
            let searchText = searchInput.value.toLowerCase();
            items.forEach(item => {
                let text = item.textContent.toLowerCase();
                item.style.display = text.includes(searchText) ? "block" : "none";
            });
        });
    }

    let btns = document.querySelectorAll(".btn-primary");
    btns.forEach(btn => {
        btn.addEventListener("click", function () {
            btn.style.transform = "scale(0.9)";
            setTimeout(() => btn.style.transform = "scale(1)", 200);
        });
    });
});