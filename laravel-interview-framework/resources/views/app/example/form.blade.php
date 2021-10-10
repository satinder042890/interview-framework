
    <div class="row">
	    <div class="col">
		    <form id="example-form" method="post" action='/'>
            {{ csrf_field() }}
			    <div class="form-group">
				    <label for="example-code">Code</label>
				    <input type="text" id="example-code" class="form-control @error('code') @enderror" name="code" placeholder="Example code">
                    @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
			    </div>

			    <div class="form-group">
				    <label for="example-description">Description</label>
				    <input type="text" id="example-description" class="form-control @error('description') @enderror" name="description" placeholder="Example description">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
			    </div>

			    <button type="submit" class="btn btn-primary">Create Example</button>
		    </form>

		    <div id="example-view">
                @if (isset($data))
       @include('app/example/detail') 
 @endif
            </div>
	    </div>
    </div>

