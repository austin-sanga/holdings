<h1>FINAL LOAN AGREEMENT FORM</h1>
<span>BORROWER: {{ $borrower['name'] }}</span><br><br>
<span>LENDER:  {{ $lender['name'] }}</span><br><br>
<span>DATE LOAN IS MADE:  {{ $now }}</span><br><br>
<span>PLACE WHERE LOAN IS MADE: HOLDINGS CONTRACT</span><br><br>
<span>AMOUNT OF LOAN:  {{ $loandata['amount'] }}</span><br><br>
<span>INTEREST ON LOAN:  {{ $data['interest'] }}</span><br><br>
<span>GRACE PERIOD:  {{ $data['GracePeriod'] }}</span><br><br>
<span>FINAL DATE FOR LOAN REPAYMENT: {{-- {{  }} --}}</span><br><br>
<span>LOAN REPYMENT SCHEDULE:  {{ $data['PayType'] }}, {{ $data['IntervalPay'] }}</span><br><br>{{-- TIME , AMOUNT --}}
<span>AGREEMENT: BORROWER AND LENDER BOTH AGREE TO THE TERMS AS DESCRIBED ABOVE</span><br><br>
<span>By clicking Continue you have signed legally signed and accept loan processing</span><br>
<button type="submit">Agree Contract</button><br><br>
<span>THIS AGREEMENT IS NOW IN FORCE</span>

