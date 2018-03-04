<?php include'partials/start.php'; ?>

  <h1 class="pb-4">Breadcrumbs</h1>
  <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.</p>

<div class="border-b w-screen my-10"></div>

<!-- VERTICAL CARD COMPONENT -->

<h2 class="font-thin pb-4">Forward Slash Trail</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>


<ol class="breadcrumbs flex list-reset mx-auto my-10">
  <li class="breadcrumb-item mr-4">
    <a class="font-bold no-underline text-theme-redish-light mr-3" href="#">Electronics</a>
  </li>
  <li class="breadcrumb-item mr-4">
    <a class="font-bold no-underline text-theme-redish-light mr-3" href="#">Phones</a>
  </li>
  <li class="breadcrumb-item mr-4">
    <a class="font-bold no-underline text-theme-redish-light mr-3" href="#">Accessories</a>
  </li>
  <li class="breadcrumb-item mr-4">
    <a class="font-bold no-underline text-theme-redish-light mr-3" href="#">Chargers</a>
  </li>
</ol>

<h3 class="">HTML:</h3>
<pre><code class="html overflow-auto my-8">&lt;ol class=&quot;breadcrumbs flex list-reset mx-auto my-10&quot;&gt;
  &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
    &lt;a class=&quot;font-bold no-underline text-theme-purple-lighter mr-3&quot; href=&quot;#&quot;&gt;Electronics&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
    &lt;a class=&quot;font-bold no-underline text-theme-purple-lighter mr-3&quot; href=&quot;#&quot;&gt;Phones&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
    &lt;a class=&quot;font-bold no-underline text-theme-purple-lighter mr-3&quot; href=&quot;#&quot;&gt;Accessories&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
    &lt;a class=&quot;font-bold no-underline text-theme-purple-lighter mr-3&quot; href=&quot;#&quot;&gt;Chargers&lt;/a&gt;
  &lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h3 class=""> [Personal] CSS:</h3>
<pre><code class="html overflow-auto my-8">.breadcrumb-item:not(:last-child):after {
  content: &quot;/&quot;;
}
</code></pre>

<?php include'partials/end.php'; ?>