<x-layout>

    <div class="card mt-5 p-5" style="max-width: 540px height: 100px; mx-auto">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/acme.png') }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center pt-5">
              <h5 class="card-title">Welcome: 
                {{ $post->surname }} {{ $post->Other_Names }}
            </h5>
              <p class="card-text">{{ $post->index_num }}</p>
              <p class="card-text"><small class="text-body-secondary">
                {{ $post->residence }}    
            </small></p>
            </div>
            <div class="d-grid gap-2 p-3">
                <button class="btn btn-outline-secondary" type="button">
                  <a href="/posts/{{ $post->id }}/edit">Go to Admissions</a>
                  </button>
              </div>
          </div>
        </div>
      </div>

</x-layout>