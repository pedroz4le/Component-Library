<?php include'partials/start.php'; ?>

  <h1 class="pb-4">Navigation Lists</h1>
  <h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building a navigation list component with Tailwind CSS, styled by Caff Source.</h2>
  <p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- SECTIONAL NAVIGATION LIST -->

<h2 class="font-thin pb-4">Sectional Navigation List</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8">

		<nav class="bg-grey-lighter mx-auto p-6 max-w-xs">
		  <ul class="font-thin list-reset">
		  	<!-- SECTION ONE -->
		  	<li class="border-b font-bold mb-2 ml-2 tracking-wide">
		  		INTRODUCTION
		  	</li>

		  		<li class="mb-4 ml-6">
		  			<a href="#" class="hover:text-red no-underline text-black">
		  				About Caff Source
		  			</a>
		  		</li>

		  	<!-- SECTION TWO -->
		  	<li class="border-b font-bold mb-2 ml-2 tracking-wide">
		  		COMPONENTS
		  	</li>
				
				<!-- SUB-SECTION ONE -->
		  		<li class="mb-2 ml-6">
		  			<a href="#" class="hover:text-red no-underline text-black">
		  				Alerts
		  			</a>
		  		</li>

		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Solid
		  				</a>
		  			</li>

		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Border
		  				</a>
		  			</li>
		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Side Bar
		  				</a>
		  			</li>

				<!-- SUB-SECTION TWO -->
		  		<li class="mb-2 ml-6">
		  			<a href="#" class="hover:text-red no-underline text-black">
		  				Badges
		  			</a>
		  		</li>

		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Informational
		  				</a>
		  			</li>

		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Notification
		  				</a>
		  			</li>
		  			<li class="mb-2 ml-10">
		  				<a href="#" class="hover:text-red-lighter text-black">
		  					Call to Attention
		  				</a>
		  			</li>
		  </ul>
		</nav>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;nav class=&quot;bg-grey-lighter mx-auto p-6 max-w-xs&quot;&gt;
  &lt;ul class=&quot;font-thin list-reset&quot;&gt;
  	&lt;!-- SECTION ONE --&gt;
  	&lt;li class=&quot;border-b font-bold mb-2 ml-2 tracking-wide&quot;&gt;
  		INTRODUCTION
  	&lt;/li&gt;

  		&lt;li class=&quot;mb-4 ml-6&quot;&gt;
  			&lt;a href=&quot;#&quot; class=&quot;hover:text-red no-underline text-black&quot;&gt;
  				About Caff Source
  			&lt;/a&gt;
  		&lt;/li&gt;

  	&lt;!-- SECTION TWO --&gt;
  	&lt;li class=&quot;border-b font-bold mb-2 ml-2 tracking-wide&quot;&gt;
  		COMPONENTS
  	&lt;/li&gt;
		
		&lt;!-- SUB-SECTION ONE --&gt;
  		&lt;li class=&quot;mb-2 ml-6&quot;&gt;
  			&lt;a href=&quot;#&quot; class=&quot;hover:text-red no-underline text-black&quot;&gt;
  				Alerts
  			&lt;/a&gt;
  		&lt;/li&gt;

  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Solid
  				&lt;/a&gt;
  			&lt;/li&gt;

  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Border
  				&lt;/a&gt;
  			&lt;/li&gt;
  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Side Bar
  				&lt;/a&gt;
  			&lt;/li&gt;

		&lt;!-- SUB-SECTION TWO --&gt;
  		&lt;li class=&quot;mb-2 ml-6&quot;&gt;
  			&lt;a href=&quot;#&quot; class=&quot;hover:text-red no-underline text-black&quot;&gt;
  				Badges
  			&lt;/a&gt;
  		&lt;/li&gt;

  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Informational
  				&lt;/a&gt;
  			&lt;/li&gt;

  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Notification
  				&lt;/a&gt;
  			&lt;/li&gt;
  			&lt;li class=&quot;mb-2 ml-10&quot;&gt;
  				&lt;a href=&quot;#&quot; class=&quot;hover:text-red-lighter text-black&quot;&gt;
  					Call to Attention
  				&lt;/a&gt;
  			&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
			</code>
		</pre>

</div>

<?php include'partials/end.php'; ?>