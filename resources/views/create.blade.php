<!-- resources/views/create.blade.php -->
<form method="POST" action="{{ route('seed-data') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="phone" placeholder="Phone">
    <input type="file" name="image" accept="image/*">
    <button type="submit">Seed Data</button>
</form>
