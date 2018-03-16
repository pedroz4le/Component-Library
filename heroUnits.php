<?php include 'partials/start.php'; ?>
	<h1 class="pb-4">Hero Units</h1>
	<h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building hero unit components with Tailwind CSS, styled by Caff Source.</h2>
	<p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- HEADLINE AND SUB-HEADLINE HERO UNIT -->

<h2 class="font-thin pb-4">Headline and Sub-headline Hero Unit</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8 text-center">
		
		<div class="flex heroImage1 items-center justify-center h-96 mx-auto rounded-lg shadow-lg text-white max-w-md">
			<div>
				<h1 class="mb-4 text-shadow text-4xl">Delightful Drinks</h1>

				<div class="mb-8 text-white text-shadow text-xl tracking-wide">Find the perfect recipe at your fingertips.</div>

				<a class="bg-brand-gradient hover:bg-brand-gradient hover:bg-red mt-4 inline-block no-underline px-6 py-2 rounded-full shadow-lg text-lg text-white" href="#">
	              <div class="flex items-center">
	                Find Out More<i class="fas fa-lg fa-angle-right ml-2"></i>
	              </div>
	            </a>
			</div>
		</div>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;flex heroImage1 items-center justify-center h-96 rounded-lg shadow-lg text-white max-w-md&quot;&gt;
	&lt;div&gt;
		&lt;h1 class=&quot;mb-4 text-shadow text-4xl&quot;&gt;Delightful Drinks&lt;/h1&gt;

		&lt;div class=&quot;mb-8 text-white text-shadow text-xl tracking-wide&quot;&gt;Find the perfect recipe at your fingertips.&lt;/div&gt;

		&lt;a class=&quot;bg-brand-gradient hover:bg-brand-gradient hover:bg-red mt-4 inline-block no-underline px-6 py-2 rounded-full shadow-lg text-lg text-white&quot; href=&quot;#&quot;&gt;
          &lt;div class=&quot;flex items-center&quot;&gt;
            Find Out More&lt;i class=&quot;fas fa-lg fa-angle-right ml-2&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;
			</code>
		</pre>

	<h3 class=""> [Personal] CSS:</h3>
	    <pre class="language-html" style="margin: 0px; padding: 0px;">
	      <code class="language-html text-sm">
.heroImage1{
	background-image: url("http://www.pedrozaarts.com/CaffSource/images/coffeePicThree.jpg");
}
	      </code>
	    </pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- LARGE HEADLINE HERO UNIT -->

<h2 class="font-thin pb-4">Large Headline Hero Unit</h2>


<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8">
		
		<div class="flex heroImage2 items-center justify-center mx-auto h-96 rounded-lg shadow-lg text-white max-w-md">
			<div class="flex flex-col m-8 text-center w-full md:w-1/2">
				<div class="border-b border-white text-shadow max-w-sm my-4"></div>

				<h1 class="mb-4 text-shadow text-5xl">
					<div>DRINK</div>
					<div>MORE</div>
					<div>COFFEE</div>
				</h1>
				
				<div class="border-b border-white text-shadow max-w-sm my-4"></div>
				
				<div>
					<a class="bg-red hover:bg-red-lighter mt-4 inline-block no-underline px-6 py-2 rounded-full shadow-lg text-lg text-white" href="#">
		              <div class="flex items-center">
		                Why?<i class="fas fa-lg fa-angle-right ml-2"></i>
		              </div>
		            </a>
				</div>
			</div>
		</div>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;flex heroImage2 items-center justify-center mx-auto h-96 rounded-lg shadow-lg text-white max-w-md&quot;&gt;
	&lt;div class=&quot;flex flex-col m-8 text-center w-full md:w-1/2&quot;&gt;
		&lt;div class=&quot;border-b border-white text-shadow max-w-sm my-4&quot;&gt;&lt;/div&gt;

		&lt;h1 class=&quot;mb-4 text-shadow text-5xl&quot;&gt;
			&lt;div&gt;DRINK&lt;/div&gt;
			&lt;div&gt;MORE&lt;/div&gt;
			&lt;div&gt;COFFEE&lt;/div&gt;
		&lt;/h1&gt;
		
		&lt;div class=&quot;border-b border-white text-shadow max-w-sm my-4&quot;&gt;&lt;/div&gt;
		
		&lt;div&gt;
			&lt;a class=&quot;bg-red hover:bg-red-lighter mt-4 inline-block no-underline px-6 py-2 rounded-full shadow-lg text-lg text-white&quot; href=&quot;#&quot;&gt;
              &lt;div class=&quot;flex items-center&quot;&gt;
                Why?&lt;i class=&quot;fas fa-lg fa-angle-right ml-2&quot;&gt;&lt;/i&gt;
              &lt;/div&gt;
            &lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
			</code>
		</pre>

	<h3 class=""> [Personal] CSS:</h3>
	    <pre class="language-html" style="margin: 0px; padding: 0px;">
	      <code class="language-html text-sm">
.heroImage2{
	background-image: url("http://www.pedrozaarts.com/CaffSource/images/coffeePicThree.jpg");
}
	      </code>
	    </pre>
	</div>
</div>

<?php include 'partials/end.php'; ?>