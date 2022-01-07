@extends('layouts.app')
<table border="1">
    @foreach($students as $student)

        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td><a href="{{route('students.edit', $student->id)}}">Edit</a></td>
            <td>
                <form method="post" action="{{route('students.destroy',$student->id)}}" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">

                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>

        </tr>
        <br>
    @endforeach
</table>