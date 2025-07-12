const searchInput = document.getElementById("searchInput");
const filters = document.querySelectorAll(".filter");
const products = document.querySelectorAll(".page-product-card");

// Filter buttons
filters.forEach(filterBtn => {
    filterBtn.addEventListener("click", () => {
        // Remove existing active class
        document.querySelector(".filter.active")?.classList.remove("active");
        filterBtn.classList.add("active");

        const selectedCat = filterBtn.dataset.category;

        products.forEach(product => {
            const prodCat = product.dataset.category;
            const matches = selectedCat === "all" || prodCat === selectedCat;
            product.style.display = matches ? "block" : "none";
        });
    });
});

// Search input
searchInput.addEventListener("input", () => {
    const query = searchInput.value.toLowerCase();
    products.forEach(product => {
        const title = product.dataset.title.toLowerCase();
        const matches = title.includes(query);
        product.style.display = matches ? "block" : "none";
    });
});
