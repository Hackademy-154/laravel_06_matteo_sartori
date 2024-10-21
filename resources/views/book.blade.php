<x-layout>
    <form action="{{route('store')}}" method="POST">
        
        @csrf
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" name="title" class="form-control">

        <label for="plot" class="form-label">Trama:</label>
        <input type="text" name="plot" class="form-control">

        <label for="pages" class="form-label">Pagine:</label>
        <input type="number" name="pages" class="form-control">
        <button type="submit">Conferma</button>
    </form>
</x-layout>