<!DOCTYPE html>
<html lang="en">
<head>
	<title>CSUN Coffee Source</title>
	<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/blackIcon.png">
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
</head>
<body>
	<nav class="flex items-center justify-between flex-wrap bg-grey-lighter p-6">
	  <div class="flex items-center mr-6">
	    <i class="fas fa-coffee text-red w-8"></i>
	    <span class="font-bold ml-4 text-xl">CSUN <span class="font-thin">Coffee Source</span></span>

	    <button v-on:click="showMenu = !showMenu" class="md:hidden text-grey-light">
          <i class="fas fa-2x fa-bars"></i>
        </button>
	  </div>

	  <div :class="{ hidden: showMenu }" class="md:block md:shadow-none">
		  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
		    <div class="text-sm lg:flex-grow">
		      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black">About</a>
		      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mx-4 mt-4 text-black">Roasts</a>
		      <a href="#" class="block hover:text-grey lg:inline-block lg:mt-0 mb-6 md:mb-0 mx-4 mt-4 text-black">Blog</a>
		    </div>
		  </div>
	  </div>
	</nav>

	<div class="flex heroImage3 items-center justify-center mx-auto h-96 rounded-lg shadow-lg text-white w-full">
		<div class="flex flex-col m-8 text-center w-full md:w-1/2">
			<div class="border-b border-white text-shadow w-full my-4"></div>

			<h1 class="mb-4 text-shadow text-5xl">
				<div>DRINK</div>
				<div>MORE</div>
				<div>COFFEE</div>
			</h1>
			
			<div class="border-b border-white text-shadow w-full my-4"></div>
			
			<div>
				<a class="bg-red hover:bg-red-lighter mt-4 inline-block no-underline px-6 py-2 rounded-full shadow-lg text-lg text-white" href="#">
	              <div class="flex items-center">
	                Why?<i class="fas fa-lg fa-angle-right ml-2"></i>
	              </div>
	            </a>
			</div>
		</div>
	</div>

	<div class="flex m-8">
		<div class="flex flex-col w-1/2">
			<div class="m-4">
		      <div class="-mx-2">
		        <div class="md:flex overflow-hidden mx-auto rounded-lg shadow-lg max-w-md">
		            <div class="md:flex flex-col md:w-1/3 md:h-full w-full">
		              <div class="p-8">
		                <h2 class="mb-4 text-2xl text-theme-redish">Coffee Shots</h2>
		                <p class="leading-normal">Visit the best new coffee places in Los Angeles Tonite!</p>
		                <a class="bg-red font-bold inline-block hover:bg-red-lighter mt-4 no-underline px-6 py-2 rounded-full shadow-sm text-lg text-white tracking-wide" href="#">
		                  <div class="flex items-center">
		                    Read More<i class="fas fa-lg fa-angle-right ml-6"></i>
		                  </div>
		                </a>
		              </div>
		            </div>

		            <div class="md:flex flex-col md:w-2/3 md:h-full w-full">
		              <img class="block" src="../images/coffeePicTwo.jpg" alt="People taking a picture of them holding coffee mugs">
		            </div>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="flex flex-col w-1/2">
			<p class="leading-normal p-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem distinctio dicta consectetur nemo error nesciunt voluptate ipsam eaque consequatur numquam necessitatibus animi illum aspernatur iure, tenetur libero, doloremque quae amet.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ea praesentium, asperiores consequatur nostrum beatae deleniti. Modi, blanditiis, porro iste beatae consequatur, excepturi facilis molestiae suscipit et tempora eius perspiciatis!</p>
		</div>
	</div>

	<div class="m-10">
		<p class="leading-normal p-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem distinctio dicta consectetur nemo error nesciunt voluptate ipsam eaque consequatur numquam necessitatibus animi illum aspernatur iure, tenetur libero, doloremque quae amet.

		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ea praesentium, asperiores consequatur nostrum beatae deleniti. Modi, blanditiis, porro iste beatae consequatur, excepturi facilis molestiae suscipit et tempora eius perspiciatis!</p>
		
		<p class="leading-normal p-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem distinctio dicta consectetur nemo error nesciunt voluptate ipsam eaque consequatur numquam necessitatibus animi illum aspernatur iure, tenetur libero, doloremque quae amet.

		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ea praesentium, asperiores consequatur nostrum beatae deleniti. Modi, blanditiis, porro iste beatae consequatur, excepturi facilis molestiae suscipit et tempora eius perspiciatis!</p>
	</div>


	<div class="md:flex flex-wrap lg:flex-no-wrap h-112 mx-auto p-10 max-w-xl w-full">
      <div class="md:flex w-full md:1/2">
        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Sunday</p>
            <p class="mb-2">11:09 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Latte News</h2>
            A new recipe that will help energy levels.
          </div>
        </div>

        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Monday</p>
            <p class="mb-2">8:11 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Frappe Discovery</h2>
            1,000 frappes found in an Indonesia freezer.
          </div>
        </div>

        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Tuesday</p>
            <p class="mb-2">12:30 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Americano Spill</h2>
            400 gallons of Americano coffee for Tucson event spilled into lake.
          </div>
        </div>
      </div>

      <div class="md:flex w-full md:1/2">
        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Wednesday</p>
            <p class="mb-2">10:45 a.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Espresso News</h2>
            New and more convenient way to make your own espresso drinks at home.
          </div>
        </div>

        <div class="bg-grey-light md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Today</p>
            <p class="mb-2">11:50 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>

            <h2 class="mb-2">Nescafe Users</h2>
            The Nescafe coffee maker is being replaced by this new device!
          </div>
        </div>

        <div class="bg-grey-lighter md:flex flex-col overflow-scroll p-4 w-full md:w-1/3">
          <div class="p-4">
            <p class="mb-2">Saturday</p>
            <p class="mb-2">3:26 p.m</p>

            <a class="bg-red font-bold inline-block hover:bg-red-lighter mb-2 mt-4 no-underline px-4 py-2 rounded-full shadow-sm text-xs text-white tracking-wide" href="#">
              <div class="flex items-center">
                Read
              </div>
            </a>
            
            <h2 class="mb-2">Coffee Brewers</h2>
            This group of professional coffee tasters learned how to brew.
          </div>
        </div>
      </div>
    </div>

    <div class="m-10">
		<p class="leading-normal p-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem distinctio dicta consectetur nemo error nesciunt voluptate ipsam eaque consequatur numquam necessitatibus animi illum aspernatur iure, tenetur libero, doloremque quae amet.

		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ea praesentium, asperiores consequatur nostrum beatae deleniti. Modi, blanditiis, porro iste beatae consequatur, excepturi facilis molestiae suscipit et tempora eius perspiciatis!</p>
	</div>

	<div class="bg-grey-dark p-8">
			<div class="flex items-center justify-between mb-10 mx-auto text-3xl max-w-md">
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-twitter"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-instagram"></i></a>
				<a href="#" class="no-underline text-grey-light hover:text-white"><i class="fab fa-behance"></i></a>
			</div>

			<div class="text-grey-light text-xl">
				<div class="font-bold mb-2 text-white">
					CSUN 
					<span class="font-thin">
						Coffee Source
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
</body>
</html>