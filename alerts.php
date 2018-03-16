<?php include'partials/start.php'; ?>

	<h1 class="pb-4">Alerts</h1>
	<h2 class="font-thin leading-normal pb-8 text-grey-dark max-w-lg">Examples of building alert components with Tailwind CSS, styled and created by Caff Source.</h2>
	<p class="leading-normal">These examples can easily be grabbed for use directly from this page, and further customized through the configuration file.</p>

<div class="border-b w-full my-10"></div>

<!-- SOLID ALERT -->

<h2 class="font-thin pb-4">Solid Alert</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">

	<div class="bg-blue m-8 p-4 rounded-lg text-white">
	  <p>
		<i class="fas fa-info-circle mr-2 text-xl"></i>
	  	<b>Hmm.</b> Restart your computer soon to prevent a system crash.
	  </p>
	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;bg-blue m-8 p-4 rounded-lg text-white&quot;&gt;
  &lt;p&gt;
	&lt;i class=&quot;fas fa-info-circle mr-2 text-xl&quot;&gt;&lt;/i&gt;
  	&lt;b&gt;Hmm.&lt;/b&gt; Restart your computer soon to prevent a system crash.
  &lt;/p&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- BORDER ALERT -->

<h2 class="font-thin pb-4">Border Alert</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">

	<div class="bg-red-lightest border border-red-darker flex justify-between m-8 p-4 rounded-lg text-red-darker">
	  <p>
	  	<b>Error:</b> You can't perform this action without changing your settings.
	  </p>

	  <p>
	  	<i class="fas fa-times-circle text-xl"></i>
	  </p>
	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;bg-red-lightest border border-red-darker flex justify-between m-8 p-4 rounded-lg text-red-darker&quot;&gt;
  &lt;p&gt;
  	&lt;b&gt;Error:&lt;/b&gt; You can't perform this action without changing your settings.
  &lt;/p&gt;

  &lt;p&gt;
  	&lt;i class=&quot;fas fa-times-circle text-xl&quot;&gt;&lt;/i&gt;
  &lt;/p&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- SIDE BAR ALERT -->

<h2 class="font-thin pb-4">Side Bar Alert</h2>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-2xl">

	<div class="bg-yellow-lightest border-l-4 border-yellow-darkest m-8 p-4 rounded-r-lg text-yellow-darkest">
	  <div class="pb-2">
	  	<b>Be Informed</b>
	  </div>

	  <div>
	  	<p>Go to your account setting to find out new tips and tools.</p>
	  </div>
	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;bg-yellow-lightest border-l-4 border-yellow-darkest m-8 p-4 rounded-r-lg text-yellow-darkest&quot;&gt;
  &lt;div class=&quot;pb-2&quot;&gt;
  	&lt;b&gt;Be Informed&lt;/b&gt;
  &lt;/div&gt;

  &lt;div&gt;
  	&lt;p&gt;Go to your account setting to find out new tips and tools.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<?php include'partials/end.php'; ?>