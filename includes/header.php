<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
  @keyframes background-pan {
    0% {
      background-position: 0% center;
    }
    100% {
      background-position: -200% center;
    }
  }

  .animated-border {
      background: linear-gradient(
          90deg,
rgb(14, 68, 207),  
rgb(4, 21, 116),
rgb(27, 59, 166)        );
      background-size: 200%;
      animation: background-pan 3s linear infinite;
  }
  </style>

</head>
<body class="bg-slate-900 text-slate-200 flex flex-col min-h-screen">
    <header class="sticky top-0 z-50 bg-slate-800/80 backdrop-blur-lg shadow-lg">
        <nav class="container mx-auto px-4 py-3 md:px-6">
            <div class="flex justify-between items-center">
                <a href="index.php?page=home" class="flex items-center gap-2 text-2xl font-bold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-purple-400"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                    My Personal Site
                </a>
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
                
                <div class="hidden md:flex items-center bg-slate-900/50 p-1 rounded-full space-x-1 text-l ">
                    <?php $currentPage = $_GET['page'] ?? 'home'; ?>
                    <a href="index.php?page=home" class="nav-link <?php if($currentPage == 'home') echo 'bg-gray-600 text-white rounded-full shadow-md animated-border'; else echo 'hover:bg-blue-700/50 rounded-full  '; ?>">Home</a>
                    <a href="index.php?page=portfolio" class="nav-link <?php if($currentPage == 'portfolio') echo 'bg-sky-600 text-white rounded-full shadow-md animated-border'; else echo 'hover:bg-sky-700/50 rounded-full'; ?>">Portfolio/CV</a>
                    <a href="index.php?page=memos" class="nav-link <?php if($currentPage == 'memos') echo 'bg-green-600 text-white rounded-full shadow-md animated-border'; else echo 'hover:bg-green-700/50 rounded-full'; ?>">Memos</a>
                    <a href="index.php?page=projects" class="nav-link <?php if($currentPage == 'projects') echo 'bg-purple-600 text-white rounded-full shadow-md animated-border'; else echo 'hover:bg-purple-700/50 rounded-full'; ?>">Projects</a>
                </div>
            </div>

            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php?page=home" class="block text-base nav-link text-center <?php if($currentPage == 'home') echo 'bg-gray-600 text-white shadow-md'; else echo 'bg-slate-700/50'; ?>">Home</a>
                <a href="index.php?page=portfolio" class="block text-base nav-link text-center <?php if($currentPage == 'portfolio') echo 'bg-sky-600 text-white shadow-md'; else echo 'bg-slate-700/50'; ?>">Portfolio/CV</a>
                <a href="index.php?page=memos" class="block text-base nav-link text-center <?php if($currentPage == 'memos') echo 'bg-green-600 text-white shadow-md'; else echo 'bg-slate-700/50'; ?>">Memos</a>
                <a href="index.php?page=projects" class="block text-base nav-link text-center <?php if($currentPage == 'projects') echo 'bg-purple-600 text-white shadow-md'; else echo 'bg-slate-700/50'; ?>">Projects</a>
            </div>
        </nav>
    </header>
</body>
</html>
