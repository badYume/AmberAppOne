<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>CREATE</title>
</head>

<body class="bg-gray-50">


<div class="w-full bg-grey-500">
    <div class="container mx-auto py-8">
        <div class="w-96 mx-auto bg-white rounded shadow">

            <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Student Application
            </div>

            <form name="student_application" id="student_application" action="{{route('admin.store')}}" method = POST>
                @csrf
                <div class="py-4 px-8">

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student First Name:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="first_name_input" value="" placeholder="Enter First Name">

                    </div>


                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student Last Name:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="last_name_input" value="" placeholder="Enter Last Name">

                    </div>


                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Date Of Birth:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                               name="d_o_b_input" value="">
                        <p id=error_intake_year></p>
                    </div>

                     <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student Class:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="class_input" value="" placeholder="Enter Class">

                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student Phone Number:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="phone_number_input" value="" placeholder="Enter Phone Number">

                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student Email:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="email_input" value="" placeholder="Enter Email">

                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Student Gender:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                               name="gender_input" value="" placeholder="Enter Gender">

                    </div>

                    <div class="mb-4">
                        <button
                            class="mb-2 mx-16 rounded-full py-1 px-24 bg-gradient-to-r from-green-400 to-blue-500 ">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>


</body>
</html>
