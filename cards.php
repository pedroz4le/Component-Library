<?php include 'partials/start.php'; ?>

  <h1 class="pb-4">Cards</h1>
  <h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building card components with Tailwind CSS, styled by Caff Source.</h2>
  <p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- VERTICAL CARD COMPONENT -->

<h2 class="font-thin pb-4">Vertical Card</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
  <div class="border-b border-grey-dark p-8">

    <div class="m-10">
      <div class="flex flex-wrap -mx-2">
        <div class="overflow-hidden mx-auto rounded-lg shadow-lg max-w-xs">
          <img class="block" src="../images/coffeePicOne.jpg" alt="Coffee cups with Camera and phones on a table">
          <div class="p-8">
            <h2 class="mb-4 text-2xl text-theme-redish">Picture Perfect</h2>
            <p class="leading-normal">What is the best device to use for getting an Instagram worthy post?</p>
            <a class="bg-red font-bold inline-block hover:bg-red-lighter mt-4 no-underline px-6 py-2 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
              <div class="flex items-center">
                Find Out<i class="fas fa-lg fa-angle-right ml-6"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="px-4 bg-grey-lightest">
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;div class=&quot;m-10&quot;&gt;
  &lt;div class=&quot;flex flex-wrap -mx-2&quot;&gt;
    &lt;div class=&quot;overflow-hidden mx-auto rounded-lg shadow-lg max-w-xs&quot;&gt;
      &lt;img class=&quot;block&quot; src=&quot;../images/coffeePicOne.jpg&quot; alt=&quot;Coffee cups with Camera and phones on a table&quot;&gt;
      &lt;div class=&quot;p-8&quot;&gt;
        &lt;h2 class=&quot;mb-4 text-2xl text-theme-redish&quot;&gt;Picture Perfect&lt;/h2&gt;
        &lt;p class=&quot;leading-normal&quot;&gt;What is the best device to use for getting an Instagram worthy post?&lt;/p&gt;
        &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mt-4 no-underline px-6 py-2 rounded-full shadow-sm text-lg text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Find Out&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </code>
    </pre>
  </div>
</div>

<div class="border-b w-full my-10"></div>

<!-- HORIZONTAL CARD COMPONENT -->

<div class="m-8">
  <h2 class="font-thin pb-4">Horizontal Card</h2>
</div>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
  <div class="border-b border-grey-dark p-8">

    <div class="m-10">
      <div class="-mx-2">
        <div class="md:flex overflow-hidden mx-auto rounded-lg shadow-lg max-w-lg">
            <div class="md:flex flex-col md:w-1/3 md:h-full w-full">
              <div class="p-8">
                <h2 class="mb-4 text-2xl text-theme-redish">Coffee Shots</h2>
                <p class="leading-normal">Visit the best new coffee places in Los Angeles Tonite!</p>
                <a class="bg-red font-bold inline-block hover:bg-red-lighter mt-4 no-underline px-6 py-2 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
                  <div class="flex items-center">
                    Read More<i class="fas fa-lg fa-angle-right ml-6"></i>
                  </div>
                </a>
              </div>
            </div>

            <div class="md:flex flex-col md:w-2/3 md:h-full w-full">
              <img class="block" src="../images/coffeePicTwo.jpg" alt="People taking a picture of them holding coffee mugs">
            </div>
        </div>
      </div>
    </div>

  </div>

  <div class="px-4 bg-grey-lightest">
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;div class=&quot;m-10&quot;&gt;
  &lt;div class=&quot;-mx-2&quot;&gt;
    &lt;div class=&quot;md:flex overflow-hidden mx-auto rounded-lg shadow-lg max-w-lg&quot;&gt;
        &lt;div class=&quot;md:flex flex-col md:w-1/3 md:h-full w-full&quot;&gt;
          &lt;div class=&quot;p-8&quot;&gt;
            &lt;h2 class=&quot;mb-4 text-2xl text-theme-redish&quot;&gt;Coffee Shots&lt;/h2&gt;
            &lt;p class=&quot;leading-normal&quot;&gt;Visit the best new coffee places in Los Angeles Tonite!&lt;/p&gt;
            &lt;a class=&quot;bg-red font-bold inline-block hover:bg-red-lighter mt-4 no-underline px-6 py-2 rounded-full shadow-sm text-lg text-white tracking-wide&quot; href=&quot;#&quot;&gt;
              &lt;div class=&quot;flex items-center&quot;&gt;
                Read More&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;md:flex flex-col md:w-2/3 md:h-full w-full&quot;&gt;
          &lt;img class=&quot;block&quot; src=&quot;../images/coffeePicTwo.jpg&quot; alt=&quot;People taking a picture of them holding coffee mugs&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </code>
    </pre>
  </div>
</div>

<?php include 'partials/end.php'; ?>