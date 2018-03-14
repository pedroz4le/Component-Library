<?php include'partials/start.php'; ?>

  <h1 class="pb-4">Breadcrumbs</h1>
  <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nostrum minus vel sed, quos saepe eveniet, consequatur praesentium assumenda officia mollitia maiores, perspiciatis at quia porro soluta autem ipsum aut.</p>

<div class="border-b w-full my-10"></div>

<!-- FORWARD S:ASH TRAIL -->

<h2 class="font-thin pb-4">Forward Slash Trail</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>

<div class="border border-grey-dark mb-8 mx-auto overflow-scroll rounded max-w-lg">
  <div class="border-b border-grey-dark p-8 text-center">

    <div class="">
      <ol class="breadcrumbs flex list-reset mx-auto">
        <li class="breadcrumb-item mr-4">
          <a class="font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red" href="#">Electronics</a>
        </li>
        <li class="breadcrumb-item mr-4">
          <a class="font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red" href="#">Coffee Supplies</a>
        </li>
        <li class="breadcrumb-item mr-4">
          <a class="font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red" href="#">Coffee Makers</a>
        </li>
        <li class="breadcrumb-item mr-4">
          <a class="font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red" href="#">Coffee Pods</a>
        </li>
      </ol>
    </div>

  </div>

  <div class="px-4 bg-grey-lightest">
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;div class=&quot;bg-grey-lighter mx-6 my-10 px-8 py-4 rounded-full &quot;&gt;
  &lt;ol class=&quot;breadcrumbs flex list-reset mx-auto&quot;&gt;
    &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
      &lt;a class=&quot;font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red&quot; href=&quot;#&quot;&gt;Electronics&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
      &lt;a class=&quot;font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red&quot; href=&quot;#&quot;&gt;Coffee Supplies&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
      &lt;a class=&quot;font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red&quot; href=&quot;#&quot;&gt;Coffee Makers&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;breadcrumb-item mr-4&quot;&gt;
      &lt;a class=&quot;font-bold hover:text-red-lighter mr-3 no-underline text-lg text-red&quot; href=&quot;#&quot;&gt;Coffee Pods&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ol&gt;
&lt;/div&gt;
      </code>
    </pre>

    <h3 class=""> [Personal] CSS:</h3>
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
.breadcrumb-item:not(:last-child):after {
  content: &quot;/&quot;;
      </code>
    </pre>
  </div>
</div>

<div class="border-b w-full my-10"></div>

<?php include'partials/end.php'; ?>