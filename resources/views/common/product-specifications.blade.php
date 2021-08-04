<div class="row p-4">
    <table class="table" style="border-bottom: 1px #f68e1e">
        <thead style="background-color: #f68e1e">
        <tr class="text-center" style="color: #FFFFFF;">
            <th>Đặc tính</th>
            <th>Đơn vị</th>
            <th>Mô tả / giá trị</th>
            <th>Ghi chú</th>
        </tr>
        </thead>
        <tbody style="background-color: #fff6eb" class="text-center">
        @foreach($detail->specifications as $specification)
            <tr>
                <td>{{$specification->property}}</td>
                <td>{{$specification->units}}</td>
                <td>{{$specification->value}}</td>
                <td>{{$specification->notes}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
