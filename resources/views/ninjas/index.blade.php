<x-layout>
    <p>{{ $greetings }} Ninjas</p>
    <p>All Ninjas will be listed here</p>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                {{-- pass href content to card compoent --}}
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="true" var="passing value">
                    <h3> {{ $ninja['name'] }}</h3>

                </x-card>

            </li>
        @endforeach
    </ul>
</x-layout>
