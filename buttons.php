<?php include 'partials/start.php'; ?>
	<h1 class="pb-4">Buttons</h1>
	<h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building button components with Tailwind CSS, styled by Caff Source.</h2>
	<p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- SOLID BUTTON -->

<h2 class="font-thin pb-4">Solid Button</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8 text-center">

		<a class="bg-brand-gradient font-bold inline-block hover:bg-brand-gradient hover:bg-red-lighter no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
			<div class="flex items-center">
				Button<i class="fas fa-lg fa-angle-right ml-6"></i>
			</div>
		</a>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;a class=&quot;bg-brand-gradient font-bold inline-block hover:bg-brand-gradient hover:bg-red-lighter no-underline px-8 py-4 rounded-full shadow-sm text-lg text-white tracking-wide&quot; href=&quot;#&quot;&gt;
	&lt;div class=&quot;flex items-center&quot;&gt;
		Button&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
	&lt;/div&gt;
&lt;/a&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- GHOST BUTTON -->

<h2 class="font-thin pb-4">Ghost Button</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8 text-center">

		<a class="border border-red font-bold hover:bg-red hover:text-white inline-block no-underline px-8 py-4 rounded-full text-lg text-red tracking-wide" href="#">
			<div class="flex items-center">
				Button<i class="fas fa-lg fa-angle-right ml-6"></i>
			</div>
		</a>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;a class=&quot;border border-red font-bold hover:bg-red hover:text-white inline-block no-underline px-8 py-4 rounded-full text-lg text-red tracking-wide&quot; href=&quot;#&quot;&gt;
	&lt;div class=&quot;flex items-center&quot;&gt;
		Button&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
	&lt;/div&gt;
&lt;/a&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- MULTIPLE OPTION BUTTON -->

<h2 class="font-thin pb-4">Multiple Option Button</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8 text-center">

		<div class="inline-flex">
		  <a class="bg-purple border border-purple-dark hover:bg-purple-light text-lg text-white font-bold py-4 px-8 rounded-l-full tracking-wide">
		    <i class="fas fa-angle-left mr-6"></i> Prev
		  </a>
		  <a class="bg-purple border border-purple-dark hover:bg-purple-light text-lg text-white font-bold py-4 px-8 rounded-r-full tracking-wide">
		    Next<i class="fas fa-lg fa-angle-right ml-6"></i>
		  </a>
		</div>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;inline-flex&quot;&gt;
  &lt;a class=&quot;bg-purple border border-purple-dark hover:bg-purple-light text-lg text-white font-bold py-4 px-8 rounded-l-full tracking-wide&quot;&gt;
    &lt;i class=&quot;fas fa-angle-left mr-6&quot;&gt;&lt;/i&gt; Prev
  &lt;/a&gt;
  &lt;a class=&quot;bg-purple border border-purple-dark hover:bg-purple-light text-lg text-white font-bold py-4 px-8 rounded-r-full tracking-wide&quot;&gt;
    Next&lt;i class=&quot;fas fa-lg fa-angle-right ml-6&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<?php include 'partials/end.php'; ?>