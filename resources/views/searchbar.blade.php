<div>
    <form method="GET" action="{{ route('search') }}">
        <input type='text' name='query' placeholder='Search' value="{{ request('query') }}">
        <button type='submit'>Search</button>
    </form>
</div>