<x-layout>

    <div class="container mt-5 p-5">
        <div class="row">
          <div class="col-md-5 mx-auto">
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('PUT')
              <div class="mb-2">
                <label for="name" class="form-label"><span class="text-primary">Enrollment Code *</span></label>
                <input type="text" class="form-control" name="enrol_code" value="{{ $post->enrol_code }}">

                @error('enrol_code')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              
              <div class="mb-2">
                <label for="name" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" name="dob" value="{{ $post->dob }}">

                @error('dob')
                <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-2">
                <label for="name" class="form-label">Hometown</label>
                <input type="text" class="form-control" name="hometown" value="{{ $post->hometown }}">

                @error('hometown')
                <p class="text-danger">{{ $message }}</p>
                @enderror
             </div>
             
             <div class="mb-2">
                <label for="name" class="form-label">Guardian</label>
                <input type="text" class="form-control" name="guardian" value="{{ $post->guardian }}">

                @error('guardian')
                <p class="text-danger">{{ $message }}</p>
               @enderror
              </div>
             
              <div class="mb-2">
                <label for="name" class="form-label">Guardian Occupation</label>
                <input type="text" class="form-control" name="occupation" value="{{ $post->occupation }}">

                @error('occupation')
                <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
             
              <div class="mb-2">
                <label for="name" class="form-label">Guardian's Contact</label>
                <input type="text" class="form-control" name="contact" value="{{ $post->contact }}">

                @error('contact')
                <p class="text-danger">{{ $message }}</p>
                 @enderror
                </div>
              
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $post->email }}">

                @error('email')
                <p class="text-danger">{{ $message }}</p>
                 @enderror
                </div>
              
                <button type="submit" class="btn btn-light">Submit Admissions</button>
            </form>
          </div>
        </div>
      </div>

</x-layout>