<x-layouts.default>
    <form method="POST" action="/web-storage/orders">
        @csrf

        <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
     
        <div class="mb-3">
            <label for="name" class="form-label text-white">Название</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label text-white">Цвет</label>
            <input type="text" class="form-control" id="color" name="color">
        </div>

        <div class="mb-3">
            <label for="background" class="form-label text-white">Фон</label>
            <input type="text" class="form-control" id="background" name="background">
        </div>

        {{-- теги --}}
        
    </form>
</x-layouts.default>