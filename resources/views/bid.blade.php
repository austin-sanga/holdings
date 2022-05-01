<h1>Bids Page</h1>

<h2>Loan Details</h2>
<label>Loan Type:</label><span>&nbsp;&nbsp;{{ $data['LoanType'] }}</span><br>
<label>Requested Amount:</label><span>&nbsp;&nbsp;{{ $data['amount'] }}</span><br>
<label>Pay Type:</label><span>&nbsp;&nbsp;{{ $data['PayType'] }}</span><br>
<label>interval pay:</label><span>&nbsp;&nbsp;{{ $data['IntervalPay'] }}</span><br>
<label>Requested Grace period:</label><span>&nbsp;&nbsp;{{ $data['GracePeriod'] }}</span><br>
<form action="s_bidSave" method="post">
    <label>Suggest Interest rate</label>&nbsp;&nbsp;<input type="number" placeholder="fill your rate" required>

<br><br>

<button type="submit">Accept present terms</button>
</form>




