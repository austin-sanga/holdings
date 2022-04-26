<fieldset>
    <legend>Request Loan</legend>
    <form action="/LoanRequest" method="post">
        @csrf
        <input type="hidden" name="id">
        <input type="hidden" name="users_id" value="{{ $user_id }}">
        <input type="bigint" name="amount" placeholder="Fill amount requested"><br><br>
        <button type="submit">Submit</button>
    </form>
</fieldset>