@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
    <h1>Add Question for the Quiz: {{$quiz_list->title}}</h1>
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div><br />
    @endif
        <div class ="show-alert">
            @if(session('error'))
            <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; padding: 0.75rem 1.25rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
        </div>
    <div class="text-center">
        <div>
            <form method="post" action="{{route('store.question')}}">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Question" name="question" required class="form-control">
                </div>
                <input type="hidden" name="quiz_id" value="{{$quiz_id}}" readonly required>
                <div class="form-group">
                    <input type="text" placeholder="Option A" name="option_a" required class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Option B" name="option_b" required class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Option C" name="option_c" required class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Option D" name="option_d" required class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control" name="correct_option" required>
                        <option selected disabled value>-- Select Correct Option --</option>
                        <option value="option_a">A</option>
                        <option value="option_b">B</option>
                        <option value="option_c">C</option>
                        <option value="option_d">D</option>
                    </select>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">C</th>
                <th scope="col">D</th>
                <th scope="col">Correct</th>
            </tr>
            </thead>
            <tbody>
            @php
                $sl=1;
            @endphp
            @foreach($questions as $question)
                <tr>
                    <th scope="row">{{$sl++}}</th>
                    <td>{{$question->question}}</td>
                    <td>{{$question->option_a}}</td>
                    <td>{{$question->option_b}}</td>
                    <td>{{$question->option_c}}</td>
                    <td>{{$question->option_d}}</td>
                    <td>{{$question->correct_option}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
function correctAnswer(){
    let a = document.getElementsByName('option_a')
    alert('a');
}
    </script>
    </section>
</div>
@endsection
