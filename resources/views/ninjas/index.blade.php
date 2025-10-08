<x-layout>
    <p>{{ $greetings }} Ninjas</p>
    <p>All Ninjas will be listed here</p>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p> {{ $ninja['name'] }}- {{ $ninja['age'] }} years old</p>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    view details
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
