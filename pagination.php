<?php include'partials/start.php'; ?>

  <h1 class="pb-4">Pagination</h1>
  <h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Example of building a pagination component with Tailwind CSS, styled by Caff Source.</h2>
  <p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- HOVERABLE PAGINATION -->

<h2 class="font-thin pb-4">Hoverable Pagination</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
  <div class="border-b border-grey-dark px-2 py-6 text-center">

    <div class="flex items-center justify-between mx-auto w-1/2">
      <a href="#" class="hover:font-bold no-underline pr-4 rounded-full text-black text-4xl">&laquo;</a>
      <a href="#" class="hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg">1</a>
      <a href="#" class="hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg">2</a>
      <a href="#" class="bg-red hover:bg-grey-light hover:text-black no-underline p-4 rounded-full text-white text-lg">3</a>
      <a href="#" class="hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg">4</a>
      <a href="#" class="hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg">5</a>
      <a href="#" class="hover:bg-grey-light no-underline p-4 rounded-full text-black">6</a>
      <a href="#" class="hover:font-bold no-underline pl-4 rounded-full text-black text-4xl">&raquo;</a>
    </div>

  </div>

  <div class="px-4 bg-grey-lightest">
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;div class=&quot;flex items-center justify-between mx-auto w-1/2&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:font-bold no-underline pr-4 rounded-full text-black text-4xl&quot;&gt;&amp;laquo;&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg&quot;&gt;1&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg&quot;&gt;2&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;bg-red hover:bg-grey-light hover:text-black no-underline p-4 rounded-full text-white text-lg&quot;&gt;3&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg&quot;&gt;4&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:bg-grey-light no-underline p-4 rounded-full text-black text-lg&quot;&gt;5&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:bg-grey-light no-underline p-4 rounded-full text-black&quot;&gt;6&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;hover:font-bold no-underline pl-4 rounded-full text-black text-4xl&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
      </code>
    </pre>
  </div>
</div>


<?php include'partials/end.php'; ?>