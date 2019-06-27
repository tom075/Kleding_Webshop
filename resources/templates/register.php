<form class="md:w-1/3 w-full m-auto mt-10 md:mt-48 p-4" method="post" action="/projecten/kleding_webshop/resources/templates/verify/registerVerify.php">
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Volledige naam
            </label>
        </div>
        <div class="md:w-2/3">
            <input required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="inline-full-name" type="text" placeholder="John Doe">
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Email adres
            </label>
        </div>
        <div class="md:w-2/3">
            <input required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="inline-full-name" type="text" placeholder="John@gmail.com">
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                Wachtwoord
            </label>
        </div>
        <div class="md:w-2/3">
            <input required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="inline-username" type="password" placeholder="******************">
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <button type="submit" class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Maak een account aan
            </button>
            <p>al een account? <a class="text-blue-400" href="/projecten/kleding_webshop/login">log hier in!</a></p>
        </div>
    </div>
</form>

</body>
</html>