<h2>Profile Page</h2>
<p>
    Name: {{$profile->firstname}} {{$profile->lastname}}
</p>
<p>
    Phone: {{$profile->phone}}
</p>

<a href="{{route('profile.index')}}">Back</a>
