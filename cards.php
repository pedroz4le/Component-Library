<?php include 'partials/start.php'; ?>

  <h1 class="pb-4">Cards</h1>
  <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.</p>

<div class="border-b w-screen my-10"></div>

<!-- VERTICAL CARD COMPONENT -->

<h2 class="font-thin pb-4">Vertical Card</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>

<div>
  <div class="flex flex-wrap -mx-2">
    <div class="overflow-hidden mx-auto rounded-lg shadow-lg max-w-xs">
      <img class="block" src="http://via.placeholder.com/640x480" alt="placeholder">
      <div class="p-8">
        <h2 class="mb-4 text-2xl text-theme-redish">Card Title</h2>
        <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore tenetur tempore beatae, sed.</p>
        <a class="bg-theme-redish font-bold hover:bg-theme-redish-light inline-block mt-4 no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
          <div class="flex items-center">
            Button<i class="fas fa-lg fa-angle-right ml-6"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<pre><code class="html overflow-auto my-8">&lt;div&gt;
  &lt;div class=&quot;flex flex-wrap -mx-2&quot;&gt;
    &lt;div class=&quot;overflow-hidden mx-auto rounded-lg shadow-lg max-w-xs&quot;&gt;
      &lt;img class=&quot;block&quot; src=&quot;http://via.placeholder.com/640x480&quot; alt=&quot;placeholder&quot;&gt;
      &lt;div class=&quot;p-8&quot;&gt;
        &lt;h2 class=&quot;mb-4 text-2xl text-theme-redish&quot;&gt;Card Title&lt;/h2&gt;
        &lt;p class=&quot;leading-normal&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore tenetur tempore beatae, sed.&lt;/p&gt;
        &lt;a class=&quot;bg-theme-redish font-bold hover:bg-theme-redish-light inline-block mt-4 no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Button&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<div class="border-b w-screen my-10"></div>

<!-- HORIZONTAL CARD COMPONENT -->

<div class="m-8">
  <h2 class="font-thin pb-4">Horizontal Card</h2>
  <p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>
</div>

<div>
  <div class="-mx-2">
    <div class="md:flex overflow-hidden mx-auto rounded-lg shadow-lg max-w-md">
        <div class="md:flex flex-col md:w-1/3 md:h-full w-full">
          <div class="p-8">
            <h2 class="mb-4 text-2xl text-theme-redish">Card Title</h2>
            <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore tenetur tempore beatae, sed.</p>
            <a class="bg-theme-redish font-bold hover:bg-theme-redish-light inline-block mt-4 no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
              <div class="flex items-center">
                Button<i class="fas fa-lg fa-angle-right ml-6"></i>
              </div>
            </a>
          </div>
        </div>

        <div class="md:flex flex-col md:w-2/3 md:h-full w-full">
          <img class="block" src="http://via.placeholder.com/500x400" alt="placeholder">
        </div>
    </div>
  </div>
</div>

<pre><code class="html overflow-auto my-8">&lt;div&gt;
  &lt;div class=&quot;-mx-2&quot;&gt;
    &lt;div class=&quot;flex overflow-hidden mx-auto rounded-lg shadow-lg max-w-lg&quot;&gt;
        &lt;div class=&quot;flex flex-col w-1/3&quot;&gt;
          &lt;div class=&quot;p-8&quot;&gt;
            &lt;h2 class=&quot;mb-4 text-2xl text-theme-redish&quot;&gt;Card Title&lt;/h2&gt;
            &lt;p class=&quot;leading-normal&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore tenetur tempore beatae, sed.&lt;/p&gt;
            &lt;a class=&quot;bg-theme-redish font-bold hover:bg-theme-redish-light inline-block mt-4 no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide&quot; href=&quot;#&quot;&gt;
              &lt;div class=&quot;flex items-center&quot;&gt;
                Button&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;flex flex-col w-2/3&quot;&gt;
          &lt;img class=&quot;block&quot; src=&quot;http://via.placeholder.com/500x400&quot; alt=&quot;placeholder&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<?php include 'partials/end.php'; ?>