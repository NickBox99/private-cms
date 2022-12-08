<x-layouts.default>
    <div class="table-responsive" style="height: calc(100vh - 65px - 2rem)"> 
        <table class="table">
            <thead>
                <tr class="table-dark top-0 position-sticky">
                    <th scope="col">Id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Краткая информация</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Просмотры</th>
                    <th scope="col">Теги</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="table-light">
                        <td>
                            <a href="#">{{ $order['id'] }}</a>
                        </td>
                        <td>{{ $order['name'] }}</td>
                        <td>{{ $order['short_description'] }}</td>
                        <td>{{ number_format($order['price'], 0, '', ' ') }} руб</td>
                        <td>{{ number_format($order['views'], 0, '', ' ') }}</td>
                        <td>
                            <div class="d-flex">
                                @foreach ($order['tags'] as $tag)
                                    <div class="rounded p-2 me-1 lh-1" 
                                        style="background: {{ $tag['background'] }}; color: {{ $tag['color'] }}"
                                    >
                                        {{ $tag['short_name'] }}
                                    </div>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.default>