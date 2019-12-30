<form action="{{ route('statuses.store')}}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="3" placeholder="post your msg here" name="content"></textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">POST</button>
    </div>
</form>