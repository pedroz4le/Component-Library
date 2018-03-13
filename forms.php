<?php include 'partials/start.php'; ?>
<h1 class="pb-4">Forms</h1>

<p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati fugiat eveniet quaerat magnam ex ullam reiciendis, officiis quasi reprehenderit nam saepe dolores ea sed dolore veritatis excepturi, fugit labore. Corporis.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorum fuga inventore, cumque, praesentium distinctio, fugit consectetur necessitatibus numquam accusamus rem beatae. Maxime similique voluptatem voluptatibus quaerat, voluptas harum, culpa?</p>

<div class="border-b w-full my-10"></div>

<!-- USER LOGIN FORM -->

<h2 class="font-thin pb-4">User Login Form</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.</p>

<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-lg">

	<div class="m-8 mx-auto max-w-xs">
	  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
	    <div class="mb-4">
	      <label class="block text-sm font-bold mb-2" for="username">
	        Username
	      </label>
	      <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-grey-darkest" id="username" type="text" placeholder="Username">
	    </div>
	    <div class="mb-6">
	      <label class="block text-sm font-bold mb-2" for="password">
	        Password
	      </label>
	      <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-grey-darkest mb-3" id="password" type="password" placeholder="***********">
	    </div>
	    <div class="flex items-center justify-between">
	      <button class="bg-brand-gradient hover:bg-red text-white font-bold py-2 px-4 rounded-full" type="button">
	        Sign In
	      </button>
	      <a class="inline-block align-baseline font-bold text-sm text-purple hover:text-purple-light" href="#">
	        Forgot Password?
	      </a>
	    </div>
	  </form>
	</div>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;div class=&quot;m-8 mx-auto max-w-xs&quot;&gt;
  &lt;form class=&quot;bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4&quot;&gt;
    &lt;div class=&quot;mb-4&quot;&gt;
      &lt;label class=&quot;block text-sm font-bold mb-2&quot; for=&quot;username&quot;&gt;
        Username
      &lt;/label&gt;
      &lt;input class=&quot;shadow appearance-none border rounded-full w-full py-2 px-3 text-grey-darkest&quot; id=&quot;username&quot; type=&quot;text&quot; placeholder=&quot;Username&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-6&quot;&gt;
      &lt;label class=&quot;block text-sm font-bold mb-2&quot; for=&quot;password&quot;&gt;
        Password
      &lt;/label&gt;
      &lt;input class=&quot;shadow appearance-none border rounded-full w-full py-2 px-3 text-grey-darkest mb-3&quot; id=&quot;password&quot; type=&quot;password&quot; placeholder=&quot;***********&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex items-center justify-between&quot;&gt;
      &lt;button class=&quot;bg-brand-gradient hover:bg-red text-white font-bold py-2 px-4 rounded-full&quot; type=&quot;button&quot;&gt;
        Sign In
      &lt;/button&gt;
      &lt;a class=&quot;inline-block align-baseline font-bold text-sm text-purple hover:text-purple-light&quot; href=&quot;#&quot;&gt;
        Forgot Password?
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/form&gt;
&lt;/div&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- HOVERABLE INLINE FORM -->

<h2 class="font-thin pb-4">Hoverable Inline Form</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.</p>


<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-lg">

	<form class="m-10 mx-auto w-full max-w-xs">
	  <div class="md:flex md:items-center mb-6">
	    <div class="md:w-1/3">
	      <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
	        Full Name
	      </label>
	    </div>
	    <div class="md:w-2/3">
	      <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded-full w-full py-2 px-4 text-grey-darker" id="inline-full-name" type="text" value="Jane Doe">
	    </div>
	  </div>
	  <div class="md:flex md:items-center mb-6">
	    <div class="md:w-1/3">
	      <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
	        Password
	      </label>
	    </div>
	    <div class="md:w-2/3">
	      <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded-full w-full py-2 px-4 text-grey-darker" id="inline-username" type="password" placeholder="*********">
	    </div>
	  </div>
	  <div class="md:flex md:items-center mb-6">
	    <div class="md:w-1/3"></div>
	    <label class="md:w-2/3 block text-grey font-bold">
	      <input class="mr-2" type="checkbox">
	      <span class="text-sm">
	        Send me your newsletter!
	      </span>
	    </label>
	  </div>
	  <div class="md:flex md:items-center">
	    <div class="md:w-1/3"></div>
	    <div class="md:w-2/3">
	      <button class="shadow bg-brand-gradient hover:bg-purple-light text-white font-bold py-2 px-4 rounded-full" type="button">
	        Sign Up
	      </button>
	    </div>
	  </div>
	</form>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;form class=&quot;m-10 mx-auto w-full max-w-xs&quot;&gt;
  &lt;div class=&quot;md:flex md:items-center mb-6&quot;&gt;
    &lt;div class=&quot;md:w-1/3&quot;&gt;
      &lt;label class=&quot;block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4&quot; for=&quot;inline-full-name&quot;&gt;
        Full Name
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;md:w-2/3&quot;&gt;
      &lt;input class=&quot;bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded-full w-full py-2 px-4 text-grey-darker&quot; id=&quot;inline-full-name&quot; type=&quot;text&quot; value=&quot;Jane Doe&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;md:flex md:items-center mb-6&quot;&gt;
    &lt;div class=&quot;md:w-1/3&quot;&gt;
      &lt;label class=&quot;block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4&quot; for=&quot;inline-username&quot;&gt;
        Password
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;md:w-2/3&quot;&gt;
      &lt;input class=&quot;bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded-full w-full py-2 px-4 text-grey-darker&quot; id=&quot;inline-username&quot; type=&quot;password&quot; placeholder=&quot;******************&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;md:flex md:items-center mb-6&quot;&gt;
    &lt;div class=&quot;md:w-1/3&quot;&gt;&lt;/div&gt;
    &lt;label class=&quot;md:w-2/3 block text-grey font-bold&quot;&gt;
      &lt;input class=&quot;mr-2&quot; type=&quot;checkbox&quot;&gt;
      &lt;span class=&quot;text-sm&quot;&gt;
        Send me your newsletter!
      &lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;md:flex md:items-center&quot;&gt;
    &lt;div class=&quot;md:w-1/3&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;md:w-2/3&quot;&gt;
      &lt;button class=&quot;shadow bg-brand-gradient hover:bg-purple-light text-white font-bold py-2 px-4 rounded-full&quot; type=&quot;button&quot;&gt;
        Sign Up
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
			</code>
		</pre>
	</div>
