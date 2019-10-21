@extends('account.layouts.default')

@section('account.content')
	<h1 class="title">Make changes to {{$file->title}}</h1>

  @if($approval)
    @include('account.files.partials._changes', compact('approval', 'file'))
  @endif

	<form action="{{ route('account.files.update', $file) }}" method="post" class="form">
		@csrf
		@method('patch')

    <input type="hidden" name="live" id="live" value="0">

		<div class="field">
			<div class="control">
				<label for="live" class="checkbox">
					<input type="checkbox" name="live" id="live" {{$file->live ? ' checked' : ''}} value="{{'on' ? 1 : 0}}">
					Live
				</label>
			</div>
		</div>
        <div class="field">
              <label class="label">Title</label>
              <div class="control">
                <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" 
                value="{{ old('title') ? old('title') : $file->title }}">
              </div>
              @error('title')
                <p class="help is-danger">
                    {{$message}}
                </p>
              @enderror 
        </div>

        <div class="field">
              <label class="label">Short overview</label>
              <div class="control">
                <input class="input @error('overview_short') is-danger @enderror" type="text" name="overview_short" id="overview_short" value="{{ old('overview_short') ? old('overview_short') : $file->overview_short }}">
              </div>
              @error('overview_short')
                <p class="help is-danger">
                    {{$message}}
                </p>
              @enderror 
        </div>

        <div class="field">
              <label class="label">Overview</label>
              <div class="control">
                <textarea class="textarea @error('overview') is-danger @enderror" type="text" name="overview" id="overview">{{ 
                	old('overview') ? old('overview') : $file->overview  }}</textarea>
              </div>
              @error('overview')
                <p class="help is-danger">
                    {{$message}}
                </p>
              @enderror 
        </div>

        <div class="field">
              <label class="label">Price($)</label>
              <div class="control">
                <input class="input @error('price') is-danger @enderror" type="text" name="price" id="price" 
                value="{{ old('price') ? old('price') : $file->price }}">
              </div>
              @error('price')
                <p class="help is-danger">
                    {{$message}}
                </p>
              @enderror 
        </div>


        <div class="filed is-grouped">
        	<p class="control">
        		<button class=" button is-primary">Submit</button>
        	</p>
        	<p>Your file changes maybe subject to review</p>
        </div>
	</form>

@endsection