<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMS - Add Student</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1 class="text-5xl font-bold text-gray-600 absolute left-1/2 py-8 transform -translate-x-2/4">Southeast
                University</h1>
        </div>
        <div class="form-control absolute top-1/2 left-1/2 transform -translate-x-2/4 -translate-y-2/4">
            <form action="#" class="border rounded p-8 space-y-4">
                <label for="name" class="block text-3xl">Name</label>
                <input type="text" placeholder="Name" id="name"
                    class="border border-black rounded-md px-4 py-2 outline-none w-full">
                <label for="email" class="block text-3xl">Email</label>
                <input type="email" id="email" placeholder="Email"
                    class="border border-black rounded-md px-4 py-2 outline-none">
                <label for="username" class="block text-3xl ">Student ID</label>
                <input type="email" id="username" placeholder="Student ID"
                    class="border border-black rounded-md px-4 py-2 outline-none">

                <div class="primary-btn text-center"><button
                        class="bg-blue-500 px-8 py-2 text-white text-2xl border rounded-md font-bold">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>