<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_path = 'pages/' . $page . '.php';

include 'includes/header.php';

echo '<main class="container mx-auto p-4 md:p-6 lg:p-8 flex-grow">';

if (file_exists($page_path)) {
    include $page_path;
} else {
    echo '<div class="text-center"><h1 class="text-4xl font-bold text-red-500">404 - Page Not Found</h1></div>';
}

echo '</main>';

include 'includes/footer.php';
?>
