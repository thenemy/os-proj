<div class="min-h-full flex items-center justify-center py-12 px-8 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div class="rounded shadow-lg p-4 bg-white ">
            <form onsubmit="" name="registration" class=" space-y-6" >
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="p-2">
                        <label for="login" class="sr-only">Login Name</label>
                        <input id="email-address" name="" type="text" required
                               class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Email address">
                    </div>
                    <div class="p-2">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Password">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                            class="group relative w-5/6 flex justify-center items-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    let login_name = document.login

    let psswrd = document.password


</script>
