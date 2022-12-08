<x-layouts.default>
    <div class="table-responsive" style="height: calc(100vh - 65px - 2rem)"> 
        <table class="table">
            <thead>
                <tr class="table-dark top-0 position-sticky">
                    <th scope="col">Название</th>
                    <th scope="col">Краткая информация</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Просмотры</th>
                    <th scope="col">Теги</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 101; $i++)
                    <tr class="table-light">
                        <th scope="row"></th>
                        <td> руб</td>
                        <td> руб</td>
                        <td>{{ $i }}</td>
                        <td>{{ $i }}</td>
                    </tr>
                @endfor 
            </tbody>
        </table>
    </div>
</x-layouts.default>