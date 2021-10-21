<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Create Course</title>
</head>


<body>


<div class="md:p-12 bg-indigo-100 flex flex-row flex-wrap">
    <form class="md:w-1/2-screen m-0 p-5 bg-white w-full tw-h-full shadow md:rounded-lg" action="{{route('create_subject_request')}}" method = POST>

        @csrf
        <div class="text-2xl text-indigo-900">CREATE NEW <small class="pl-2 text-gray-500">Create a new subject for students</small></div>

        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Subject Name</label>
            <input type="text" name="subject_name_input" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="MATH">
        </div>

        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Subject Cost</label>
            <input type="text" name="subject_cost_input" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="100000">
        </div>

        <div class="mt-5 p-3 bg-red-400 text-white hidden">
            Invite Code Not Valid.
        </div>

        <div class="mt-2">
            <button class="p-3 bg-indigo-400 text-white w-full hover:bg-indigo-300">Submit Form</button>
        </div>
    </form>
</div>

</body>


</html>
