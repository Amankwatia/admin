@props(['post'])

{{-- <div class="container m-2 d-flex justify-content-around">
    <div class="row">
      <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Welcome {{ $admission->surname }}</h5>
              <p class="card-text">Please Check if Index Number is correct: {{ $admission->index_num }}</p>
              <a href="#" class="btn btn-primary">Go to Admissions</a>
            </div>
          </div>
      </div>
  </div> --}}


  <div class="col-md-4 g-2 mb-2 text-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body bg-secondary-emphasis">
          <h5 class="card-title">
             Welcome: {{ $post->surname }}
          </h5>
          <p class="card-text">Please Check Index Number: <span class="text-info">{{ $post->index_num }}</span></p>
          <a href="/posts/{{ $post->id }}" class="btn btn-primary">
            Check details
          </a>
        </div>
      </div>
  </div>

  {{-- <div class="container">
    <div class="row justify-content-center p-3 mx-5">
      @if (count($admissions) == 0)
        <p>No students found</p>
      @endif
        @foreach ($admissions as $admission)
        <div class="col-md-4 g-2 mb-2 text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Welcome {{ $admission->surname }}</h5>
              <p class="card-text">Please Check if Index Number is correct: {{ $admission->index_num }}</p>
              <a href="#" class="btn btn-primary">Go to Admissions</a>
            </div>
          </div>
        @endforeach
</div>
</div>
  </div> --}}

 
