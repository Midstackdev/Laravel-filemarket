@component('files.partials._file', compact('file'))
	@slot('links')	
		<div class="level">
			<div class="level-left">
				<p class="level-item">
					<a href="{{ route('admin.files.show', $file) }}">Preview file</a>
				</p>

				<p class="level-item">
					<a href="#" onclick="event.preventDefault(); document.getElementById('approve-{{ $file->id }}').submit();">Approve</a>
				</p>

				<form action="{{ route('admin.files.new.update', $file) }}" method="post" id="approve-{{ $file->id }}" class="is-hidden">
					@csrf
					@method('patch')
				</form>

				<p class="level-item">
					<a href="#" onclick="event.preventDefault(); document.getElementById('reject-{{ $file->id }}').submit();">Reject</a>
				</p>

				<form action="{{ route('admin.files.new.destroy', $file) }}" method="post" id="reject-{{ $file->id }}" class="is-hidden">
					@csrf
					@method('delete')
				</form>
			</div>
		</div>
	@endslot
@endcomponent