<div class="overflow-hidden rounded-lg shadow-md">
    <div class="bg-red-600 px-4 py-3 text-left font-bold uppercase">
        <div class="flex items-center justify-start text-white">
            <svg class="mr-2 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                </path>
            </svg> Rankings
        </div>
    </div>
    <div class="bg-white">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="w-8 px-6 py-3 pr-0 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">#</div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">Name
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">Points
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">Win</div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">Loss
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">OT Win
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left">
                        <div class="text-cool-gray-500 text-xs font-medium uppercase leading-4 tracking-wider">OT Loss
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 text-left">
                @foreach ($rankings as $index => $team)
                    <tr class="">
                        <td
                            class="whitespace-no-wrap text-cool-gray-900 flex items-center px-6 py-4 pr-0 text-sm leading-5">
                            <svg class="mr-1 h-4 w-4" style="color: {{ $this->getTrophyColor($index + 1) }}"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 35.7 22.5 72.4 61.9 100.7 31.5 22.7 69.8 37.1 110 41.7C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6c40.3-4.6 78.6-19 110-41.7 39.3-28.3 61.9-65 61.9-100.7V88c0-13.3-10.7-24-24-24zM99.3 192.8C74.9 175.2 64 155.6 64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-15.1-5.2-29.2-12.4-41.7-21.4zM512 144c0 16.1-17.7 36.1-35.3 48.8-12.5 9-26.7 16.2-41.8 21.4 7-25 11.8-53.6 12.8-86.2H512v16z">
                                </path>
                            </svg>
                            {{ str_ordinal($index + 1) }}
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            <p class="text-cool-gray-600 truncate hover:font-bold">
                                <a href="https://gameshard.io/teams/{{ $team['contestant']['id'] }}">
                                    {{ $team['contestant']['name'] }}
                                </a>
                            </p>
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            {{ $team['points'] }}
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            {{ $team['win'] }}
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            {{ $team['loss'] }}
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            {{ $team['ot_win'] }}
                        </td>

                        <td class="whitespace-no-wrap text-cool-gray-900 px-6 py-4 text-sm leading-5">
                            {{ $team['ot_loss'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
