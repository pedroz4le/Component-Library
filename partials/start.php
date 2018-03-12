<!doctype html>
<html lang="en">
  <head>
    <title>Caff Source</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/blackIcon.png">
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
  </head>

  <body>
    <div id="app">
      <div class="fixed bg-white border-b shadow w-full">
        <header class="ml-10 py-0 md:py-4">
          <div class="flex items-center justify-between py-4 md:py-0 text-grey-light">
            <button v-on:click="showMenu = !showMenu" class="md:hidden text-grey-light">
              <i class="fas fa-2x fa-bars"></i>
            </button>

            <a href="index.php">
              <img src="./images/logo.png" alt="caff source logo" class="w-16">
            </a>

            <h1 class="hidden md:block ml-4">Caff Source 
              <span class="font-thin">Component Library</span>
            </h1>

            <form class="hidden md:block">
              <input class="border border-solid border-grey py-2 px-6 rounded-full w-112" type="text" placeholder="Search...">
            </form>
            
            <span class="m-6">
            <a href="https://github.com/pedroz4le/Component-Library">
              <img src="./images/gitHubIcon.png" alt="GitHub icon link" class="w-8">
            </a>
            </span>

          </div>
        </header>
      </div>

      <?php include 'partials/navigation.php'; ?>
      <div class="flex flex-col md:h-screen md:w-4/5 mt-12 overflow-y-scroll px-4 max-w-4xl w-full">
      <div class="m-8 pb-4">