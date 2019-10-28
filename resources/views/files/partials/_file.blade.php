<article class="media">
	<div class="media-content">
		<div class="content">
			<p>
				<strong>
					<a href="{{ route('files.show', $file) }}">{{ $file->title }}</a>
				</strong>
				<br>
				{{ $file->short_overview }}
			</p>
		</div>
		{{ $links }}
	</div>
</article>