</div>

<div class="border-b w-full my-10"></div>

<!-- FORM GRID -->

<h2 class="font-thin pb-4">Form Grid</h2>
<p class="leading-normal pb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde non nam, consequatur expedita nulla fugiat tempora ex similique necessitatibus consequuntur mollitia eum soluta laudantium, repudiandae hic nobis minus laboriosam.</p>


<div class="border border-grey-dark mb-8 mx-auto overflow-hidden rounded max-w-lg">

	<form class="m-10 mx-auto w-112">
	  <div class="flex flex-wrap -mx-3 mb-6">
	    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
	        First Name
	      </label>
	      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded-full py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
	      <p class="text-red text-xs italic">Please fill out this field.</p>
	    </div>
	    <div class="w-full md:w-1/2 px-3">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
	        Last Name
	      </label>
	      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
	    </div>
	  </div>
	  <div class="flex flex-wrap -mx-3 mb-6">
	    <div class="w-full px-3">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
	        Password
	      </label>
	      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
	      <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
	    </div>
	  </div>
	  <div class="flex flex-wrap -mx-3 mb-2">
	    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
	        City
	      </label>
	      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4" id="grid-city" type="text" placeholder="Albuquerque">
	    </div>
	    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
	        State
	      </label>
	      <div class="relative">
	        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded-full" id="grid-state">
	          <option>New Mexico</option>
	          <option>Missouri</option>
	          <option>Texas</option>
	        </select>
	        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
	          
	        </div>
	      </div>
	    </div>
	    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
	      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
	        Zip
	      </label>
	      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4" id="grid-zip" type="text" placeholder="90210">
	    </div>
	  </div>
	</form>

	<div class="px-4 bg-grey-lightest">
		<pre class="language-html" style="margin: 0px; padding: 0px;">
			<code class="language-html text-sm">
&lt;form class=&quot;m-10 mx-auto w-112&quot;&gt;
  &lt;div class=&quot;flex flex-wrap -mx-3 mb-6&quot;&gt;
    &lt;div class=&quot;w-full md:w-1/2 px-3 mb-6 md:mb-0&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-first-name&quot;&gt;
        First Name
      &lt;/label&gt;
      &lt;input class=&quot;appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded-full py-3 px-4 mb-3&quot; id=&quot;grid-first-name&quot; type=&quot;text&quot; placeholder=&quot;Jane&quot;&gt;
      &lt;p class=&quot;text-red text-xs italic&quot;&gt;Please fill out this field.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;w-full md:w-1/2 px-3&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-last-name&quot;&gt;
        Last Name
      &lt;/label&gt;
      &lt;input class=&quot;appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4&quot; id=&quot;grid-last-name&quot; type=&quot;text&quot; placeholder=&quot;Doe&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex flex-wrap -mx-3 mb-6&quot;&gt;
    &lt;div class=&quot;w-full px-3&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-password&quot;&gt;
        Password
      &lt;/label&gt;
      &lt;input class=&quot;appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4 mb-3&quot; id=&quot;grid-password&quot; type=&quot;password&quot; placeholder=&quot;******************&quot;&gt;
      &lt;p class=&quot;text-grey-dark text-xs italic&quot;&gt;Make it as long and as crazy as you'd like&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex flex-wrap -mx-3 mb-2&quot;&gt;
    &lt;div class=&quot;w-full md:w-1/3 px-3 mb-6 md:mb-0&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-city&quot;&gt;
        City
      &lt;/label&gt;
      &lt;input class=&quot;appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4&quot; id=&quot;grid-city&quot; type=&quot;text&quot; placeholder=&quot;Albuquerque&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;w-full md:w-1/3 px-3 mb-6 md:mb-0&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-state&quot;&gt;
        State
      &lt;/label&gt;
      &lt;div class=&quot;relative&quot;&gt;
        &lt;select class=&quot;block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded-full&quot; id=&quot;grid-state&quot;&gt;
          &lt;option&gt;New Mexico&lt;/option&gt;
          &lt;option&gt;Missouri&lt;/option&gt;
          &lt;option&gt;Texas&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker&quot;&gt;
          
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;w-full md:w-1/3 px-3 mb-6 md:mb-0&quot;&gt;
      &lt;label class=&quot;block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2&quot; for=&quot;grid-zip&quot;&gt;
        Zip
      &lt;/label&gt;
      &lt;input class=&quot;appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-full py-3 px-4&quot; id=&quot;grid-zip&quot; type=&quot;text&quot; placeholder=&quot;90210&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
			</code>
		</pre>
	</div>
</div>


<?php include 'partials/end.php'; ?>