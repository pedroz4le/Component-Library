<?php include'partials/start.php'; ?>

<h1 class="pb-4">Global Navigation</h1>

<p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati fugiat eveniet quaerat magnam ex ullam reiciendis, officiis quasi reprehenderit nam saepe dolores ea sed dolore veritatis excepturi, fugit labore. Corporis.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>

<div class="border-b w-full my-10"></div>

<!-- BAR NAVIGATION -->

<h2 class="font-thin pb-4">Bar Navigation</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.</p>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-xl">
	<div class="border-b border-grey-dark p-8">

		<nav class="flex items-center justify-between flex-wrap bg-grey-lighter p-6">
		  <div class="flex items-center mr-6">
		    <img src="../images/logo.png" alt="brand logo" class="w-8">
		    <span class="font-bold ml-4 text-xl">Caff Source <span class="font-thin">Component Library</span></span>

		    <button v-on:click="showMenu = !showMenu" class="md:hidden text-grey-light">
              <i class="fas fa-2x fa-bars"></i>
            </button>
		  </div>

		  <div :class="{ hidden: showMenu }" class="md:block md:shadow-none">
			  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black">Docs</a>
			      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black">Examples</a>
			      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mb-6 md:mb-0 mx-4 mt-4 text-black">Blog</a>
			    </div>
			    
				<a class="bg-brand-gradient font-bold inline-block hover:bg-brand-gradient hover:bg-red-lighter no-underline px-6 py-2 rounded-full shadow-md text-sm text-white tracking-wide" href="#">
					<div class="flex items-center">
						<img src="../images/downloadIcon.png" alt="cownload icon" class="mr-4 w-4">Download
					</div>
				</a>
			  </div>
		  </div>
		</nav>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;nav id="app" class=&quot;flex items-center justify-between flex-wrap bg-grey-lighter p-6&quot;&gt;
  &lt;div class=&quot;flex items-center mr-6&quot;&gt;
    &lt;img src=&quot;../images/logo.png&quot; alt=&quot;brand logo&quot; class=&quot;w-8&quot;&gt;
    &lt;span class=&quot;font-bold ml-4 text-xl&quot;&gt;Caff Source &lt;span class=&quot;font-thin&quot;&gt;Component Library&lt;/span&gt;&lt;/span&gt;

    &lt;button v-on:click=&quot;showMenu = !showMenu&quot; class=&quot;md:hidden text-grey-light&quot;&gt;
      &lt;i class=&quot;fas fa-2x fa-bars&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;div :class=&quot;{ hidden: showMenu }&quot; class=&quot;md:block md:shadow-none&quot;&gt;
	  &lt;div class=&quot;w-full block flex-grow lg:flex lg:items-center lg:w-auto&quot;&gt;
	    &lt;div class=&quot;text-sm lg:flex-grow&quot;&gt;
	      &lt;a href=&quot;#&quot; class=&quot;block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black&quot;&gt;Docs&lt;/a&gt;
	      &lt;a href=&quot;#&quot; class=&quot;block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black&quot;&gt;Examples&lt;/a&gt;
	      &lt;a href=&quot;#&quot; class=&quot;block hover:text-grey lg:inline-block lg:mt-0 mb-6 md:mb-0 mx-4 mt-4 text-black&quot;&gt;Blog&lt;/a&gt;
	    &lt;/div&gt;
	    
		&lt;a class=&quot;bg-brand-gradient font-bold inline-block hover:bg-brand-gradient hover:bg-red-lighter no-underline px-6 py-2 rounded-full shadow-md text-sm text-white tracking-wide&quot; href=&quot;#&quot;&gt;
			&lt;div class=&quot;flex items-center&quot;&gt;
				&lt;img src=&quot;../images/downloadIcon.png&quot; alt=&quot;cownload icon&quot; class=&quot;mr-4 w-4&quot;&gt;Download
			&lt;/div&gt;
		&lt;/a&gt;
	  &lt;/div&gt;
  &lt;/div&gt;
&lt;/nav&gt;
			</code>
		</pre>

	<h3 class="">Script:</h3>
    <pre class="language-html" style="margin: 0px; padding: 0px;">
      <code class="language-html text-sm">
&lt;script&gt;
  var app = new Vue({
    el: '#app',
    data: {
      showMenu: true
    },
  })
&lt;/script&gt;
      </code>
    </pre>
	</div>
</div>

<?php include'partials/end.php'; ?>