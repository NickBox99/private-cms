<x-layouts.default>
    <x-buttons-grid/>
    <div class="table-responsive"> 
        <table class="table">
            <thead>
                <tr class="table-dark top-0 position-sticky">
                    <th scope="col">Id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Цвет</th>
                    <th scope="col">Фон</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr class="table-light">
                        <td>
                            <a href="#">{{ $tag['id'] }}</a>
                        </td>
                        <td>{{ $tag['name'] }}</td>
                        <td>{{ $tag['color'] }}</td>
                        <td>{{ $tag['background'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.default>