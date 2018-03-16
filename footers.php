<?php include 'partials/start.php'; ?>
	<h1 class="pb-4">Footers</h1>
	<h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building footer components with Tailwind CSS, styled by Caff Source.</h2>
 	<p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the use of Tailwind classes.</p>

<div class="border-b w-full my-10"></div>

<!-- SIMPLE FOOTER -->

<h2 class="font-thin pb-4">Simple Footer</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8 text-center">
		
		<div class="bg-grey-dark p-8 rounded-b-lg">
			<div class="flex items-center justify-between mb-10 mx-auto text-3xl max-w-md">
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-twitter"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-instagram"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-behance"></i></a>
			</div>

			<div class="text-grey-light text-xl">
				<div class="font-bold mb-2 text-white">
					Caff Source 
					<span class="font-thin">
						Component Library
					</span>
				</div>

				<div>
					©<i> Copyright 2018</i>
				</div>

				<div>
					<i>All rights reserved. Powered by <span class="text-white">Tailwind</span>.</i>
				</div>
			</div>
		</div>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;bg-grey-dark p-8 rounded-b-lg&quot;&gt;
	&lt;div class=&quot;flex items-center justify-between mb-10 mx-auto text-3xl max-w-md&quot;&gt;
		&lt;a href=&quot;#&quot; class=&quot;no-underline text-grey-light hover:text-white&quot;&gt;&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;a href=&quot;#&quot; class=&quot;no-underline text-grey-light hover:text-white&quot;&gt;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;a href=&quot;#&quot; class=&quot;no-underline text-grey-light hover:text-white&quot;&gt;&lt;i class=&quot;fab fa-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;a href=&quot;#&quot; class=&quot;no-underline text-grey-light hover:text-white&quot;&gt;&lt;i class=&quot;fab fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;
	&lt;/div&gt;

	&lt;div class=&quot;text-grey-light text-xl&quot;&gt;
		&lt;div class=&quot;font-bold mb-2 text-white&quot;&gt;
			Caff Source 
			&lt;span class=&quot;font-thin&quot;&gt;
				Component Library
			&lt;/span&gt;
		&lt;/div&gt;

		&lt;div&gt;
			&copy;&lt;i&gt; Copyright 2018&lt;/i&gt;
		&lt;/div&gt;

		&lt;div&gt;
			&lt;i&gt;All rights reserved. Powered by &lt;span class=&quot;text-white&quot;&gt;Tailwind&lt;/span&gt;.&lt;/i&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- MULTI-COLUMN FOOTER -->

