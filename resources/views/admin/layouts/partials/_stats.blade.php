<section class="hero is-primary">
	<div class="hero-body">
		<div class="level">
			<div class="level-item has-text-centered">
				<div class="">
					<p class="heading">Total Files</p>
					<p class="title">{{$fileCount}}</p>
				</div>
			</div>

			<div class="level-item has-text-centered">
				<div class="">
					<p class="heading">Total Sales</p>
					<p class="title">{{$saleCount}}</p>
				</div>
			</div>

			<div class="level-item has-text-centered">
				<div class="">
					<p class="heading">Commision this month</p>
					<p class="title">${{ number_format($thisMonthCommision, 2) }}</p>
				</div>
			</div>

			<div class="level-item has-text-centered">
				<div class="">
					<p class="heading">Lifetime commision</p>
					<p class="title">${{ number_format($lifetimeCommission, 2) }}</p>
				</div>
			</div>
		</div>
	</div>
</section>