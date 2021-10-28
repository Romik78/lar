@extends('lay.app')

@section('main')
    <h1>CT</h1>

    <form action="{{ route('frm') }}" method="post">
        @csrf
    {{--<div class="form-group">--}}
        <label  for="name">Enter name</label>
        <input type="text" placeholder="Enter name" name="name" id="name" class="form-control">

            <label  for="email">Enter email</label>
            <input type="text" placeholder="Enter email" name="email" id="email" class="form-control">

            <label  for="subj">Enter subj</label>
            <input type="text" placeholder="Enter subj" name="subj" id="subj" class="form-control">
        {{--</div>--}}

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

@section('title')
    C
@endsection