<x-layout>

    <div class="container mt-5 p-5">
        <div class="row">
          <div class="col-md-5 mx-auto">
            <form method="POST" action="/posts">
                @csrf

                <div class="mb-2">
                  <label for="index_num" class="form-label">Index number</label>
                  <input type="number" class="form-control" name="index_num">
  
                  @error('index_num')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="surname" class="form-label">Surname</label>
                  <input type="text" class="form-control" name="surname">
  
                  @error('surname')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="Other_Names" class="form-label">Other Names</label>
                  <input type="text" class="form-control" name="Other_Names">
  
                  @error('Other_Names')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="residence" class="form-label">Residence</label>
                  <input type="text" class="form-control" name="residence">
  
                  @error('residence')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

                <div class="mb-2">
                  <label for="enrol_code" class="form-label">Enrollment Code</label>
                  <input type="text" class="form-control" name="enrol_code">
  
                  {{-- @error('enrol_code')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror --}}
                </div>
                
                <div class="mb-2">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="text" class="form-control" name="dob">
  
                  {{-- @error('dob')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror --}}
                </div>
  
                <div class="mb-2">
                  <label for="hometown" class="form-label">Hometown</label>
                  <input type="text" class="form-control" name="hometown">
  
                  {{-- @error('hometown')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror --}}
               </div>
               
               <div class="mb-2">
                  <label for="guardian" class="form-label">Guardian</label>
                  <input type="text" class="form-control" name="guardian">
  
                  {{-- @error('guardian')
                  <p class="text-danger">{{ $message }}</p>
                 @enderror --}}
                </div>
               
                <div class="mb-2">
                  <label for="occupation" class="form-label">Guardian Occupation</label>
                  <input type="text" class="form-control" name="occupation">
  
                  {{-- @error('occupation')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror --}}
                </div>
               
                <div class="mb-2">
                  <label for="contact" class="form-label">Guardian's Contact</label>
                  <input type="text" class="form-control" name="contact">
  
                  {{-- @error('contact')
                  <p class="text-danger">{{ $message }}</p>
                   @enderror --}}
                  </div>
                
                  <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email">
  
                  {{-- @error('email')
                  <p class="text-danger">{{ $message }}</p>
                   @enderror --}}
                  </div>
              
                <button type="submit" class="btn btn-light">Submit</button>
            </form>
          </div>
        </div>
      </div>

</x-layout>