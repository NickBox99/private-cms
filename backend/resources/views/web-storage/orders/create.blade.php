<x-layouts.default>
    <form method="POST" action="/web-storage/orders">
        @csrf

        <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
     
        <div class="mb-3">
            <label for="name" class="form-label text-white">Название</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="short_description" class="form-label text-white">Краткая информация</label>
            <input type="text" class="form-control" id="short_description" name="short_description">
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
            <label for="description">Описание</label>
          </div>

        <div class="mb-3">
            <label for="price" class="form-label text-white">Цена</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        {{-- теги --}}
        
    </form>
</x-layouts.default>