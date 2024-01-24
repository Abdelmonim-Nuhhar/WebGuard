<div class="grid grid-cols-1 bg-yellow-500 min-h-screen p-4">

    @foreach($vulnerabilities as $vulnerability)

        <div class="mb-4">
            <h2 class="text-white bg-blue-500 p-2">Vulnerability {{ $vulnerability->id }}</h2>

            <table class="w-full bg-green-100 p-2">
                <tr>
                    <th class="border">Vulnerability ID</th>
                    <th class="border">Vulnerability Name</th>
                    <th class="border">Severity</th>
                    <td class="border">{{"            "}}</td>
                    <th class="border">Select</th>
                </tr>

                <tr>
                    <td class="border">{{ $vulnerability->id }}</td>
                    <td class="border">{{ $vulnerability->name }}</td>
                    <td class="border">{{ $vulnerability->severity }}</td>
                    <td class="border">{{"       "}}</td>
                    <td class="border p-2"> <button value="{{ $vulnerability->id }}" class="select-product bg-blue-500 text-white p-3 pl-10 pr-10 rounded">Select</button> </td>
                </tr>
            </table>
        </div>

    @endforeach

    

   

</div>


<x-vulnerability-card >
       <x-section-container>
        <strong>Hello there</strong> this is section 1
       </x-section-container>

       <x-section-container>
        <strong>Hello there</strong> this is section 2
       </x-section-container>
     
</x-vulnerability-card>