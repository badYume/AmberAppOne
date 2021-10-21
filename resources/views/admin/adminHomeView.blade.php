<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Admin Home</title>
</head>

<body class="bg-red-50">


<nav class="bg-white px-8 pt-2 shadow-md">
    <div class="-mb-px flex justify-center">
        <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
            place-holder
        </a>
        <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
            place-holder
        </a>
        <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="{{route('subject_view')}}">
            View-subjectss
        </a>
        <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="{{route('admin.create')}}">
            Add-student
        </a>
    </div>
</nav>


<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            First Name
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Last Name
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            D.O.B.
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Class
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Phone one
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Email Address
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Gender
        </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
            Action
        </th>
    </tr>
    </thead>
    <tbody class="block md:table-row-group">
    @if( isset($studentList[0]))
        @foreach($studentList as $index => $value)
            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">First Name</span>{{$value['first_nm']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Last Name</span>{{$value['last_nm']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">D.O.B</span>{{$value['d_o_b']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Class</span>{{$value['class']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Phone Number</span>{{$value['phone_nbr']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Email Address</span>{{$value['email_addr']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Gender</span>{{$value['gender']}}
                </td>

                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>

                    <a href="{{route('admin.edit',$value['id'])}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                        Edit
                    </a>

                    <form action="{{route('admin.destroy',$value['id'])}}" method=POST>
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                            Delete
                        </button>
                    </form>


                </td>
            </tr>
        @endforeach

    @else
        {{'There are no students in the database'}}
    @endif


    </tbody>
</table>


</body>

</html>
