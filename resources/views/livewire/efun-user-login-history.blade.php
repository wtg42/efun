<div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-light-blue-50 to-light-blue-100 p-10">
    {{-- Do your work, then step back. --}}
    {{-- {{ dd($userLoginHistory) }} --}}
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Name</th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Email</th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Date On Site</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($userLoginHistory) }} --}}
            @foreach($userLoginHistory as $records)
            {{-- {{ dd($records) }} --}}
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
                        <p class="text-gray-900 whitespace-no-wrap text-center">
                            {{ $records->name }}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
                        <p class="text-gray-900 whitespace-no-wrap text-center">
                            {{ $records->email }}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                        <p class="text-gray-900 whitespace-no-wrap text-center">
                            {{ $records->updated_at }}
                        </p>
                    </td>
                </tr>
            @endforeach
            {{ $userLoginHistory->links() }}
        </tbody>
    </table>
</div>
