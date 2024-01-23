<div class="grid grid-cols-4 bg-yellow-500 min-h-screen p-4">

    @foreach($vulnerabilities as $vulnerability)

        <div class="mb-4">
            <h2 class="text-white bg-blue-500 p-2">Vulnerability {{ $vulnerability->id }}</h2>

            <table class="w-full bg-green p-2">
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
                    <td class="border"> <button value="{{ $vulnerability->id }}" class="select-product">Select</button> </td>
                </tr>
            </table>
        </div>

    @endforeach

</div>


