<div style="padding:4px;">
    <h1>Test Component</h1>

    <form>
        <p>
            Selecting an industry will populate the users with their name and email. Then selecting a user will
            cause the state to update and the data to clear.
        </p>

        <select wire:model="industry">
            @foreach ($industries as $id => $industry)
                <option value="{{ $id }}">{{ $industry }}</option>
            @endforeach
        </select>

        <div>
            @if ($users)
                Users: {{ $users->count() }}<br>
                First User's Data: {{ var_dump($users->first()->toArray()) }}
                <br><br>
                @foreach ($users as $i => $user)
                    <div>
                        <input type="checkbox" wire:model="usersSelected" value="{{ $i }}" />
                        {{ $user->name }} {{ $user->email }}
                    </div>
                @endforeach
            @else
                <p>Select an industry...</p>
            @endif
        </div>
    </form>
</div>
