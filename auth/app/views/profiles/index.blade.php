<h2>Profiles</h2>
<p>
    <h4>{{ Auth::user()->profile->firstname }}</h4>
</p>
<p>
<img src="{{Auth::user()->gravatar()}}" alt="" />
</p>


<p><a href="{{action('AuthController@logout')}}">Logout</a></p>
<table>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $profile->firstname }}</td>
            <td>{{ $profile->lastname }}</td>
            <td>{{ $profile->phone }}</td>
            <td>
                @if(Auth::user()->id == $profile->user_id)
                    <a href="{{route('profile.edit', [$profile->id])}}">
                        Update
                    </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
