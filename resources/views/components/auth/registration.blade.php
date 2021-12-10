<div class="min-h-full px-4 flex items-center justify-center sm:px-6 p-10 lg:px-8">
    <div class="w-full bg-grey-lightest" style="padding-top: 4rem;">
        <div class="container mx-auto py-8">
            <div class="w-5/6 p-4 lg:w-1/2 mx-auto bg-white rounded shadow">
                <div class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Registration
                </div>
                <div>
                    <button onclick="openAuth()">
                        <div class="gi">

                        </div>
                    </button>
                </div>
                <form name="registration" class="py-4 px-4">
                    <div class="flex mb-4 px-10">
                        <div class="w-1/2 mr-1">
                            <label for="login" class="block text-grey-darker text-sm font-bold mb-2" for="first_name">
                                Login Name</label>
                            <input name="login_name"
                                   class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                   id="first_name" type="text" placeholder="Your login name">
                        </div>
                        <div class="w-1/2 ml-1">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input name="psswd"
                                   class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                   id="password" type="password" placeholder="Your secure password">
                        </div>
                    </div>
                    <div class="flex items-center px-10 justify-between mt-8">
                        <button
                            onclick="register_user()"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            type="submit">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let login_name = document.forms['registration']['login_name'];


    let password = document.psswd;


</script>
