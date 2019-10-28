@component('files.partials._file', compact('file'))
	@slot('links')	
		<div class="level">
			<div class="level-left">
				<p class="level-item">
					<a href="">Preview file</a>
				</p>

				<p class="level-item">
					<a href="#" onclick="event.preventDefault(); document.getElementById('approve-{{ $file->id }}').submit()">Approve</a>
				</p>

				<form action="{{ route('admin.files.new.update', $file) }}" method="post" id="approve-{{ $file->id }}" class="is-hidden">
					@csrf
					@method('patch')
				</form>

				<p class="level-item">
					<a href="">Reject</a>
				</p>
			</div>
		</div>
	@endslot
@endcomponent