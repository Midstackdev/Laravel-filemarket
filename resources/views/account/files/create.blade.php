@extends('account.layouts.default')

@section('account.content')
	<h1 class="title">Sell a file</h1>

	<form action="{{ route('account.files.store', $file) }}" method="post" class="form">
		@csrf
				{{-- <input type="hidden" name="uploads" value="{{ $file->id }}"> --}}
				<div class="field">
					<div id="file" class="dropzone"></div>
					@error('uploads')
						<p class="help is-danger">
								{{$message}}
						</p>
					@enderror 
				</div>

				<div class="field">
					<label class="label">Title</label>
					<div class="control">
						<input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
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
						<input class="input @error('overview_short') is-danger @enderror" type="text" name="overview_short" id="overview_short" value="{{ old('overview_short') }}">
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
						<textarea class="textarea @error('overview') is-danger @enderror" type="text" name="overview" id="overview" value="{{ old('overview') }}"></textarea>
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
						<input class="input @error('price') is-danger @enderror" type="text" name="price" id="price" value="{{ old('price') }}">
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
					<p>We'll review your file before it goes live.</p>
				</div>
	</form>

@endsection

@section('scripts')
	@include('files.partials._file_upload_js')
@endsection