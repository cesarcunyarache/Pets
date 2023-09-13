@extends('Animal.index')

@section('content')

<div id="container">
    <div class="bg-white rounded-xl h-full w-full py-2">

        <div class="relative overflow-x-auto">
            <table id="table-animals" class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Species
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gender
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <!--  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td> -->

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $.ajax({
        url: '/list',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

            console.log(response);
        },
        error: function(error) {
            console.log(error);
        }
    });



    $(document).ready(function() {
        let tableAnimals = $('#table-animals').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/list",
            },
            columns: [{
                data: 'name'
            },
            {
                data: 'species'
            },
            {
                data: 'gender'
            },
        ]
        
    });
    console.log('');

    });
</script>

@endsection