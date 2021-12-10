<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Whack a mole</title>
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@2.3.0/dist/socket.io.slim.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="w-full h-screen bg-cover font-mono bg-main-back "
      style="background-image: url({{asset('images/3.png')}})"
>
<div>
    <div>
        <span>
            Superadmin
        </span>
        <div class="flex justify-center rounded">
            <table class="table-auto border-collapse border w-10/12 font-sans rounded">
                <tr class="w-8/12 bg-gray-200 text-gray-600 uppercase text-sm leading-normal rounded">
                    <th class="py-3 px-6 ">№</th>
                    <th class="py-3 px-6 ">Login</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6">Action</th>
                </tr>
                <tr class="w-8/12 bg-white border-b border-blue-100 hover:bg-gray-100">
                    <td class="p-3 ">
                        <label for="">
                            123123
                        </label>
                    </td>
                    <td class="p-3 ">
                        <label for="">
                            123123
                        </label>
                    </td>
                    <td class="p-3 px-6 text-center">
                        <label for="">
                                    <span
                                        class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                        </label>
                    </td>
                    <td class="p-3 flex flex-row items-center justify-center h-full py-1 px-6">


                        <div>
                            <a href="" class="tex-sm p-1">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                </div>
                            </a>
                        </div>

                        <form method="POST" action="">

                            <button class="p-3">
                                <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110 ">
                                    <img src="{{asset('images/trash.svg')}}" alt="">
                                </div>
                            </button>
                        </form>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
