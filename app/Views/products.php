<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section id="super-main" class="super-container">
    <!-- 🔍 Barra de búsqueda -->
    <div class="search-container">
        <span class="search-icon">🔍</span>
        <input type="text" id="searchInput" placeholder="Buscar ítem..." onkeyup="filterItems()" />
    </div>

    <!-- 📦 Grid de Ítems -->
    <div class="container" id="itemsContainer">

        <?php foreach ($products as $product): ?>
            <div class="box"><?= esc($product['name']); ?></div>
        <?php endforeach; ?>
        <!-- 
           
            <div class="box">Banana</div>
            <div class="box">Cereza</div>   
            <div class="box">Durazno</div>
            <div class="box">Uva</div>
            <div class="box">Pera</div>
            <div class="box">Sandía</div>
            <div class="box">Melón</div>
            <div class="box">Kiwi</div>
            <div class="box">Fresa</div>
            <div class="box">Naranja</div>
            <div class="box">Papaya</div>
            <div class="box">Mango</div> -->
    </div>
</section>


<script>
    function toggleTheme() {
        document.body.classList.toggle("dark-mode");
        localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
    }

    (function () {
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-mode");
        }
    })();

    function filterItems() {
        let input = document.getElementById("searchInput").value.toLowerCase();
        let items = document.querySelectorAll(".box");

        items.forEach((item) => {
            let text = item.textContent.toLowerCase();
            item.style.display = text.includes(input) ? "block" : "none";
        });
    }

    function toggleMenu() {
        let menu = document.getElementById("mobileMenu");
        menu.style.display = menu.style.display === "flex" ? "none" : "flex";
    }
</script>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/home.js') ?>"></script>
<?= $this->endSection() ?>