<h2 class="font-thin pb-4">Multi-Column Footer</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">
	<div class="border-b border-grey-dark p-8">
		
		<div class="rounded-b-lg">
			<div class="md:flex bg-grey-lighter mx-auto px-10 py-12">
				<div class="md:flex flex-col mb-8 md:mb-0 w-full md:w-1/4">
					<img src="../images/logo.png" alt="brand logo" class="mb-6 w-16">
					<div class="font-bold text-xl">
						Caff Source
					</div>

					<div class="font-thin text-xl">
						Component Library
					</div>

					<div class="flex justify-between mt-6 max-w-2xs">
						<a href="#" class="hover:text-white no-underline text-black"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="hover:text-white no-underline text-black"><i class="fab fa-twitter"></i></a>
						<a href="#" class="hover:text-white no-underline text-black"><i class="fab fa-instagram"></i></a>
						<a href="#" class="hover:text-white no-underline text-black"><i class="fab fa-behance"></i></a>
					</div>
				</div>

				<div class="md:flex flex-col ml-6 mb-8 md:mb-0 w-full md:w-1/4">
					<ul class="list-reset">
						<li class="mb-2">
							<a class="hover:text-white hover:font-bold no-underline text-black" href="#">About</a>
						</li>

						<li class="mb-2">
							<a class="hover:text-white hover:font-bold no-underline text-black" href="#">Careers</a>
						</li>

						<li class="mb-2">
							<a class="hover:text-white hover:font-bold no-underline text-black" href="#">Team</a>
						</li>

						<li class="mb-2">
							<a class="hover:text-white hover:font-bold no-underline text-black" href="#">Owner Profile</a>
						</li>

						<li class="mb-2">
							<a class="hover:text-white hover:font-bold no-underline text-black" href="#">History</a>
						</li>
					</ul>
					
				</div>

				<div class="md:flex flex-col w-full md:w-1/2">
					<div class="mb-6">
						Sign Up for Updates:
					</div>

					<div class="inline-flex">
						<form>
			              <input class="bg-white border border-solid border-grey px-6 py-2 rounded-l-full text-sm w-32 md:w-32 lg:w-64 xl:w-80" type="text" placeholder="Email">
			            </form>

						<a class="bg-brand-gradient font-bold hover:bg-brand-gradient hover:bg-red-lighter no-underline px-6 py-2 rounded-r-full shadow-sm text-sm text-white tracking-wide" href="#">
							Submit
						</a>
					</div>
				</div>
			</div>

			<div class="bg-grey-dark font-light p-2 rounded-b-lg text-grey-light text-sm">
				<div class="ml-6">
					©<i> Copyright Caff Source 2018. All rights reserved. Powered by <a class="hover:text-black no-underline text-white" href="https://tailwindcss.com">Tailwind</a>.</i>
				</div>
			</div>
		</div>

	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;rounded-b-lg&quot;&gt;
	&lt;div class=&quot;md:flex bg-grey-lighter mx-auto px-10 py-12&quot;&gt;
		&lt;div class=&quot;md:flex flex-col mb-8 md:mb-0 w-full md:w-1/4&quot;&gt;
			&lt;img src=&quot;../images/logo.png&quot; alt=&quot;brand logo&quot; class=&quot;mb-6 w-16&quot;&gt;
			&lt;div class=&quot;font-bold text-xl&quot;&gt;
				Caff Source
			&lt;/div&gt;

			&lt;div class=&quot;font-thin text-xl&quot;&gt;
				Component Library
			&lt;/div&gt;

			&lt;div class=&quot;flex justify-between mt-6 max-w-2xs&quot;&gt;
				&lt;a href=&quot;#&quot; class=&quot;hover:text-white no-underline text-black&quot;&gt;&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;a href=&quot;#&quot; class=&quot;hover:text-white no-underline text-black&quot;&gt;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;a href=&quot;#&quot; class=&quot;hover:text-white no-underline text-black&quot;&gt;&lt;i class=&quot;fab fa-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;
				&lt;a href=&quot;#&quot; class=&quot;hover:text-white no-underline text-black&quot;&gt;&lt;i class=&quot;fab fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class=&quot;md:flex flex-col ml-6 mb-8 md:mb-0 w-full md:w-1/4&quot;&gt;
			&lt;ul class=&quot;list-reset&quot;&gt;
				&lt;li class=&quot;mb-2&quot;&gt;
					&lt;a class=&quot;hover:text-white hover:font-bold no-underline text-black&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
				&lt;/li&gt;

				&lt;li class=&quot;mb-2&quot;&gt;
					&lt;a class=&quot;hover:text-white hover:font-bold no-underline text-black&quot; href=&quot;#&quot;&gt;Careers&lt;/a&gt;
				&lt;/li&gt;

				&lt;li class=&quot;mb-2&quot;&gt;
					&lt;a class=&quot;hover:text-white hover:font-bold no-underline text-black&quot; href=&quot;#&quot;&gt;Team&lt;/a&gt;
				&lt;/li&gt;

				&lt;li class=&quot;mb-2&quot;&gt;
					&lt;a class=&quot;hover:text-white hover:font-bold no-underline text-black&quot; href=&quot;#&quot;&gt;Owner Profile&lt;/a&gt;
				&lt;/li&gt;

				&lt;li class=&quot;mb-2&quot;&gt;
					&lt;a class=&quot;hover:text-white hover:font-bold no-underline text-black&quot; href=&quot;#&quot;&gt;History&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
			
		&lt;/div&gt;

		&lt;div class=&quot;md:flex flex-col w-full md:w-1/2&quot;&gt;
			&lt;div class=&quot;mb-6&quot;&gt;
				Sign Up for Updates:
			&lt;/div&gt;

			&lt;div class=&quot;inline-flex&quot;&gt;
				&lt;form&gt;
	              &lt;input class=&quot;bg-white border border-solid border-grey px-6 py-2 rounded-l-full text-sm w-32 md:w-32 lg:w-64 xl:w-80&quot; type=&quot;text&quot; placeholder=&quot;Email&quot;&gt;
	            &lt;/form&gt;

				&lt;a class=&quot;bg-brand-gradient font-bold hover:bg-brand-gradient hover:bg-red-lighter no-underline px-6 py-2 rounded-r-full shadow-sm text-sm text-white tracking-wide&quot; href=&quot;#&quot;&gt;
					Submit
				&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;div class=&quot;bg-grey-dark font-light p-2 rounded-b-lg text-grey-light text-sm&quot;&gt;
		&lt;div class=&quot;ml-6&quot;&gt;
			&copy;&lt;i&gt; Copyright Caff Source 2018. All rights reserved. Powered by &lt;a class=&quot;hover:text-black no-underline text-white&quot; href=&quot;https://tailwindcss.com&quot;&gt;Tailwind&lt;/a&gt;.&lt;/i&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<?php include 'partials/end.php'; ?>