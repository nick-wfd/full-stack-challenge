<form method="POST" action="/comments" class="form-horizontal">
	{{ csrf_field() }}
	<input type="hidden" name="referral_id" id="referral_id" value="{{ $referral->id ?? 0 }}">
	<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
		<label for="comment" class="col-md-4 control-label">Comment</label>

		<div class="col-md-6">
			<input id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required autofocus>

			@if ($errors->has('comment'))
			<span class="help-block">
				<strong>{{ $errors->first('comment') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">
				Submit
			</button>
		</div>
	</div>
</form>