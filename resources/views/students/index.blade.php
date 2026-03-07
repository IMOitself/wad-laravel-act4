<div>
    @foreach ($students as $student)
        <p>{{$student}}</p><br>
    @endforeach
</div>

<div style="display: flex; flex-direction: row;">
    {{$students}}
</div>