document.getElementById('searchInput').addEventListener('input', function (event) {
    const searchTerm = event.target.value.toLowerCase();
    const listItems = document.querySelectorAll('#itemList li');

    listItems.forEach(function (item) {
        const itemText = item.querySelector("p").textContent.toLowerCase()

        if (itemText.includes(searchTerm) && searchTerm !== "") {
            item.classList.remove('hidden');
            item.classList.add('block');
        } else {
            item.classList.remove('block');
            item.classList.add('hidden');
        }
    });
});
