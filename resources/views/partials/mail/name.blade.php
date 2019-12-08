<html>

<body>
    <p style='font-size:32px'>Xin chào {{$data['name']}} !!!</p>
    <br>
    <div>Chúng tôi gửi Email này để thông báo cho bạn đơn hàng bạn đã mua</div>
    <br>
    <div>Sau đây là những mặt hàng bạn đã đặt:</div>
    <ul>
        @foreach ($data['product_cart'] as $item)
        <li>
            <b style='font-size:25px'>Tên Sản Phẩm : </b>
            <i style='font-size:18px'>{{$item['item']['ProName']}}</i>
            &nbsp;


        </li>
        <li><b>Giá:</b>
            <i>@if($item['item']['promotion_price']==0)
                {{$item['item']['unit_price']}}@else{{$item['item']['promotion_price']}}@endif VND</i>
        </li>
        @endforeach
        &nbsp;
        <li><b style='font-size:18px'>Địa chỉ: </b>
            <i>{{$data['address']}}</i><br></li>
        &nbsp;
        <li>
            <b style='font-size:18px'>Với lời nhắn: </b>
            <i>{{$data['message']}}</i></li>
        <li><b style="font-size:30px">Tổng tiền: {{$data['totalPrice']}}</b> </li>
    </ul>
    <p>Cảm ơn bạn đã tin dùng sản phẩm của chúng tôi</p>
    <p class="copyright text-center"> &copy; Copyright @2019 <a href="{{route('home')}}">Motorcycle | Shop</a></p>
</body>

</html>