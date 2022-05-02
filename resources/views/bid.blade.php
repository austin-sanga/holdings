<h1>Bids Page</h1>
{{ session('status') }}

<h2>Loan Details</h2>
<label>Loan Type:</label><span>&nbsp;&nbsp;{{ $data['LoanType'] }}</span><br>
<label>Requested Amount:</label><span>&nbsp;&nbsp;{{ $data['amount'] }}</span><br>
<label>Pay Type:</label><span>&nbsp;&nbsp;{{ $data['PayType'] }}</span><br>
<label>interval pay:</label><span>&nbsp;&nbsp;{{ $data['IntervalPay'] }}</span><br>
<label>Requested Grace period:</label><span>&nbsp;&nbsp;{{ $data['GracePeriod'] }}</span><br>
<form action="/SBid/{{ $data['id'] }}" method="post">
    @csrf
    <label>Suggest Interest rate</label>&nbsp;&nbsp;<input type="number" name="interest" placeholder="fill your rate" required>

<br><br>

<button type="submit">Accept present terms</button>
</form>
<br><br>
<h2>Submit Own Bid Request</h2>

<form action="/Mybid/{{ $data['id'] }}" method="post">
    @csrf
    <label>Fill in your required interest</label>
    <input type="number" name="interest" placeholder="Fill your interest rate"><br><br>
    <select name="PayType" required>
        <option value="" disabled selected hidden>How will you pay...</option>
        <option value="weekly">weekly</option>
        <option value="every 2 weeks">every 2 weeks</option>
        <option value="every 3 weeks">every 3 weeks</option>
        <option value="within same week">within same week</option>
      </select>  <br><br>
    <input type="bigint" name="IntervalPay" placeholder="Fill your Interval pay"><br><br>
    <select name="GracePeriod" required>
        <option value="" disabled selected hidden>Grace period Options</option>
        <option value="No need">No need</option>
        <option value="1 week">1 week</option>
        <option value="2 week">2 week</option>
        <option value="3 week">3 week</option>
        <option value="4 week">4 week</option>
      </select>  <br><br>
    <button type="submit">Submit Bid</button>

</form>




