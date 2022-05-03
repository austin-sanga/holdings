<h1>Welcome To Bids Page</h1>

<table border="1">
    <tr>
        <td>Interest</td>
        <td>Paytype</td>
        <td>Interval Pay</td>
        <td>Grace Period</td>
    </tr>

    @foreach ($data as $data)
    <tr>
        <td>{{ $data['interest'] }}</td>
        <td>{{ $data['PayType'] }}</td>
        <td>{{ $data['IntervalPay'] }}</td>
        <td>{{ $data['GracePeriod'] }}</td>
    </tr>
@endforeach

</table>
