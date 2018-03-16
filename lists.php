<?php include'partials/start.php'; ?>

  <h1 class="pb-4">Lists</h1>
  <h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building list components with Tailwind CSS, styled by Caff Source.</h2>
  <p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- ARTICLE LIST -->

<h2 class="font-thin pb-4">Article List</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-scroll rounded max-w-2xl">
  <div class="border-b border-grey-dark mx-auto overflow-scroll p-8">

    <div class="md:flex flex-wrap lg:flex-no-wrap h-112 p-12 max-w-xl w-full">
      <div class="md:flex w-full md:1/2">
        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Sunday</p>
            <p class="mb-2">11:09 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Latte News</h2>
            A new recipe that will help energy levels.
          </div>
        </div>

        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Monday</p>
            <p class="mb-2">8:11 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Frappe Discovery</h2>
            1,000 frappes found in an Indonesia freezer.
          </div>
        </div>

        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Tuesday</p>
            <p class="mb-2">12:30 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Americano Spill</h2>
            400 gallons of Americano coffee for Tucson event spilled into lake.
          </div>
        </div>
      </div>

      <div class="md:flex w-full md:1/2">
        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Wednesday</p>
            <p class="mb-2">10:45 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Espresso News</h2>
            New and more convenient way to make your own espresso drinks at home.
          </div>
        </div>

        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Today</p>
            <p class="mb-2">11:50 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Nescafe Users</h2>
            The Nescafe coffee maker is being replaced by this new device!
          </div>
        </div>

        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Saturday</p>
            <p class="mb-2">3:26 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>
            
            <h2 class="mb-2">Coffee Brewers</h2>
            This group of professional coffee tasters learned how to brew.
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="px-4 bg-grey-lightest">
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;div class=&quot;md:flex flex-wrap lg:flex-no-wrap h-112 p-12 max-w-xl w-full&quot;&gt;
  &lt;div class=&quot;md:flex w-full md:1/2&quot;&gt;
    &lt;div class=&quot;bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Sunday&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;11:09 a.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;

        &lt;h2 class=&quot;mb-2&quot;&gt;Latte News&lt;/h2&gt;
        A new recipe that will help energy levels.
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Monday&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;8:11 a.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;

        &lt;h2 class=&quot;mb-2&quot;&gt;Frappe Discovery&lt;/h2&gt;
        1,000 frappes found in an Indonesia freezer.
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Tuesday&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;12:30 p.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;

        &lt;h2 class=&quot;mb-2&quot;&gt;Americano Spill&lt;/h2&gt;
        400 gallons of Americano coffee for Tucson event spilled into lake.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class=&quot;md:flex w-full md:1/2&quot;&gt;
    &lt;div class=&quot;bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Wednesday&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;10:45 a.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;

        &lt;h2 class=&quot;mb-2&quot;&gt;Espresso News&lt;/h2&gt;
        New and more convenient way to make your own espresso drinks at home.
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Today&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;11:50 p.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;

        &lt;h2 class=&quot;mb-2&quot;&gt;Nescafe Users&lt;/h2&gt;
        The Nescafe coffee maker is being replaced by this new device!
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3&quot;&gt;
      &lt;div class=&quot;p-4&quot;&gt;
        &lt;p class=&quot;mb-2&quot;&gt;Saturday&lt;/p&gt;
        &lt;p class=&quot;mb-2&quot;&gt;3:26 p.m&lt;/p&gt;

        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Read
          &lt;/div&gt;
        &lt;/a&gt;
        
        &lt;h2 class=&quot;mb-2&quot;&gt;Coffee Brewers&lt;/h2&gt;
        This group of professional coffee tasters learned how to brew.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </code>
    </pre>
  </div>
</div>



<?php include'partials/end.php'; ?>